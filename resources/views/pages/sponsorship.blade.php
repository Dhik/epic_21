@extends('layout.temp') 
@section('title','Epicentrum - Sponsorship') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="art_ex">Sponsorship</h1>
			<h2></h2>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_sponsor"><b>We are open for sponsors and media partners!</b> For more information kindly contact us trough:</p>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up" data-aos-delay="150">
	<div class="row justify-content-center text-center">
			<div class="col-xl-4 col-sm-6 mb-5">
			    <div class="contact_person rounded shadow-sm py-5 px-4">
			        <h5 class="mb-0">Fatah</h5><span class="small text-uppercase text-muted text-center">081390181846 : Telephone (Non WA)</span>
			            <ul class="social mb-0 list-inline mt-3">
			                <li class="list-inline-item"><a href="https://wa.me/6281542628336" class="social-link"><i class="fa-2x fab fa-whatsapp-square"></i></a></li>
			              	<li class="list-inline-item"><a href="http://line.me/ti/p/~ainulfatah20" class="social-link"><i class="fa-2x fab fa-line"></i></a></li>
			            </ul>
			    </div>
			</div>
	</div>
</div>
</section>
<!-- Akhir Section sponsor awal -->



<div class="container">
 <!-- Large  -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		@foreach ($large_sponsorships as $item)
			<div class="col-lg-4 col-md-8 col-sm-10 col-10 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="mx-auto">
					<img src="{{ $item->picture }}" class="card-img-top" alt="...">
				</div>
			</div>
		@endforeach
    </div>
	</div>
</div>
</section>

<!-- Medium  -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		@foreach ($medium_sponsorships as $item)
			<div class="col-lg-3 col-md-6 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="mx-auto">
					<img src="{{ $item->picture }}" class="card-img-top" alt="...">
				</div>
			</div>
		@endforeach
    </div>
	</div>
</div>
</section>

<!-- Small  -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		@foreach ($small_sponsorships as $item)
			<div class="col-lg-2 col-md-4 col-sm-4 col-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="mx-auto">
					<img src="{{ $item->picture }}" class="card-img-top" alt="...">
				</div>
			</div>
		@endforeach
    </div>
	</div>
</div>
</section>

@endsection