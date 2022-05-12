<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Validator;
use Input;
use Session;
use Redirect;

class userController extends Controller
{

    public function index()
    {
        $users = User::all();
        return View::make('user.index')->with('users', $users);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $users = User::find($id);
        return View::make('user.show')->with('users', $users);
    }


    public function edit($id)
    {
        $users = User::find($id);
        return View::make('user.edit')->with('users', $users);
    }


    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $rules = array(
            'name' => 'required|between:0,255',
            'role' => 'required|between:0,20',
            'phone' => 'required|numeric|digits_between:0,11',
            'fax' => 'nullable|numeric|digits_between:0,11',
            'telex' => 'nullable|numeric|digits_between:0,11',
            'address' => 'required|between:0,255',
            'postcode' => 'required|between:0,19',
            'country' => 'required|between:0,50',
        );
        
        $messages = [
            'name.required' => 'Please input the Name',
            'role.required' => 'Please input the Role',
            'phone.required' => 'Please input the Phone',
            'address.required' => 'Please input the Address',
            'postcode.required' => 'Please input the Post Code',
            'country.required' => 'Please input the Country',
        ];
        
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return Redirect::to('user/')->withErrors($validator);
        } else {
            $users = User::find($id); 
            
            $users->name = $request->name;
            $users->role = $request->role;
            $users->phone = $request->phone;
            $users->fax = $request->fax;
            $users->telex = $request->telex;
            $users->address = $request->address;
            $users->postcode = $request->postcode;
            $users->country = $request->country;
            $users->save();
            return redirect('user')->with('success','Successfully updated User Information !');
        }
    }


    public function destroy($id)
    {
        //
    }
}
