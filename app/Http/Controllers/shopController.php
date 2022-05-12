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

class shopController extends Controller
{

    public function index()
    {
        $items = items::all();
        return View::make('shop.index')->with('items', $items);
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
        $items = items::find($id);
        return View::make('shop.show')->with('items', $items);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
