<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(request()->is('/')) {{ config('site.name') }} @else {{ $title }} | {{ config('site.name') }} @endif </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Build and play online multiplayer games for free. Join a growing gaming community today!">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta property="og:site_name" content="{{ env('APP_LINK') }}">
    <meta property="og:description" content="Build and play online multiplayer games for free. Join a growing gaming community today!">
    <meta property="og:url" content="{{ secure_url(request()->getRequestUri()) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ config('site.name') }}">
    <meta property="og:title" content="{{ str_replace(' | ' . config('site.name'), '', $title) }}">
    <meta property="og:description" content="Explore {{ config('site.name') }}: A free online social hangout.">
    <meta property="og:image" content="{{ !isset($image) ? config('site.icon') : $image }}">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css">
    @yield('fonts')
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/brickplanet.css') }}">
    @yield('css')
</head>
<body>
    @guest
  <style>
  .dropdown-link {
    cursor: pointer;
  }
  select option {
    background: rgba(0, 0, 0, 0.9);
  }
  </style>
    <nav class="navbar">
        <ul class="navbar-nav me-auto flex-grow-1">
            <li class="nav-item d-flex d-lg-none pe-2">
                <a type="button" class="nav-link" id="mobile-dropdown"><i class="far fa-bars text-2xl lh-1 align-middle"></i></a>
            </li>
            <li class="nav-item">
                <a href="{{ env('APP_LINK') }}" class="nav-link nav-brand p-0" style="padding:0">
                    <img src="/assets/images/bp-primary1.png" width="200" class="d-none d-lg-block">
                    <img src="/assets/images/bp-light.png" width="54" height="54" class="d-block d-lg-none">
                </a>
            </li>
            <li class="nav-item flex-grow-1 px-3 d-lg-block d-none ">
                <form autocomplete="off" class="flex-grow-1" action="" method="get">
                    <main class="flex-grow-1 form-parent has-icon-right">
                        <input autocomplete="off" type="text" class="form" id="searchDropdown" data-bs-toggle="dropdown" aria-expanded="false" name="search" placeholder="Search {{ env('APP_NAME') }}..." value="">
                        <ul class="dropdown-menu w-100" aria-labelledby="searchDropdown" data-bs-popper="static">
                            <li class="dropdown-item">
                                <a id="searchGamesBtn" class="dropdown-link">
                                    <i class="far fa-gamepad-alt dropdown-icon"></i>&nbsp;Search Games for '<span></span>'
                                </a>
                            </li>
                        </ul>
                        <button type="submit" class="form-parent-icon far fa-search"></button>
                    </main>
                </form>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item gap-2">
                <a href="{{ env('APP_LINK') }}/login" class="nav-link btn btn-success fw-semibold text-uppercase px-3 text-sm flex-shrink">Log In</a>
                <a href="{{ env('APP_LINK') }}/register" class="nav-link btn btn-primary fw-semibold text-uppercase px-3 text-sm flex-shrink">Play Now</a>
            </li>
        </ul>
    </nav>
@if (!request()->is('/'))
<style>
      @media (min-width: 993px) {
        .wrapper {
          padding-left: 220px;
        }
      }
      </style>
<nav class="sidebar " style="overflow-y:auto">
      <ul class="sidebar-nav">
        <main class="divider">Browse</main>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/login" class="sidebar-link @if (request()->is('login')) sidebar-link-active @endif">
            <i class="fas fa-house-chimney sidebar-icon text-xl"></i>
            Home
          </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/games" class="sidebar-link @if (request()->is('games')) sidebar-link-active @endif">
            <i class="fas fa-gamepad-alt sidebar-icon text-xl"></i>
            Games
          </a>
        </li>
        <li class="sidebar-item">
