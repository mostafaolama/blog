<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function example(){
        $names = [
            ['name' => 'Mostafa', 'family' => 'Olamaiee'],
            ['name' => 'Sana' , 'family' => 'Gane'],
            ['name' => 'Mohammad' , 'family' => 'Yadegari']
        ];
    //dd(compact('names')) ;
    return view('example', compact('names'));
    }
}
