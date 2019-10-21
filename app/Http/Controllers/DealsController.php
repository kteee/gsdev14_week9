<?php

namespace App\Http\Controllers;

use App\Deal;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealsController extends Controller
{

    // 取引一覧表示
    public function index(){
        $deals = Deal::all();
        $items = Item::all();
        return view('deals/dealsIndex', [
            'deals'=>$deals,
            'items'=>$items
        ]);
    }

    // 取引登録
    public function new(Request $request){
        // validation
        $validator = Validator::make($request->all(),[
            'date'=>'required',
            'type'=>'required',
            'item'=>'required',
            'amount'=>'required|min:1',
            'detail'=>'required'
        ]);

        if($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $deal = new Deal;
        $deal->date = $request->date;
        $deal->type = $request->type;
        $deal->item = $request->item;
        $deal->amount = $request->amount;
        $deal->detail = $request->detail;
        $deal->save();
        return redirect('/deals');
    }

    public function show($id){
        $deal = Deal::find($id);
        return view('deals/dealShow', [
            'deal'=>$deal
        ]);
    }

    public function edit(Request $request){
        $validator = Validator::make($request->all(),[
            'date'=>'required',
            'amount'=>'required|min:1',
            'item'=>'required',
            'detail'=>'required'
        ]);

        if($validator->fails()) {
            return redirect('/')->withErrors($validator)->withInput();
        }

        $id = $request->id;
        $deal = Deal::find($id);
        $deal->date = $request->date;
        $deal->amount = $request->amount;
        $deal->item = $request->item;
        $deal->detail = $request->detail;
        $deal->save();
        return redirect('/deals');
    }

    public function delete($id){
        Deal::find($id)->delete();
        return redirect('/deals');  
    }

}
