@extends('layout.temp') 
@section('title','Epicentrum - Home') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container pr-ex-center" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div>
            <img style="width:250px" src="{{ url('assets/img/logo_epic.png')}}" alt="centered image" />
        </div>
        <div class="col-xl-7 col-lg-8">
			<h1 class="about">STAY TUNED</h1>
		</div>
	</div>
	</section>
	<!-- End Hero -->
@endsection