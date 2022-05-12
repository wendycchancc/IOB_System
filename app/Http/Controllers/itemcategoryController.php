<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemcategory;
use App\items;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class itemcategoryController extends Controller
{

    public function index()
    {
        $itemcategory = itemcategory::all();
        return View::make('itemcategory.index')->with('itemcategory', $itemcategory);
    }


    public function create()
    {
        return View::make('itemcategory.create');
    }


    public function store(Request $request)
    {

        $input = $request->all();
        
        $rules = array(
            'name' => 'required|between:0,20',
        );
        
        $messages = [
            'name.required' => 'Please input the Name',
        ];
        
        $validator = Validator::make($input, $rules, $messages);
        
        if ($validator->fails()) {
            return Redirect::to('itemcategory/')->withErrors($validator);
        } else {
            $itemcategory = new itemcategory;
            $itemcategory->name = $request->name;
            $itemcategory->delete = 0;
            $itemcategory->managementdate = Carbon::now();
            $itemcategory->createdate = Carbon::now();
            $itemcategory->save();

            return redirect('itemcategory')->with('success','Successfully created Item Category!!');
        }
    }

    public function show($id)
    {
        $itemcategory = itemcategory::find($id);
        return View::make('itemcategory.show')->with('itemcategory', $itemcategory);
    }


    public function edit($id)
    {
        $itemcategory = itemcategory::find($id);
        return View::make('itemcategory.edit')->with('itemcategory', $itemcategory);
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $rules = array(
            'name' => 'required|between:0,20',
        );
        
        $messages = [
            'name.required' => 'Please input the Name',
        ];
        
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('itemcategory/')->withErrors($validator);
        } else {
            $itemcategory = itemcategory::find($id); 
            $itemcategory->name = $request->name;
            $itemcategory->managementdate = Carbon::now();
            $itemcategory->save();
            return redirect('itemcategory')->with('success','Successfully updated Item Category!');
        }
    }

    public function destroy($id)
    {
        $itemcategory = itemcategory::find($id);
        $itemcategory->delete = 1;
        $itemcategory->save();
        
        return redirect('itemcategory')->with('success','Successfully deleted Item Category!');
    }
}
