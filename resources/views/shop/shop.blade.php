@extends('layouts/master')

@section('title')
  Shopping Cart
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
@endsection

@section('content')
  <h1>it works!</h1>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::to('assets/js/script.js') }}"></script>
@endsection
