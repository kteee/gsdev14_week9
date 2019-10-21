<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{   
    public function index(){
        $items = Item::all();
        return view('items/itemsIndex',[
            'items'=>$items
        ]);
    }

    public function new(){
        return view('items/itemsNew');
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:1',
            'type'=>'required'
        ]);
        
        if($validator->fails()){
            return redirect('item/new')->withErrors($validator)->withInput();
        }

        $item = new Item;
        $item->name = $request->name;
        $item->type = $request->type;
        $item->save();
        return redirect('items/new');
    }
}
