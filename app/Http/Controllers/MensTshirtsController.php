<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class MensTshirtsController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'men', 'type' => 't-shirt'])->get();
      return view('shop.products.mens-tshirts', ['products' => $products]);
    }
}
