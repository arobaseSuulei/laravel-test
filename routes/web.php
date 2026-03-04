<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Property;

Route::get('/', function () {

    $properties=Property::all();
    return view('welcome',[
        'property'=>$properties, // tableau assiociatif clé valeur
    ]);
});


Route::get('/add_properties',function (){
    return view('admin.properties');
});


Route::get('/index/{id}', function ($id) {

    $properties=Property::find($id);



    return view('index',[
        'property'=>$properties, // tableau assiociatif clé valeur
    ]);
});
