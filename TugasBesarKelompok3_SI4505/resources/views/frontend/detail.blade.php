@extends('frontend.layout')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/bg_3.jpg') }}');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Bike Details <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-3 bread">Bike Details</h1>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-car-details">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="car-details">
						<div class="img rounded" style="background-image: url('{{ Storage::url($bike->thumbnail) }}');"></div>
						<div class="text text-center">
							<h2>{{ $bike ->title }}</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Model Year
										<span>{{ $bike ->modelYear }}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Conditions
										<span>{{ $bike->condition }}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Location
										<span>{{ $bike ->location }}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services">
						<div class="media-body py-md-4">
							<div class="d-flex mb-3 align-items-center">
								<div class="text">
									<h3 class="heading mb-0 pl-3">
										Model Type
										<span>{{ $bike ->modelType }}</span>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pills">
					<div class="bd-example bd-example-tabs">
						<div class="d-flex justify-content-center">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								<li class="nav-item">
									<a class="nav-link active" id="pills-manufacturer-tab" data-toggle="pill"
										href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
										aria-expanded="true">Description</a>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-manufacturer" role="tabpanel"
								aria-labelledby="pills-manufacturer-tab">
								{{ $bike -> description }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section mt-5 bg-light">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-12	featured-top">
					<div class="row justify-content-center no-gutters">
						<div class="col-md-10 d-flex align-items-center">
							<div class="services-wrap rounded-right w-100">
								<h3 class="heading-section text-center mb-4">What are you waiting for?</h3>
								<div class="row d-flex mb-4">
									<div class="col-md-4 d-flex align-self-stretch ftco-animate">
										<div class="services w-100 text-center">
											<div class="text w-100">
												<h3 class="heading mb-2">Choose Your Pickup Location</h3>
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
								<p class="text-center mt-5"><a href="https://api.whatsapp.com/send/?phone=6287882745232&text&type=phone_number&app_absent=0"
										class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Buy
										Now</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Choose Bike</span>
					<h2 class="mb-2">Related Bikes</h2>
				</div>
			</div>
			<div class="row">
                @foreach($related_bikes as $related_bike)
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end"
							style="background-image: url( {{ Storage::url($related_bike->thumbnail) }});">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.html">{{ $related_bike->title }}</a></h2>
							<div class="d-flex mb-3">
								<p class="price ml-auto">Rp. {{ $related_bike->price }}</p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="https://api.whatsapp.com/send/?phone=6287882745232&text&type=phone_number&app_absent=0" class="btn btn-primary py-2 mr-1">Buy now</a> <a
									href="{{ route('bike.show', $related_bike->slug) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
@endsection
