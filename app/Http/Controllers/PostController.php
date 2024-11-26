<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_products;

class PostController extends Controller
{


    public function index(){
        $records = M_products::with('M_products_view')->orderBy('id')->get();

        #dd($records);
        return view('index',compact('records'));
    }

    public function product(int $id){
        $records = M_products::with('M_products_view')->where('id', '=' ,$id)->get();

        return view('product',compact('records'));
    }
}
