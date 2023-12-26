@extends('layouts.blank')
@section('content')

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
        <form class="card-body" method="POST"  action="{{ route('register1form') }}">
            @csrf
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input id="email"  name="email" type="email"  placeholder="take your email" class="input input-bordered @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback text-red-600" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-control mt-6">
            <button  class="button-link  btn btn-primary" type="submit">Next Step</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
