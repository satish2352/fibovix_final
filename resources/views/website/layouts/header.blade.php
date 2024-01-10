<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('website/images/Logo1.png') }}">

    <link rel="stylesheet" href="{{asset('website/css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/8b9cb07d67.js" crossorigin="anonymous"></script>

    <!-- <style>
@import url('https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700&display=swap');
</style> -->

<style> @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');</style>
    
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  </head>
  <body>
  <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right-border">

        <!-- <a class="navbar-brand" href="tel:{{ $website_contact_details[0]['contact_one'] }}">{{ $website_contact_details[0]['contact_one'] }}   </a>
        <a class="navbar-brand" href="tel:{{ $website_contact_details[0]['contact_two'] }}"> {{ $website_contact_details[0]['contact_two'] }}</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item f>
              <a class="nav-link @if(\Request::route()->getName() == '/') {{'active'}} @endi" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item f>
              <a class="nav-link @if(\Request::route()->getName() == 'aboutus') {{'active'}} @endi" href="{{ route('aboutus') }}">About Us</a>
            </li>
            <li class="nav-item f>
              <a class="nav-link @if(\Request::route()->getName() == 'services') {{'active'}} @endi" href="{{ route('services') }}">Services</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link @if(\Request::route()->getName() == 'resources-insights') {{'active'}} @endif" href="{{ route('resources-insights') }}">Insights</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link @if(\Request::route()->getName() == 'services' {{'contact-us'}} @endif" href="{{ route('contact-us') }}">Contact</a>
              </li>
          </ul>
        </div>
    </nav> --}}

    
  <nav class="navbar navbar-expand-lg navbar-light fibovix_navbar bg-light navbar-right-border fixed-top">
    <div class="container">
      <!-- <a class="navbar-brand navbar_mobile" href="tel:{{ $website_contact_details[0]['contact_one'] }}">{{ $website_contact_details[0]['contact_one'] }}  </a>
          <a class="navbar-brand navbar_mobile" href="tel:{{ $website_contact_details[0]['contact_two'] }}"> {{ $website_contact_details[0]['contact_two'] }}</a> -->
<a class="navbar-brand navbar_mobile" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a class="navbar-brand navbar_mobile" href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav fibovix_navbar_nav">
          <li class="nav-item ">
            <a class="nav-link @if(\Request::route()->getName() == '/') {{'active'}} @endif" href="{{ route('/') }}">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link @if(\Request::route()->getName() == 'aboutus') {{'active'}} @endif" href="{{ route('aboutus') }}">About us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link @if(\Request::route()->getName() == 'services') {{'active'}} @endif" href="{{ route('services') }}">Services</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link @if(\Request::route()->getName() == 'resources-insights') {{'active'}} @endif" href="{{ route('resources-insights') }}">Insights</a>
            </li>
          <li class="nav-item ">
              <a class="nav-link @if(\Request::route()->getName() == 'career') {{'active'}} @endif" href="{{ route('career') }}">Career</a>
            </li>
          <li class="nav-item ">
            <a class="nav-link @if(\Request::route()->getName() == 'contact-us') {{'active'}} @endif" href="{{ route('contact-us') }}">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @include('website.layouts.alert')
    <!-- end navbar -->

 


