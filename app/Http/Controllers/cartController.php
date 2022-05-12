<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\itemcategory;
use App\items;
use App\User;
use App\cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;


class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
            if ($id == null){
                return Redirect::to('/');
            }
        $cart = DB::table('cart')
        ->leftJoin('items','cart.itemsId','items.itemsId')
        #->leftJoin('users','cart.ownerId','users.id')
        ->where('cart.ownerId',$id)
        ->get();
        
        return View::make('cart.index')->with('cart', $cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        $rules = array(
            'quantity' => 'required|numeric|digits_between:0,10',
        );
        
        $messages = [
            'quantity.required' => 'Please input the item quantity',
        ];
        
        $validator = Validator::make($input, $rules, $messages);
        
        if ($validator->fails()) {
            return Redirect::to('shop/')->withErrors($validator);
        } else {
            $id = Auth::id();
            if ($id == null){
                return Redirect::to('shop/');
            }
            $cart = new cart;
            $cart->quantity = $request->quantity;
            $cart->ownerId = $id;
            $cart->itemsId = $request->itemsId;
            $cart->status = 0;
            $cart->createdate = Carbon::now();
            $cart->save();

            return redirect('cart')->with('success','Successfully Add Item to Shopping-cart!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = cart::find($id);
        return View::make('cart.edit')->with('cart', $cart);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $rules = array(
            'quantity' => 'required|numeric|digits_between:0,10',
        );
        
        $messages = [
            'quantity.required' => 'Please input the item quantity',
        ];
        
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('shop/')->withErrors($validator);
        } else {
            $cart = cart::find($id); 
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect('cart')->with('success','Successfully updated Item Quantity !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = cart::find($id);
        $cart->status = 1;
        $cart->save();
        
        return redirect('itemcategory')->with('success','Successfully deleted Item Category!');
    }
}
