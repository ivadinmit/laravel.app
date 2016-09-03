<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class MensJacketsController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'men', 'type' => 'jacket'])->get();
      return view('shop.products.mens-jackets', ['products' => $products]);
    }
}
