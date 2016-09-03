<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class WomensCoatsController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'women', 'type' => 'coat'])->get();
      return view('shop.products.womens-coats', ['products' => $products]);
    }
}
