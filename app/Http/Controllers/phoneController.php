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
        $products = phone::all();
        return view('products_view', compact('products'));
    }

    function show($id){
        $product = phone::findOrFail($id);
            return view ('product_view', compact('product'));
    }
}
