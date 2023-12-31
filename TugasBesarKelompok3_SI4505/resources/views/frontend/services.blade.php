@extends('frontend.layout')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/service.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Our Services</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Services</span>
          <h2 class="mb-3">Our Latest Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
              <div class="text w-100">
                <h3 class="heading mb-2">Quality Inspections</h3>
                <p>Every bicycle on GoWess undergoes a rigorous quality inspection.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
               <div class="text w-100">
                <h3 class="heading mb-2">Diverse Selection</h3>
                <p>Explore a wide variety of bicycles, including road bikes, mountain bikes, hybrid bikes, and electric bikes. </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
              <div class="text w-100">
                <h3 class="heading mb-2">User-Friendly Website</h3>
                <p>Navigate our user-friendly website with ease.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="services services-2 w-100 text-center">
              <div class="text w-100">
                <h3 class="heading mb-2">Customer Support</h3>
                <p>Our dedicated customer support team is ready to assist you at every step.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-intro" style="background-image: url('{{ asset('frontend/images/bg_2.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Do You Want To Sell Your Used Bike?</h2>
          <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
  @endsection
