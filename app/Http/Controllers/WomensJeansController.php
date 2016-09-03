<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class WomensJeansController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'women', 'type' => 'jeans'])->get();
      return view('shop.products.womens-jeans', ['products' => $products]);
    }
}
