@extends('layout.temp') 
@section('title','Epicentrum - Art Exhibition') 
@section('content') 

@if (count($exhibitions) == 0)
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
@else
<!-- ======= Hero Section ======= -->
<section class="art_ex">
<div class="container-fluid">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="art_ex">ART EXHIBITION</h1>
		</div>
    <div class="">
				<iframe  style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 560px" src="https://www.youtube.com/embed/tVLiRXYgFrU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls></iframe>
			</div>
    </div>
</div>
</section>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" id="gallery" data-aos="fade-up" data-aos-delay="200" data-toggle="modal" data-target="#exampleModal">
      @foreach ($exhibitions as $item)
       <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto portfolio-item filter-app">
         <div class="ver_mas text-center">
            <h2>{{ $item->title }}</h2>
            <h3>{{ $item->author }}</h3>
            <h4>{!! $item->description !!}</h4>
         </div>
         <img src="{{ $item->picture }}" alt="">
       </div>
      @endforeach

      </div>
    </section><!-- End Portfolio Section -->
@endif

<!-- Modal markup: https://getbootstrap.com/docs/4.4/components/modal/ -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        
      <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach ($exhibitions as $item)
              @if ($item->id == $exhibitions[0]->id)
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ $item->picture }}">
              <div style="text-align:center;">
                <h1 style="color:white;">{{ $item->title }}</h1>
                <h3 style="text-align:center;">{{ $item->author }}</h3>
              </div>
                <h3>{!! $item->description !!}</h3>
            </div>
              @else
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ $item->picture }}">
              <div style="text-align:center;">
                <h1 style="color:white;">{{ $item->title }}</h1>
                <h3 style="text-align:center;">{{ $item->author }}</h3>
              </div>
                <h3>{!! $item->description !!}</h3>
             </div>
              @endif
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection