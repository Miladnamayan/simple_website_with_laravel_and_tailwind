@extends('layouts.blank')
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
        <h1 class="text-5xl font-bold">Welcome Back</h1>
        <h2 class="text-5xl font-bold">Login now!</h2>
        <p class="py-6">Take a deep breath and travel to aroud the World with Miladgram </p>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body" method="Post" action="{{ route('loginform') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
                @csrf
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email:</span>
            </label>
            <input type="email"  class="input input-bordered" name="email" value="{{ old('email') }}" placeholder="email" required="required" autofocus>
            @if ($errors->has('email'))
            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Password:</span>
            </label>
            <input type="password"   class="input input-bordered" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @error('password')
            <span class="invalid-feedback text-red-600" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label class="label">
              <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
            </label>
          </div>
          <div class="form-control mt-6">
            <button class="btn  btn-primary" type="submit">Login</button>
        </div>
        </form>
      </div>
    </div>
  </div>






@endsection
