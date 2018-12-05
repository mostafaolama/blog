<?php

namespace App\Http\Controllers;

use App\phone;
use Illuminate\Http\Request;

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

    function creat(){
        return view('insert_new_phone');
    }


        public function save (Request $request){ //validation form input data
            $dataValidation = $request->validate([
                'name' => 'required' ,
                'price' => 'numeric | required',
                'brand' => 'required',
                'description '=> 'required'
            ]);
            dd($dataValidation);
            $input = phone::create($request->except('token'));
            $phones = phone::all();
            return view ('phone_list_view', compact("phones"));

            //another way of add record to Database
           /* $input = $request->all();
            $newPhone = new phone;
            $newPhone->name = $input["name"];
            $newPhone->description = $input["description"];
            $newPhone->brand = $input["brand"];
            $newPhone->price = $input["price"];
            $newPhone->save();*/
    }
    public function edit(){
        return view ("edit");
    }

    function makeEdit(Request $request){
        $id = $request->get('id');
        $temp_phone = phone::find($id);
        if($request->name != null)
        $temp_phone->name =  $request->get("name") ;
        if($request->description != null )
            $temp_phone->description = $request->get("description");
        $temp_phone->save();
        dd("temp_phone");

    }

}
