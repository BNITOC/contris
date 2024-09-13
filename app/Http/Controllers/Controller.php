<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function index(){
        $categories = Category::all();            
            
        return view('back.pages.user.category.index')->with([
            'categories' => $categories
        ]);
    }
}
