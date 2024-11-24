<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_products;

class PostController extends Controller
{


    public function index(){
        #$data = [
            #'records' => M_products::all(),
            #'images' => M_products::M_products_images();
        $records = M_products::with('M_products_view')->get();
        #];


        return view('index',compact('records'));
        #return view('index', $data);
    }
}
