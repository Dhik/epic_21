@extends('layout.temp') 
@section('title','Epicentrum - Competition') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="oc">
<div class="container-fluid">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="about">OUR COMPETITIONS</h1>
		</div>
    </div>
</div>
</section>

<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('remind') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/RESEARCH MINDEDNESS.png')}}" alt="Image" style="width: 87%; padding-top:15px;">
    </a>
    <h3 class="sub-title-comp">RESEARCH MINDEDNESS</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('ideation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/IDEATION.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">IDEATION</h3>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('tav') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/TELL A VISION.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">TELL A VISION</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('mediation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/MEDIATION PNG.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">MEDIATION</h3>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('liblicious') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/LIBLICIOUS.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">LIBLICIOUS</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('parjur') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/PARADE JURNALISTIK.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">PARADE JURNALISTIK</h3>
  </div>
</div>
</section>
<section class="card_our_competition center" class="card-de" data-aos="fade-up" data-aos-delay="150">
<div class="card bg-tran" style="width: 34rem; border:none;">
    <a href="{{ route('pprf') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/THE 8th PPRF.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">THE 9TH PADJADJARAN PUBLIC RELATIONS FAIR</h3>
  </div>
</section>
@endsection