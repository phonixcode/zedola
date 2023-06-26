<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TradeSchedule;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\Validator;

class TradeScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables()
    {
         $datas = TradeSchedule::orderBy('id','desc');

         return Datatables::of($datas)
                            ->editColumn('time', function(TradeSchedule $data) {
                                return  '<div>
                                    <strong>Time</strong> : '.$data->time.' '.ucfirst($data->unit).'
                                </div>';
                            })

                            ->addColumn('action', function(TradeSchedule $data) {

                              return '<div class="btn-group mb-1">
                                <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  '.'Actions' .'
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a href="' . route('admin.schedule.edit',$data->id) . '"  class="dropdown-item">'.__("Edit").'</a>
                                  <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="'.  route('admin.schedule.delete',$data->id).'">'.__("Delete").'</a>
                                </div>
                              </div>';
                            })
                            ->rawColumns(['time','action'])
                            ->toJson();
    }

    public function index()
    {
        return view('admin.schedule.index');
    }


    public function create()
    {
        return view('admin.schedule.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'unit' => 'required',
            'time' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }

        $data = new TradeSchedule;
        $input = $request->all();
        $data->fill($input)->save();

        $msg = 'New Data Added Successfully.'.' '.'<a href="'.route('admin.schedule.index').'"> '.__('View Lists.').'</a>';
        return response()->json($msg);
    }


    public function edit($id)
    {
        $data = TradeSchedule::findOrFail($id);
        return view('admin.schedule.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'unit' => 'required',
            'time' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
        }


        $data = TradeSchedule::findOrFail($id);
        $input = $request->all();
        $data->update($input);

        $msg = 'Data Updated Successfully.'.' '.'<a href="'.route('admin.schedule.index').'"> '.__('View Lists.').'</a>';
        return response()->json($msg);
    }


    public function destroy($id)
    {
        $data = TradeSchedule::findOrFail($id);
        $data->delete();

        $msg = 'Data Deleted Successfully.';
        return response()->json($msg);
    }
}
