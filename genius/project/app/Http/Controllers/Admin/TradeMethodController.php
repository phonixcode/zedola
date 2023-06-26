<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CryptoMethod;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TradeMethodController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
         $datas = CryptoMethod::orderBy('id','desc');

         return Datatables::of($datas)
                            ->editColumn('photo', function(CryptoMethod $data) {
                                $photo = $data->photo ? url('assets/images/'.$data->photo):url('assets/images/noimage.png');
                                return '<img src="' . $photo . '" alt="Image">';
                            })

                            ->addColumn('action', function(CryptoMethod $data) {

                              return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.'Actions' .'
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.method.edit',$data->id) . '"  class="dropdown-item">'.__("Edit").'</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="'.  route('admin.method.delete',$data->id).'">'.__("Delete").'</a>
                                </div>
                              </div>';

                            })
                            ->rawColumns(['photo','action'])
                            ->toJson();
    }

    public function index()
    {
        return view('admin.trademethod.index');
    }

    public function create()
    {
        return view('admin.trademethod.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'photo'  => 'required|mimes:jpeg,jpg,png,svg',
            'name'=>'required',
            'symbol'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data = new CryptoMethod();
        $input = $request->all();

        if ($file = $request->file('photo'))
         {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            $input['photo'] = $name;
        }

        $data->fill($input)->save();

        $msg = 'New Data Added Successfully.'.'<a href="'.route("admin.method.index").'">View Method Lists</a>';
        return response()->json($msg);
    }


    public function edit($id)
    {
        $data = CryptoMethod::findOrFail($id);
        return view('admin.trademethod.edit',compact('data'));
    }


    public function update(Request $request, $id)
    {
        $rules = [
            'photo'  => 'mimes:jpeg,jpg,png,svg',
            'name'=>'required',
            'symbol'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
          return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data = CryptoMethod::findOrFail($id);
        $input = $request->all();

        if ($file = $request->file('photo'))
        {
            $name = Str::random(8).time().'.'.$file->getClientOriginalExtension();
            $file->move('assets/images',$name);
            @unlink('assets/images/'.$data->photo);
            $input['photo'] = $name;
        }
        $data->update($input);

        $msg = 'Data Updated Successfully.'.'<a href="'.route("admin.method.index").'">View Post Lists</a>';
        return response()->json($msg);
    }

    public function destroy($id)
    {
        $data = CryptoMethod::findOrFail($id);
        @unlink('assets/images/'.$data->photo);
        $data->delete();
        $msg = 'Data Deleted Successfully.'.'<a href="'.route("admin.method.index").'">View Method Lists</a>';
        return response()->json($msg);
    }

}