<a href="{{ env('APP_LINK') }}/shop" class="sidebar-link @if (request()->is('catalog')) sidebar-link-active @endif">
          <i class="fas fa-shopping-basket sidebar-icon text-xl"></i>
            Shop
          </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/forum" class="sidebar-link @if (request()->is('forum')) sidebar-link-active @endif">
            <i class="fas fa-messages sidebar-icon text-xl"></i>
            Forum
          </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/upgrade" class="sidebar-link text-warning @if (request()->is('upgrade')) sidebar-link-active text-warning @endif">
            <i class="fas fa-crown sidebar-icon text-warning text-xl"></i>
            Upgrade
          </a>
        </li>
                <main class="divider">Discover</main>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/players" class="sidebar-link @if (request()->is('players')) sidebar-link-active @endif">
            <i class="fas fa-users sidebar-icon text-xl"></i>
            Players
          </a>
        </li>
        
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/guilds" class="sidebar-link @if (request()->is('guilds')) sidebar-link-active @endif">
            <i class="fas fa-swords sidebar-icon text-xl"></i>
            Guilds
          </a>
        </li>
        <li class="sidebar-item">
          <a href="{{ env('APP_LINK') }}/economy" class="sidebar-link @if (request()->is('/economy')) sidebar-link-active @endif">
            <i class="fas fa-chart-mixed sidebar-icon text-xl"></i>
            Economy
          </a>
        </li>
              </ul>
    </nav>
@endif
    @endguest
        @yield('content')
    </div>

 <nav class="footer">
        <main class="container">
          <img src="/assets/images/bp-primary1.png" class="d-inline-block mb-3" width="256">
          <div class="d-flex justify-content-center gap-4 text-2xl mb-4">
            <a target="_blank" href="{{ env('DISCORD') }}" class="text-light"><i class="fab fa-discord"></i></a>
            <a target="_blank" href="{{ env('YOUTUBE') }}" class="text-light"><i class="fab fa-youtube"></i></a>
            <a target="_blank" href="{{ env('TWITTER') }}" class="text-light"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="{{ env('TIKTOK') }}" class="text-light"><i class="fab fa-tiktok"></i></a>
            <a target="_blank" href="{{ env('TWITCH') }}" class="text-light"><i class="fab fa-twitch"></i></a>
            <a target="_blank" href="{{ env('INSTAGRAM') }}" class="text-light"><i class="fab fa-instagram"></i></a>
          </div>
          <main class="divider divider-centered mb-4">Other Links</main>
          <div class="row gy-4 mb-5">
            <div class="col-md-4 col-4 text-center">
              <a href="{{ env('APP_URL') }}" class="footer-link">Home</a>
            </div>
            <div class="col-md-4 col-4 text-center">
              <a href="#" class="footer-link">Help Desk</a>
            </div>
            <div class="col-md-4 col-4 text-center">
              <a href="{{ env('WIKI_URL') }}" class="footer-link">Our Wiki</a>
            </div>
            <div class="col-md-4 col-4 text-center">
              <a href="#" class="footer-link">Work With Us</a>
            </div>
            <div class="col-md-4 col-4 text-center">
              <a href="{{ env('BLOG_URL') }}/" class="footer-link">Our Blog</a>
            </div>
            <div class="col-md-4 col-4 text-center">
              <a href="{{ env('APP_URL') }}/bugs/send" class="footer-link">Report A Bug</a>
            </div>
          </div>
          <div class="mb-2">
            <a href="{{ env('APP_URL') }}/about/terms-and-conditions" class="text-light text-decoration-none fw-semibold">Terms and Conditions</a>
            <span class="mx-2 text-muted">•</span>
            <a href="{{ env('APP_URL') }}/about/privacy-policy" class="text-light text-decoration-none fw-semibold">Privacy Policy</a>
            <span class="mx-2 text-muted">•</span>
            <a href="{{ env('APP_URL') }}/about/contact-us" class="text-light text-decoration-none fw-semibold">Contact Us</a>
          </div>
          <div class="text-muted text-sm">
            © 2023 <span class="fw-semibold">{{ env('APP_NAME') }}, Inc.</span> All
            rights reserved.
          </div>
        </nav>
      </main>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="/assets/js/jquery.timeago.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>

    @yield('js')
</body>
</html>