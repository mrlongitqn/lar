<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function Add(){
        return view('Product.Add');
    }
    function Edit(){
        $tensp = 'Bánh mỳ';
        $so = 6;
        return view('Product.Edit', compact('tensp','so'));
    }
}
