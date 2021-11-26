<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;

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

        return redirect()->route('viewProduct');
    }

    public function view(){
        $viewProduct=Product::all();//generate SQL select*from category
        return view('showProduct')->with('products',$viewProduct);
    }
}