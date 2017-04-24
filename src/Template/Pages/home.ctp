<?php

?>

<!-- Begin page content -->

<!-- Featured Jumbotron -->
<div class="jumbotron header" id="feature-img">
  <div class="container">
    <h1>Campus Marketplace</h1>
    <p>A place to sell or buy goods/services, exclusively for college students.</p>
    <p><a class="btn btn-primary btn-lg" ng-click="viewAbout()" id="learn-more" role="button">Learn More</a></p>
  </div>
</div>

<!-- About Us section -->
<div class="container content-centered">
  <h1 id="anchor-about">About Us</h1>
  <p class="lead">
    There is currently no means for college students to offer their skills
    and services in the campus community. Campus Marketplace is an online
    platform where students can easily find or offer affordable services to
    practice their talents. Since it is exclusive to college students, the
    marketplace will have a positive impact on campus community, and help
    bring students together.
  </p>
</div>
<!-- End About Us section -->

<!-- How It Works section -->
<div class="container content-centered">
  <h1>Features</h1>
  <!-- Row of columns -->
  <div class="row">
    <div class="col-md-3">
      <h2>Exclusive</h2>
      <p><img src="<?= BASE_URL ?>/img/campus.png" class="large-icon" /></p>
      <p>Only those with a vt.edu email address can sign up.</p>
    </div>
    <div class="col-md-3">
      <h2>Sell</h2>
      <p><img src="<?= BASE_URL ?>/img/sell.png" class="large-icon" /></p>
      <p>Post services you'd like to sell to your peers with our easy-to-use interface.</p>
   </div>
    <div class="col-md-3">
      <h2>Negotiate</h2>
      <p><img src="<?= BASE_URL ?>/img/negotiate.gif" class="large-icon" /></p>
      <p>Use our messaging system to chat between seller and buyer and negotiate.</p>
   </div>
    <div class="col-md-3">
      <h2>Buy</h2>
      <p><img src="<?= BASE_URL ?>/img/buy.png" class="large-icon" /></p>
      <p>Search for services or browse through available services by category. Sort options available.</p>
    </div>
  </div>

  <p><a href="<?= BASE_URL ?>/users/add" class="btn btn-primary btn-lg" id="register-now" role="button">Register Now</a></p>
</div>

<!-- End How It Works section -->


<!-- End page content -->
