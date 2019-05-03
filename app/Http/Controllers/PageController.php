<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function getIndex(){
    	//return view('master');
    	$product = Product::all();
    	return view('page/trangchu',compact('product'));

    }

    public function addNewProduct(){
    	Product::insert([
    		'id'=>'1234567890',
    		'name'=>'buivantruong'
    	]);
    }
}
