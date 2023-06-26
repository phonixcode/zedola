<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeLog;
use Datatables;
use Illuminate\Http\Request;

class PractiseTradeLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables(Request $request, $result)
    {
        if($request->result == 'win'){
            $datas = PracticeLog::whereResult(1)->orderBy('id','desc');
        }elseif($request->result == 'loss'){
            $datas = PracticeLog::whereResult(2)->orderBy('id','desc');
        }elseif($request->result == 'draw'){
            $datas = PracticeLog::whereResult(3)->orderBy('id','desc');
        }else{
            $datas = PracticeLog::orderBy('id','desc');
        }

         return Datatables::of($datas)
                            ->editColumn('user_id', function(PracticeLog $data) {
                                return $name = $data->user != NULL ? $data->user->name : 'Customer Deleted';
                            })
                            ->editColumn('created_at', function(PracticeLog $data) {
                                return $date = date('d-m-Y',strtotime($data->created_at));
                            })
                            ->editColumn('transaction_no', function(PracticeLog $data) {
                                return $data->transaction_no;
                            })
                            ->addColumn('crypto_name', function(PracticeLog $data) {
                                return $name = $data->method != NULL ? $data->method->name : 'Crypto Method Deleted';
                            })
                            ->addColumn('crypto_symbol', function(PracticeLog $data) {
                                return $symbol = $data->method != NULL ? $data->method->symbol : 'Crypto Method Deleted';
                            })
                            ->editColumn('amount',function(PracticeLog $data){
                                return $amount = showAmount($data->amount);
                            })
                            ->editColumn('type',function(PracticeLog $data){
                                if($data->type == 'high'){
                                    return '<span class="badge badge-success">'.__('High').'</span>';
                                }else{
                                    return '<span class="badge badge-danger">'.__('Low').'</span>';
                                }
                            })
                            ->editColumn('status',function(PracticeLog $data){
                                if($data->status == 1){
                                    return '<span class="badge badge-warning">'.__('Pending').'</span>';
                                }else{
                                    return '<span class="badge badge-success">'.__('Completed').'</span>';
                                }
                            })
                            ->editColumn('result',function(PracticeLog $data){
                                if($data->result == 1){
                                    return '<span class="badge badge-success">'.__('Win').'</span>';
                                }elseif($data->result == 2){
                                    return '<span class="badge badge-danger">'.__('Loss').'</span>';
                                }elseif($data->result == 3){
                                    return '<span class="badge badge-info">'.__('Draw').'</span>';
                                }else{
                                    return '<span class="badge badge-warning">'.__('Pending').'</span>';
                                }
                            })
                            ->editColumn('result_time',function(PracticeLog $data){
                                if($data->result_time != NULL){
                                    return $date = date('d-m-Y H:i:s',strtotime($data->result_time));
                                }else{
                                    return '--';
                                }
                            })
                            ->rawColumns(['user_id','created_at','crypto_name','crypto_symbol','amount','type','status','result','result_time'])
                            ->toJson();
    }

    public function index()
    {
        return view('admin.practise_trade_log.all');
    }

    public function winning()
    {
        return view('admin.practise_trade_log.win');
    }

    public function lose()
    {
        return view('admin.practise_trade_log.lose');
    }

    public function draw()
    {
        return view('admin.practise_trade_log.draw');
    }
}
