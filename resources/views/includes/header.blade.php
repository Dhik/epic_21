<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html"></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul >
          <li><a href="{{ route('landing') }}">Home</a></li>
          <li><a href="{{ route('history') }}">History</a></li>
          <li class="drop-down"><a href="#">Event</a>
            <ul>
              <li><a href="{{ route('pre_event') }}">Pre Event</a></li>
              <li><a href="{{ route('main_event') }}">Main Event</a></li>
              <li><a href="{{ route('closing') }}">Closing</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="{{ route('competition') }}">Competition</a>
            <ul>
              <li><a href="{{ route('remind') }}">Research Mindedness</a></li>
              <li><a href="{{ route('ideation') }}">Ideation</a></li>
              <li><a href="{{ route('tav') }}">Tell a Vision</a></li>
              <li><a href="{{ route('mediation') }}">Mediation</a></li>
              <li><a href="{{ route('liblicious') }}">Liblicious</a></li>
              <li><a href="{{ route('parjur') }}">Parade Jurnalistik</a></li>
              <li><a href="{{ route('pprf') }}">The 9th PPRF</a></li>
            </ul>
          </li>
          <li><a href="{{ route('art_ex') }}">Art Exhibition</a></li>
          <li class="drop-down"><a href="">More</a>
            <ul>
              <li><a href="{{ route('contact') }}">Contact Us</a></li>
              <li><a href="{{ route('sponsorship') }}">Sponsorship</a></li>
            </ul>
          </li>

        </ul>
        <img class="mx-auto d-block" src="{{ url('assets/img/logo_epic.png')}}" style="width: 50px; height: auto; margin-bottom: 10px;">
        <h5>EPICENTRUM 2021</h5>
      </nav><!-- .nav-menu -->

      <a href="#about"></a>

    </div>
  </header><!-- End Header -->