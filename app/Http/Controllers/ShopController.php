<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view("accueil");
    }

    public function details(){
        return view("details");
    }
}
