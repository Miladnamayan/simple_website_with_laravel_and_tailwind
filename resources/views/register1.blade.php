@extends('layouts.master')
@section('content')

<div class="carousel  w-full h-64"  >
    <div id="slide1" class="carousel-item relative w-full">
      <img src="/images/02.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
      <img src="/images/03.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
      <img src="/images/04.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
      <img src="/images/05.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-10 right-10 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Step One</h1>
        <h2 class="text-5xl font-bold">verify email !</h2>
        <p class="py-6">Please Check your gmail to verify your email address </p>
        <ul class="steps">
            <li class="step step-primary">verify email</li>
            <li class="step">personal information</li>
            <li class="step">Choose Role</li>
            <li class="step">Regiseter</li>
        </ul>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body">
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" placeholder="take your email" class="input input-bordered" required />
          </div>
          <div class="form-control mt-6">
            <button class="btn btn-primary">Next Step</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
