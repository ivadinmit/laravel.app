<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class MensJeansController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'men', 'type' => 'jeans'])->get();
      return view('shop.products.mens-jeans', ['products' => $products]);
    }
}
