@extends('layouts.app')
@section('content')
<div class="container py-5 mt-5">
    <div class="row">
        <div class="col-md-12">
        <header>
  <div class="overlay"></div>
  <video class="shadow" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Agenzia viaggi Rossi</h1>
        <p class="lead mb-0">perchè per viaggiare serve la testa non il corpo</p>
      </div>
    </div>
  </div>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000b76" fill-opacity="1" d="M0,288L26.7,277.3C53.3,267,107,245,160,229.3C213.3,213,267,203,320,186.7C373.3,171,427,149,480,160C533.3,171,587,213,640,208C693.3,203,747,149,800,117.3C853.3,85,907,75,960,74.7C1013.3,75,1067,85,1120,90.7C1173.3,96,1227,96,1280,80C1333.3,64,1387,32,1413,16L1440,0L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>

<section class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are build into Bootstrap 4.</p>
        <p>The overlay color can be changed by changing the <code>background-color</code> of the <code>.overlay</code> class in the CSS.</p>
        <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
        <p class="mb-0">
          Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
        </p>
      </div>
    </div>
  </div>
</section>
            
        </div>
    </div>
</div>
@endsection
