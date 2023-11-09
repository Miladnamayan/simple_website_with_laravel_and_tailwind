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
                <h1 class="text-5xl font-bold">Step Three</h1>
                <h2 class="text-5xl font-bold">Choose Role!</h2>
                <p class="py-6">Take a deep breath and travel to aroud the World with Miladgram </p>
                <ul class="steps">
                    <li class="step step-primary">verify email</li>
                    <li class="step step-primary">personal information</li>
                    <li class="step step-primary">Choose Role</li>
                    <li class="step">Regiseter</li>
                </ul>
        </div>


            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <form class="card-body" method="Post" action="{{ route('register3form') }}" >
                    @csrf
                    <div class="form-control mt-6">
                        <div tabindex="0" class="collapse bg-primary text-primary-content focus:bg-secondary focus:text-secondary-content">
                            <div class="collapse-title">
                                <h2 class="text-3xl font-bold">Role-1</h2>
                            </div>
                            <div class="collapse-content">
                                <p>By selecting the Public user role, you will be given the following accesses:
                                    <li>View other users' posts</li>
                                    <li>Grading the posts</li>
                                    <li>Commenting on posts</li>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-control mt-6">
                        <div tabindex="0" class="collapse bg-primary text-primary-content focus:bg-secondary focus:text-secondary-content">
                            <div class="collapse-title">
                                <h2 class="text-3xl font-bold">Role-2</h2>
                            </div>

                            <div class="collapse-content">
                                <p>By selecting the Author role, you will be given the following accesses:
                                    <li>Creating new posts</li>
                                    <li>View your and other users' posts</li>
                                    <li>Commenting on posts</li>

                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- <select id="role" name="role">
                        <option value="author" selected>Author</option>
                        <option value="public_user">Public User</option>
                    </select> --}}

                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Choose Public-user</span>
                            {{-- <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked /> --}}
                            <input  id="role" name="role" type="radio"  class="radio checked:bg-red-500" checked   value="{{ old('Public-user') ?? ' Public-user' }}"  />

                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                        <span class="label-text">Choose Author</span>
                        {{-- <input type="radio" name="radio-10" class="radio checked:bg-blue-500" checked /> --}}
                        <input  id="role" name="role" type="radio"  class="radio checked:bg-red-500" checked   value="{{ old('Author') ?? ' Author' }}"  />

                        </label>
                    </div>

                    <div class="form-control mt-6">
                        <button  class="button-link  btn btn-primary" type="submit">Next Step</button>
                    </div>
                     <div class="form-control mt-6">
                         <a class="btn btn-outline btn-primary"   href={{route("register2")}}> Previous step</a>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
