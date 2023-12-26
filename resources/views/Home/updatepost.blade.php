@extends('layouts.master')
@section('content')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4">
            <div class="grid grid-cols-1  place-items-center">
                <div class="card w-96 bg-base-100 shadow-xl image-full">
                    <form class="card-body" method="Post" action={{ route('profiles.details.update.action', ['post' => $post]) }} enctype="multipart/form-data">
                        @csrf
                        <figure><img src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" class="rounded-xl"/></figure>
                        <h2 class="card-title">Post category: {{$post->category->category_name }}</h2>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">new Title:</span>
                            </label>
                            <input  name="title" type="title"  placeholder={{ $post->title}} class="input input-bordered @error('title') is-invalid @enderror " value="{{ old('title') }}"   autocomplete="title" />
                            @error('title')
                                    <span class="invalid-feedback text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text"> new body:</span>
                                </label>
                                <textarea  name="body" type="body"  placeholder={{ $post->body }} class="textarea textarea-bordered textarea-lg w-full max-w-xs @error('body') is-invalid @enderror" value="{{ old('body') }}"   autocomplete="body"></textarea>
                                @error('body')
                                    <span class="invalid-feedback text-red-600" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>
                            <div class="card-actions justify-end">
                                <button type="submit" class="btn btn-primary "onclick="return confirm('Are you sure you want to Update {{ $post->title }} post?')">Update Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





