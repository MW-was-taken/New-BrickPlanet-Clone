@extends('layouts.default', [
    'title' => ''
])

@section('css')
    <style>
        html, body {
            height: 100%;
        }

        .alert, .navbar-nav.mr-auto, .sidebar, footer {
            display: none;
        }

        .navbar-toggler {
            opacity: 0!important;
            cursor: default;
        }

        .alert {
            margin-bottom: 0!important;
        }

        .landing-header {
            margin-top: -100px;
            padding: 50px 0 50px 0;
            align-items: stretch;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 95vh;
        }

        @media only screen and (max-width: 768px) {
            .landing-header {
                margin-top: -85px;
            }
        }

        .landing-header .header-content {
            align-items: center;
            display: flex;
            flex-grow: 1;
            flex-shrink: 0;
        }

        @media only screen and (min-width: 768px) {
            .landing-header h1 {
                font-size: 50px;
            }

            .landing-header p {
                font-size: 23px;
            }

            .landing-header .btn {
                font-size: 18px;
            }

            .landing-header .btn:first-child {
                margin-right: 25px;
            }
        }
    </style>
@endsection

@section('content')
    <main class="wrapper">
              <script>
window.onload = function() {
  var vid = document.getElementById("home-video");
  vid.playbackRate = 0.75;
};
</script>
<div class="position-relative text-center">
  <div class="position-absolute top-0" style="height:100%;width:100%;min-height:900px;opacity:0.75;background-color:#000000;z-index:2;">&nbsp;</div>
  <div style="margin:0 auto;display:block">
  <video id="home-video" autoplay="autoplay" loop="loop" muted defaultMuted playsinline style="height:900px;width:100%;object-fit: cover;" style="z-index:1;">
    <source src="/cdn/videos/MontageV2.mp4" type="video/mp4">
      Your browser does not support the video tag.
  </video>
  </div>
  <div class="position-absolute top-0" style="z-index:3;width:100%;">
    <div style="padding-top:15%" class="d-none d-xl-block"></div>
    <div style="padding-top:30%" class="d-block d-xl-none"></div>
    <div class="row justify-content-center" style="margin:0">
      <div class="col-md-6 col-12">
        <div class="text-6xl fw-bold mb-4 text-white" style="text-shadow: 2px 2px 6px #111;">Build And Play Games.</div>
        <div class="text-2xl faded mb-4 fw-semibold" style="text-shadow: 2px 2px 6px #111;">Start Your Journey Today!</div>
        <a href="{{ env('APP_LINK') }}/register" class="btn btn-lg btn-primary fw-semibold px-3">Play Now</a>
      </div>
    </div>
  </div>
</div>
@endsection