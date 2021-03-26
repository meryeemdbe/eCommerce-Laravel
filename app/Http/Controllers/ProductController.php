<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index() {
       // return Product::all();
       $data = Product::all();
       return view('product', ['products'=>$data]);
    }
    function detail ($id) 
    {
        $data = Product::find($id) ;
        return view('detail', ['product'=>$data]);

    }
    function search(Request $req) {
           // return $req->input();
           // this get the details of a row that has a query name 
            $data =Product::where('name','like','%'.$req->input('query').'%')->get() ;
            return view('search', ['products'=> $data]);
    }
}
