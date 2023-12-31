@extends('frontend.layout')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('frontend/images/bike.jpg') }}');"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
				<div class="col-md-9 ftco-animate pb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Bikes <i
								class="ion-ios-arrow-forward"></i></span></p>
					<h1 class="mb-3 bread">Choose Your Bike</h1>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
                @foreach($bikes as $bike)
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end"
							style="background-image: url({{ Storage::url($bike->thumbnail) }});">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="{{ route('bike.show', $bike->slug) }}">{{ $bike->title }}</a></h2>
							<div class="d-flex mb-3">
								<p class="price ml-auto">Rp. {{ $bike->price }}</p>
							</div>
							<p class="d-flex mb-0 d-block"><a href="https://api.whatsapp.com/send/?phone=6287882745232&text&type=phone_number&app_absent=0" class="btn btn-primary py-2 mr-1">Buy now</a> <a
									href="{{ route('bike.show', $bike->slug) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
						</div>
					</div>
				</div>
                @endforeach
			</div>
			<div class="row mt-5">
				<div class="col text-center">

				</div>
			</div>
		</div>
	</section>
@endsection
