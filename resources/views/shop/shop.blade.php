@extends('layouts/master')

@section('title')
  Justkartit Shop
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
@endsection

@section('content')
  @include('partials/shop-header')
  <div class="container" id="wrapper">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ URL::to('assets/img/shopping-products/tshirt.jpg') }}" class="img-thumbnail img-responsive" alt="T-Shirt">
          <div class="caption">
            <h3>Men's T-shirt</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <div class="clearfix">
              <div class="price pull-left">
                $14
              </div>
              <a href="#" class="btn btn-success btn-lg pull-right" role="button">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::to('assets/js/script.js') }}"></script>
@endsection
