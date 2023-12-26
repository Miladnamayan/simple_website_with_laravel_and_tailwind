@extends('layouts.blank')
@section('content')

<div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-5xl font-bold">Step Two</h1>
        <h2 class="text-5xl font-bold">personal information</h2>
        <p class="py-6">Take a  </p>
        <ul class="steps">
            <li class="step step-primary">verify email</li>
            <li class="step step-primary">personal information</li>
            <li class="step">Choose Role</li>
            <li class="step">Regiseter</li>
        </ul>
      </div>
      <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <form class="card-body" method="Post" action="{{ route('register2form') }}" enctype="multipart/form-data">
            @csrf
          <div class="form-control">
            <label class="label">
            <span class="label-text">Your image</span>
            <input  name="image" type="file" class="file-input file-input-bordered file-input-primary w-full max-w-xs  @error('image') is-invalid @enderror"   required />
            @error('image')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-control">
            <label class="label">
              <span class="label-text">Name</span>
            </label>
            <input  id="name" name="name" type="name" placeholder="take your name" class="input input-bordered   @error('name') is-invalid @enderror" value="{{ old('name') }}"     required autocomplete="name" />
            @error('name')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input  id="password" name="password" type="password" placeholder="Take your password" class="input input-bordered  @error('password') is-invalid @enderror" required autocomplete="new-password"/>
            @error('password')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Confirm Password</span>
            </label>
            <input id="password_confirmation"   name="password_confirmation"   type="password" placeholder="Take Confirm Password   @error('password_confirmation') is-invalid @enderror" class="input input-bordered" required autocomplete="new-password" />
            @error('password_confirmation')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-control mt-6">
            <button  class="button-link  btn btn-primary" type="submit">Next Step</button>
          </div>

          <div class="form-control mt-6">
            <a class="btn btn-outline btn-primary"  href={{route("register1")}}> Previous step</a>
          </div>



        </form>
      </div>
    </div>
  </div>
@endsection


