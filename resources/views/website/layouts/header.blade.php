<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Fibovix</title>
    <link rel="stylesheet" href="{{asset('website/css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/8b9cb07d67.js" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <!-- navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right-border">

        <a class="navbar-brand" href="#">+ 91- 8888352777  </a>
        <a class="navbar-brand" href="#"> 0253-7966831</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Resources & insights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
        </div>
    </nav> --}}

    
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right-border" >
  <div class="container">
    <a class="navbar-brand" href="#">+ 91- 8888352777  </a>
        <a class="navbar-brand" href="#"> 0253-7966831</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('/') }}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutus') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services') }}">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('resources-insights') }}">Resources & insights</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>
    <!-- end navbar -->

 


