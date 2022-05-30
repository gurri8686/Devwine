<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="icon" href="{!! asset('/images/wine-country-icon.png') !!}"/> 
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Open+Sans&family=Playfair+Display+SC:ital,wght@1,700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: white!important;">
  <div class="container-fluid">
    <div class="custom-navbar">
  <div class="logo-make">
    <a class="navbar-brand logo_text" href="/">
    <img  height="90" src="https://devsite.winecountryweekends.ca/images/logo.png" class="custom-logo" alt="Wine Country Weekends">
	</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown custom-bg-dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Features
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Wine Cooler Bags</a>
          <a class="dropdown-item" href="#">Getaway Packages</a>
           <a class="dropdown-item" href="#">Accommodations</a>
            <a class="dropdown-item" href="#">Excursions</a>
          <a class="dropdown-item" href="#">Wineries</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Souvenir Shop</a>
      </li>
      @guest
      <li class="nav-item">
        <a class="nav-link" href="/guest-rewards">Guest Rewards</a>
      </li>
      @endguest
      <li class="nav-item">
        <a class="nav-link" href="#">Support Local</a>
      </li>
      <div class="dropdown custom-make-dropdown nav-item custom-bg-dropdown">
        <a href="/vendor" class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Dashbord</a>

        <ul class="dropdown-menu" aria-labelledby="">
          <li><a href="/vendor" class="dropdown-item">Dashboard</a></li>
          <li><a class="dropdown-item" href="#">Cart</a></li>
          @if(Auth::user())
          <li>
            <a class="dropdown-item" href="/dashboard">User Dashboard</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          </li>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
          @else
          <li>
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
          </li>
          @endif
        </ul>
    
      </div>
    </ul>
    
      
      
  
    </div>
  </div>
</div>
  </nav>   
  
        