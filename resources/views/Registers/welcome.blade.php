@extends('layouts.blank')
@section('content')

<div class="hero min-h-screen" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold">Hello</h1>
            <div class="text-xl ...">
                <p class="text-teal-400">welcome to[Miladgram]
                    We're so glad you're here! You are now part of a growing community of [Traveller] creating, collaborating, and connecting across the globe via [Miladgram's tool].
                    Whether you've joined to create [something of your own] or just to connect with [other Travellers], we've got something for you.
                    Let's go!</p>
            </div>

        <br>
        <a class="button-link  btn btn-primary"  href={{url("/login")}}>login</a>
        <a class="button-link  btn btn-primary"  href={{route("register1")}}>Register</a>
      </div>
    </div>
</div>

@endsection
