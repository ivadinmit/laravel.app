@extends('layouts/master')

@section('title')
  Justkartit Shop
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
@endsection

@section('content')
  @include('partials/shop-header')
  <section id="shop-men">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>men</h2>
                  <hr class="star-primary">
              </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/m-tshirts">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/786043/screenshots/2866350/053-long-sleeve_1x.jpg" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Men's T-shirts</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/m-jeans">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/72599/screenshots/1973247/blue_jeans_illustration.jpg" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Men's Jeans</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/m-jackets">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/1031696/screenshots/2450680/bomber_jacket_1x.png" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Men's Jackets</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>
  </section>
  <section id="shop-women">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>women</h2>
                  <hr class="star-primary">
              </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/w-coats">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/441935/screenshots/2565110/peacoat_1x.jpg" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Women's Coats</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/w-jeans">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/85375/screenshots/1290618/levis_1x.png" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Women's Jeans</h3>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
                <a href="/shop/w-shoes">
                  <img src="https://d13yacurqjgara.cloudfront.net/users/59947/screenshots/2689733/muti-1.jpg" alt="..." class="img-responsive img-thumbnail">
                  <div class="caption">
                    <h3 class="text-center">Women's Shoes</h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
      </div>
  </section>
  <footer class="text-center">
      <div class="footer-above">
          <div class="container">
              <div class="row">
                  <div class="footer-col col-md-4">
                      <h3>Location</h3>
                      <p>114 Svishtovska str.
                          <br>Gabrovo, Bulgaria</p>
                  </div>
                  <div class="footer-col col-md-4">
                      <h3>Around the Web</h3>
                      <ul class="list-inline">
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                          </li>
                          <li>
                              <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                          </li>
                      </ul>
                  </div>
                  <div class="footer-col col-md-4">
                      <h3>About Justkartit</h3>
                      <p>Justkartit is a modern, ad-free online store which offers a variety of products with a proven quality.</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-below">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      Copyright &copy; Justkartit 2016
                  </div>
              </div>
          </div>
      </div>
  </footer>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::to('assets/js/script.js') }}"></script>
@endsection
