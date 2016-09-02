@extends('layouts/master')

@section('title')
  Justkartit
@endsection

@section('styles')
  <!-- Homepage CSS -->
  <link rel="stylesheet" href="{{ URL::to('assets/css/homepage.css') }}">
@endsection

@section('content')
  @include('partials/home-header')
  <!-- Header -->
  <header>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <img class="img-responsive" src="assets/img/logo.png" alt="Logo" />
                  <div class="intro-text">
                      <span class="name">JUSTKARTIT</span>
                      <hr class="star-light">
                      <span class="skills">Supplying you with quality stuff since 2016</span>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- shop Grid Section -->
  <section id="shop">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>shop</h2>
                  <hr class="star-primary">
              </div>
          </div>
          <div class="row">
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal1" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/tshirt.jpg" class="img-responsive" alt="T-Shirt">
                  </a>
              </div>
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal2" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/jeans-1.jpg" class="img-responsive" alt="Men's Jeans">
                  </a>
              </div>
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal3" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/jeans-2.jpg" class="img-responsive" alt="Men's Jeans">
                  </a>
              </div>
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal4" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/jumper.jpg" class="img-responsive" alt="Jumper">
                  </a>
              </div>
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal5" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/jacket.jpg" class="img-responsive" alt="Jacket">
                  </a>
              </div>
              <div class="col-sm-4 shop-item">
                  <a href="#shopModal6" class="shop-link" data-toggle="modal">
                      <div class="caption">
                          <div class="caption-content">
                              <i class="fa fa-search-plus fa-3x"></i>
                          </div>
                      </div>
                      <img src="assets/img/shopping-products/shorts.jpg" class="img-responsive" alt="Shorts">
                  </a>
              </div>
          </div>
          <div class="view-more text-center">
              <a href="/shop">
                  <button class="btn btn-success btn-lg">View Shop</button>
              </a>
          </div>
      </div>
  </section>

  <!-- About Section -->
  <section class="success" id="about">
      <div class="container">
          <div class="row a">
              <div class="col-lg-12 text-center">
                  <h2>About</h2>
                  <hr class="star-light">
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-lg-offset-2">
                  <p>Justkartit is an eCommerce web application designed to deliver unforgettable user experience, while offering products with a proven quality. What are you waiting for? Go shopping.</p>
              </div>
              <div class="col-lg-4">
                  <p>Our service is fairly new, but that doesn't necessarily mean you won't be able to find what you're looking for. Give our shop section a shot! You won't be disappointed, we promise. Have fun!</p>
              </div>
              <div class="col-lg-8 col-lg-offset-2 text-center">
                  <a href="https://github.com/ivadinmit/laravel.app" class="btn btn-lg btn-outline b">
                      It's open source, too!
                  </a>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2>Contact Us</h2>
                  <hr class="star-primary">
              </div>
          </div>
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                  <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                  <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                  <form name="sentMessage" id="contactForm" action="assets/php/contact.php" method="post">
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label class="main-color">Name</label>
                              <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label class="main-color">Email Address</label>
                              <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label class="main-color">Phone Number</label>
                              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label class="main-color">Message</label>
                              <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <div class="row">
                          <div class="form-group col-xs-12">
                              <button type="submit" class="btn btn-success btn-lg">Send</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>

  <!-- Footer -->
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

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
      <a class="btn btn-primary" href="#page-top">
          <i class="fa fa-chevron-up"></i>
      </a>
  </div>

  <!-- shop Modals -->
  <div class="shop-modal modal fade" id="shopModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/tshirt.jpg" class="img-responsive img-centered" alt="Men's t-shirt">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="shop-modal modal fade" id="shopModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/jeans-1.jpg" class="img-responsive img-centered" alt="Jeans">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="shop-modal modal fade" id="shopModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/jeans-2.jpg" class="img-responsive img-centered" alt="Jeans">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="shop-modal modal fade" id="shopModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/jumper.jpg" class="img-responsive img-centered" alt="Jumper">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="shop-modal modal fade" id="shopModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/jacket.jpg" class="img-responsive img-centered" alt="Jacket">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="shop-modal modal fade" id="shopModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                  <div class="rl">
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                      <div class="modal-body">
                          <h2>Project Title</h2>
                          <hr class="star-primary">
                          <img src="assets/img/shopping-products/shorts.jpg" alt="Shorts">
                          <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or
                              you can purchase the entire set with 146 icons for only $12!</p>
                          <ul class="list-inline item-details">
                              <li>Client:
                                  <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                  </strong>
                              </li>
                              <li>Date:
                                  <strong><a href="http://startbootstrap.com">April 2014</a>
                                  </strong>
                              </li>
                              <li>Service:
                                  <strong><a href="http://startbootstrap.com">Web Development</a>
                                  </strong>
                              </li>
                          </ul>
                          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('scripts')
  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{ URL::to('assets/js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ URL::to('assets/js/contact_us.js') }}"></script>

  <!-- Custom JavaScript -->
  <script src="{{ URL::to('assets/js/homepage.js') }}"></script>
@endsection
