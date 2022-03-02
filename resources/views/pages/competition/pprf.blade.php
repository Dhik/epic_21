@extends('layout.temp_pprf') 
@section('title','Epicentrum - The 9 th Padjadjaran Public Relations Fair') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title_li">THE 9TH PADJADJARAN PUBLIC RELATIONS FAIR</h1>
			<h2></h2>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_ideation">&emsp;&emsp; <b>OlymPRDay</b> is one of the two competitions based on Public Relations Strategic Planning. This competition requires participants to be able to solve the problem through research skill, teamwork, and also creativity. The output of OlymPRDay is a Campaign Proposal as a systematic, planned, interesting, and creative solution strategy for the issues raised.</p>
			<p class="desc_ideation">&emsp;&emsp; <b>Public Relations Student Forum (PRSF)</b> is one of the two competitions in The 9th Padjadjaran Public Relations Fair (PPRF), where the competition takes form in a panel discussion forum which emphasizes on Public Relations perspective in order to create feasible solutions. The participants, which called delegates, will undergo several formal sessions and informal sessions during PRSF with full English as the working language, in which they must propose their unique solutions based on Public Relations perspective and through their problem-solving ability, in-depth research, public speaking, lobbying and negotiation. The final output of PRSF is expected to generate a Draft Resolution which contains recommendations related to the issue and gives significant contributions in solving nations problem to the relevant institutions.</p>
		</div>
    </div>
</div>
</section>

<section id="hero" class="d-flex align-items-center justify-content-center teas">
	<div class="container pr-ex-center" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-8">
				<h1 class="comp_title_li">TEASER</h1>
			</div>
			<div class="frame_comp">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://www.youtube.com/embed/IgCNQkJ8meU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
</section>

<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/theme.svg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Theme Description</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_theme') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/registration.svg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Registration Competition</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_registration') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/registration.svg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">FAQ & Trivia</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_faqtrivia') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
 <!-- Akhir Button -->

<!--AWAL TALKSHOW-->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title_li">OUR TALKSHOW</h1>
		</div>
    </div>
</div>

</section>

@if (empty($talkshow))
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>
@else
<!-- coming soon POSTER -->
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<img src="{{ $talkshow->picture }}" class="img-fluid" >
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_comp">&emsp;&emsp; {{ $talkshow->description }}</p>
		</div>
    </div>
</div>
</section>
@endif

<!-- Section Judges -->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title_li">JUDGES</h1>
		</div>
    </div>
</div>
</section>
</section>

@if (count($judges) == 0)
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>
@else
<!-- list judges -->
<section class="judges">
	<div class="container">
		<div class="judges-section">
			<div class="row mt-3 justify-content-center">
			@foreach ($judges as $item)
				<div class="col-md-3 col-sm-4 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
					<div class="mt-3">
						<img src="{{ $item->picture }}" class="pic-judges">
						<div class="judges-name">
							{{ $item->name }}
						</div>
						<div class="judges-occ">
							{{ $item->occupation }}
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
@endif
<!-- Akhir Section Judges -->

<!-- list finalist -->
<section class="d-flex align-items-center justify-content-center cont">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="art_ex">OUR FINALIST</h1>
		</div>
    </div>
</div>
</section>

@if (count($finalists) == 0)

</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>

@else

<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up" data-aos-delay="150">
	<div class="row justify-content-center text-center">
		@foreach ($finalists as $item)
			<div class="col-xl-4 col-sm-6 mb-5">
			    <div class="contact_person rounded shadow-sm py-5 px-4">
			        <h5 class="mb-0">{{ $item->title }}</h5><span class="small text-uppercase text-muted text-center">{{ $item->subtitle }}</span>
			            <ul class="social mb-0 list-inline mt-3">
			                <li class="list-inline-item"><a href="http://line.me/ti/p/~{{ $item->line_id }}" class="social-link"><i class="fa-2x fab fa-line"></i></a></li>
			                <li class="list-inline-item"><a href="mailto:{{ $item-> email}}" class="social-link"><i class="fa-2x fas fa-envelope"></i></a></li>
			            </ul>
			    </div>
			</div>
		@endforeach
	</div>
</div>
</section>

@endif
<!-- Akhir Section finalist -->

@endsection