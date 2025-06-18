@php
    $page="English"
@endphp
@extends('layouts.plantilla')
@section('navbar')
  <nav class="navbar navbar-expand-md bg-body py-3 shadow">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
          <img src="" alt="">
        </span>
        <span>English</span>
      </a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div id="navcol-2" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Levels</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">FAQ'S</a></li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto"><div class="vr d-none d-lg-flex h-100 mx-lg-2 text-dark"></div></li>
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
@endsection
@section('content')
  Hola
@endsection