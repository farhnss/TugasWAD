@extends('frontend.layout')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('frontend/images/bg_1.jpg') }}');"
data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
  <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
    <div class="col-lg-8 ftco-animate">
      <div class="text w-100 text-center mb-md-5 pb-md-5">
        <h1 class="mb-4">Get Your First Bike</h1>
        <p style="font-size: 18px;">At GoWess, we are dedicated to providing a comprehensive range of services to make your used bicycle purchasing experience convenient and enjoyable</p>
      </div>
    </div>
  </div>
</div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
<div class="container">
  <div class="row no-gutters">
    <div class="col-md-12	featured-top">
      <div class="row justify-content-center no-gutters">
        <div class="col-md-10 d-flex align-items-center">
          <div class="services-wrap rounded-right w-100">
            <h3 class="heading-section text-center mb-4">Better Way to Buy Your Perfect Bike</h3>
            <div class="row d-flex mb-4">
              <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="services w-100 text-center">
                  <div class="text w-100">
                    <h3 class="heading mb-2">Choose Your Pick Up Location</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="services w-100 text-center">
                  <div class="text w-100">
                    <h3 class="heading mb-2">Select the Best Deal</h3>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                <div class="services w-100 text-center">
                  <div class="text w-100 text-center mx-auto m-auto">
                    <h3 class="heading mb-2 text-center">Reserve Your Bike</h3>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-center mt-5"><a href="{{ route('bike') }}"
                class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Reserve Your Perfect
                Bike</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-about">
<div class="container">
  <div class="row no-gutters">
    <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
      style="background-image: url({{ asset('frontend/images/about.jpg') }});">
    </div>
    <div class="col-md-6 wrap-about ftco-animate">
      <div class="heading-section heading-section-white pl-md-5">
        <span class="subheading">About us</span>
        <h2 class="mb-4">Welcome to GoWess</h2>

        <p>Welcome to GoWess, your go-to destination for hassle-free and reliable used bicycle purchasing services. Our mission at GoWess is to make high-quality, pre-owned bicycles accessible to everyone, promoting an eco-friendly and healthy lifestyle.</p>
        <p>Join the GoWess community and embark on your cycling journey with confidence. Whether you're a seasoned cyclist or a beginner, we're here to support you in finding the perfect ride. Experience the freedom of two wheels with GoWess – where every pedal stroke takes you closer to a sustainable and active lifestyle. Thank you for choosing GoWess – Your Trusted Partner in Used Bicycle Purchasing!</p>
        <p><a href="{{ route('bike') }}" class="btn btn-primary py-3 px-4">Search Bikes</a></p>
      </div>
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
          <p>Explore a wide variety of bicycles, including road bikes, mountain bikes, hybrid bikes, and electric bikes.</p>
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

<section class="ftco-section ftco-intro" style="background-image: url({{ asset('frontend/images/bg_2.jpg') }});">
<div class="overlay"></div>
<div class="container">
  <div class="row justify-content-end">
    <div class="col-md-6 heading-section heading-section-white ftco-animate">
      <h2 class="mb-3">Do You Want To Sell Your Used Bike? Contact Us.</h2>
      <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </div>
</div>
</section>


<section class="ftco-section testimony-section bg-light">
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Testimonial</span>
      <h2 class="mb-3">Happy Clients</h2>
    </div>
  </div>
  <div class="row ftco-animate">
    <div class="col-md-12">
      <div class="carousel-testimony owl-carousel ftco-owl">
        <div class="item">
          <div class="testimony-wrap rounded text-center py-4 pb-5">
            <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/mang-rusdi.jpeg') }})">
            </div>
            <div class="text pt-4">
              <p class="mb-4">I found my dream bike on GoWess! The detailed descriptions and quality assurance made me confident in my purchase.</p>
              <p class="name">Mang Rusdi</p>
              <span class="position">Cycling Enthusiast</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap rounded text-center py-4 pb-5">
            <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/mas-fuad.jpeg') }})">
            </div>
            <div class="text pt-4">
              <p class="mb-4">As a newbie to cycling, I was a bit apprehensive about buying a used bike. But GoWess exceeded my expectations! connecting with fellow riders </p>
              <p class="name">Mas Fuad</p>
              <span class="position">First-Time Buyer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap rounded text-center py-4 pb-5">
            <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/mas-norman.jpeg') }})">
            </div>
            <div class="text pt-4">
              <p class="mb-4">Kudos to GoWess for promoting sustainable transportation! I found an affordable and reliable commuter bike.</p>
              <p class="name">Mas Norman</p>
              <span class="position">Adventure Seeker</span>
            </div>
          </div>
        </div>
        <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/pak-amba.jpeg') }})">
              </div>
              <div class="text pt-4">
                <p class="mb-4">GoWess is my go-to for quality used mountain bikes. The selection is diverse, and each bike I've bought has been in excellent condition.</p>
                <p class="name">Pak Amba</p>
                <span class="position">Eco-Conscious Commuter</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap rounded text-center py-4 pb-5">
              <div class="user-img mb-2" style="background-image: url({{ asset('frontend/images/si-imut.jpeg') }})">
              </div>
              <div class="text pt-4">
                <p class="mb-4">I recently sold my old bike on GoWess, and the process couldn't have been easier. The platform is straightforward, and I had a buyer in no time. </p>
                <p class="name">Si Imut</p>
                <span class="position">Smooth Transaction</span>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection
