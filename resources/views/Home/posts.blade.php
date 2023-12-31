@extends('layouts.master')
@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="container mx-auto">
            <div class="bg-info-content shadow-xl my-4">
                <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">
                    <div class="card   bg-base-100 shadow-xl">
                        <div><h1 class="text-orange-200 text-center" >Create By: {{ $post->user->name}}</h1></div>
                        <div class="flex justify-around">
                            <h2 class="card-title" >{{ $post->title}}</h2>
                            <div class="rating gap-1">
                                <form  method="post"  action={{ route('posts.likes', [ $post->id]) }}>
                                    @csrf
                                    {{-- <button class="btn" type="submit">
                                         likes
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>

                                    </button> --}}
                                    <input type="submit" name="rating-3" class="mask mask-heart bg-red-400" />
                                </form>
                                <div>
                                    @if ($post->isAuthUserLikedPost())
                                    <p>(You liked this post)</p>
                                   @endif
                                </div>
                                {{-- <p> {{ $post->likes->count() }} likes</p> --}}

                            </div>
                        </div>
                        <div class="card-body items-center   min-w-fit   min-h-fit  px-2 pt-2">
                            <p>{{ $post->body }}</p>
                        </div>
                        <figure class="px-2 pt-2">
                            <img src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" class="rounded-xl"/>
                        </figure>
                        <div class="px-1 pt-1 items-center text-center">
                            <form method="Post" action={{ route('posts.comments.create', [ $post->id]) }}>
                                @csrf
                                <input  id="content" name="content" type="text" placeholder="Type here" class="input input-bordered input-primary"/>
                                <button class="btn join-item rounded-r-full"  type="submit">send</button>
                            </form>
                        </div>
                        <button>
                            <a class="btn btn-primary px-1 pt-1" href={{ route("posts.comments.list", [ $post->id]) }}>View [{{ $post->comments->count() }}] Comments</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





