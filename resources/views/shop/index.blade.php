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
  <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/what-input/2.1.1/what-input.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.js" charset="utf-8"></script>
  <script type="text/javascript" src="{{ URL::to('assets/js/script.js') }}"></script>
@endsection
