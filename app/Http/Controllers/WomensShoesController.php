<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;

class WomensShoesController extends Controller
{
    public function getIndex() {
      $products = Product::where(['gender' => 'women', 'type' => 'shoes'])->get();
      return view('shop.products.womens-shoes', ['products' => $products]);
    }
}
