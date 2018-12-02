<?php

namespace App\Http\Controllers;

use App\phone;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DB;
class phoneController extends Controller
{
    function index(){
        //$products = DB::table('products')
          //  ->orderBy('name','asc')
            //->get();
        $phones = phone::all();
        return view('phone_list_view', compact('phones'));
    }

    function show($id){
        $phone = phone::findOrFail($id);
            return view ('phone_view', compact('phone'));
    }
}
