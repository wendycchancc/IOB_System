<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\itemcategory;
use App\items;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class itemsController extends Controller
{

    public function index()
    {
        $items = items::all();
        return View::make('items.index')->with('items', $items);
    }


    public function create()
    {
        $id = Auth::id();
        if ($id == null){
            return Redirect::to('items/');
        }
        $itemcategory = itemcategory::all();
        #$id = Auth::id();
        $user = User::find($id);
        return View::make('items.create')
               ->with(array('itemcategory'=>$itemcategory ,'user'=>$user ));
    }


    public function store(Request $request)
    {
        $input = $request->all();
        
        $rules = array(
            'itemcategoryId' => 'required|numeric|digits_between:0,10',
            'id' => 'required|numeric|digits_between:0,10',
            'name' => 'required|between:0,255',
            'descriptions' => 'required',
            'stock' => 'required|numeric|digits_between:0,10',
            'price' => 'required|numeric|between:0,9999999999.9',
        );
        
        $messages = [
            'itemcategoryId.required' => 'Please input the item Category Id',
            'id.required' => 'Please input the User ID',
            'name.required' => 'Please input the Name',
            'descriptions.required' => 'Please input the Descriptions',
            'stock.required' => 'Please input the Stock',
            'price.required' => 'Please input the Price',
        ];
        
        $validator = Validator::make($input, $rules, $messages);
        
        if ($validator->fails()) {
            return Redirect::to('items/')->withErrors($validator);
        } else {
    
            $items = new items;
            $items->name = $request->name;
            $items->descriptions = $request->descriptions;
            $items->price = $request->price;
            $items->stock = $request->stock;
            $items->name = $request->name;
            $items->ownerId = $request->id;
            $items->itemcategoryId = $request->itemcategoryId;
            $items->status = 0;
            $items->delete = 0;
            $items->image = $request->image;
            $items->file = $request->file;
            $items->managementdate = Carbon::now();
            $items->createdate = Carbon::now();
            $items->save();

            return redirect('items')->with('success','Successfully created Item Category!!');
        }
    }

 
    public function show($id)
    {
        $items = items::find($id);
        return View::make('items.show')->with('items', $items);
    }


    public function edit($id)
    {
        $items = items::find($id);
        return View::make('items.edit')->with('items', $items);
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $rules = array(
            'name' => 'required|between:0,255',
            'descriptions' => 'required',
            'stock' => 'required|numeric|digits_between:0,10',
            'price' => 'required|numeric|between:0,9999999999.9',
            'status' => 'required|numeric|between:0,1',
        );
        
        $messages = [
            'name.required' => 'Please input the Name',
            'descriptions.required' => 'Please input the Descriptions',
            'stock.required' => 'Please input the Stock',
            'price.required' => 'Please input the Price',
            'status.required' => 'Please input the Price',
        ];
        
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('items/')->withErrors($validator);
        } else {
            $items = items::find($id); 
            $items->name = $request->name;
            $items->descriptions = $request->descriptions;
            $items->stock = $request->stock;
            $items->price = $request->price;
            $items->status = $request->status;
            $items->image = $request->image;
            $items->file = $request->file;
            $items->managementdate = Carbon::now();
            $items->save();
            return redirect('items')->with('success','Successfully updated Item !');
        }
    }


    public function destroy($id)
    {
        $items = items::find($id);
        $items->delete = 1;
        $items->save();
        
        return redirect('items')->with('success','Successfully deleted Items !');
    }
}
