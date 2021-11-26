<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;
use Session;

class ProductController extends Controller
{
    public function add(){
        $r=request();
        $addProduct=Product::create([
            'CategoryID'=>$r->categoryID,
            'name'=>$r->productName,
            'image'=>$r->productImage,
            'quantity'=>$r->productQuantity,
            'price'=>$r->productPrice,
            'description'=>$r->productDescription,
        ]);
        Session::flash('success',"Product create sucessfully!!");
        return redirect()->route('viewProduct');
    }

    public function view(){
        $viewProduct=DB::table('products')
        ->leftjoin('categories','categories.id','=','products.CategoryID') 
        ->select('products.*','categories.name as catName')
        ->get();  
        return view('showProduct')->with('products',$viewProduct);

    }
}