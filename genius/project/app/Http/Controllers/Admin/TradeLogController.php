<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TradeLog;
use Datatables;
use Illuminate\Http\Request;

class TradeLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function datatables(Request $request, $result)
    {
        if($request->result == 'win'){
            $datas = TradeLog::whereResult(1)->orderBy('id','desc');
        }elseif($request->result == 'loss'){
            $datas = TradeLog::whereResult(2)->orderBy('id','desc');
        }elseif($request->result == 'draw'){
            $datas = TradeLog::whereResult(3)->orderBy('id','desc');
        }else{
            $datas = TradeLog::orderBy('id','desc');
        }

         return Datatables::of($datas)
                            ->editColumn('user_id', function(TradeLog $data) {
                                return $name = $data->user != NULL ? $data->user->name : 'Customer Deleted';
                            })
                            ->editColumn('created_at', function(TradeLog $data) {
                                return $date = date('d-m-Y',strtotime($data->created_at));
                            })
                            ->editColumn('transaction_no', function(TradeLog $data) {
                                return $data->transaction_no;
                            })
                            ->addColumn('crypto_name', function(TradeLog $data) {
                                return $name = $data->method != NULL ? $data->method->name : 'Crypto Method Deleted';
                            })
                            ->addColumn('crypto_symbol', function(TradeLog $data) {
                                return $symbol = $data->method != NULL ? $data->method->symbol : 'Crypto Method Deleted';
                            })
                            ->editColumn('amount',function(TradeLog $data){
                                return $amount = showAmount($data->amount);
                            })
                            ->editColumn('type',function(TradeLog $data){
                                if($data->type == 'high'){
                                    return '<span class="badge badge-success">'.__('High').'</span>';
                                }else{
                                    return '<span class="badge badge-danger">'.__('Low').'</span>';
                                }
                            })
                            ->editColumn('status',function(TradeLog $data){
                                if($data->status == 1){
                                    return '<span class="badge badge-warning">'.__('Pending').'</span>';
                                }else{
                                    return '<span class="badge badge-success">'.__('Completed').'</span>';
                                }
                            })
                            ->editColumn('result',function(TradeLog $data){
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
                            ->editColumn('result_time',function(TradeLog $data){
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
        return view('admin.trade_log.all');
    }

    public function winning()
    {
        return view('admin.trade_log.win');
    }

    public function lose()
    {
        return view('admin.trade_log.lose');
    }

    public function draw()
    {
        return view('admin.trade_log.draw');
    }
}
