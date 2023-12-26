@extends('layouts.blank')
@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Step Four</h1>
                <h2 class="text-5xl font-bold">Register now!</h2>
                <p class="py-6">Take a deep breath and travel to aroud the World with Miladgram </p>
                <ul class="steps">
                    <li class="step step-primary">verify email</li>
                    <li class="step step-primary">personal information</li>
                    <li class="step step-primary">Choose Role</li>
                    <li class="step step-primary">Regiseter</li>
                </ul>
            </div>
        <div class="overflow-x-auto">
                <table class="table">
                    <thead >
                        <tr>
                        <th>Picture</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-12 h-12">
                                        <img src="{{ asset('storage/'.$user->image) }}" alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-yellow-600 font-bold"><p>{{ $user->email }}</p></div>
                            </td>
                            <td>
                                <div class="text-yellow-600 font-bold"><p>{{ $user->name }}</p></div>
                            </td>
                            <td>
                                <div class="text-yellow-600 font-bold"><p>{{ Session::get('password') }}</p></div>
                            </td>
                            <td>
                                <div class="text-yellow-600 font-bold"><p>{{ $user->role }}</p></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-control mt-6">
                    <a class="btn  btn-primary"   href={{route("welcome")}}> RIGESTER NOW</a>
                </div>
                <div class="form-control mt-6">
                    <a class="btn btn-outline btn-primary"   href={{route("register3")}}> Previous step</a>
                </div>
            </div>
        </div>
    </div>
@endsection

