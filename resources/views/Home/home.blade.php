@extends('layouts.master')

@section('category_filter')
    <form action="{{ route('home.view') }}" method="GET" role="search">
        <div class="join">

            <div class="drawer drawer-end">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                  <label for="my-drawer-4" class="drawer-button btn btn-primary">categories</label>
                </div>
                <div class="drawer-side  ">
                  <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay "></label>
                  <ul class="menu p-4 w-70 min-h-full bg-base-200 normal-case  text-orange-200 ">
                    <br><br><br>
                    <li ><a href={{route("home.view")}}>All</a></li>
                    @foreach($categories as $category)
                        <li ><a href={{route("home.Category", [$category->id])}}>{{ $category->category_name }}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>

            <div class="input-group">
                <input type="text" class="input input-bordered join-item" name="term" placeholder="Search title" id="term">
            </div>

            <div class="indicator">
                <button class="btn join-item" type="submit">Search</button>
            </div>
        </div>
    </form>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-0 gap-y-10 place-items-center">
                @foreach ($posts as $post)
                    <div>
                        <a class="btn btn-link  w-80 h-auto"  href={{ route("posts.view", [$post->id]) }}>
                            <div class="card w-96 bg-base-100 shadow-xl  ring-2 ring-gray-900 " >
                                <div class="grid grid-cols-1 place-items-center ">
                                    <figure class="py-2">
                                        <img src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" />
                                    </figure>
                                </div>
                                <div class="card-body p-1  ">
                                    <h2 class="card-title pl-8 ">
                                        {{ $post->title }}
                                        @if ($post->created_at->gt(now()->subDay()))
                                        <div class="badge badge-secondary px-1 ">NEW</div>
                                        @endif
                                    </h2>
                                        <p class="text-slate-600">{{ $post->body }}</p>
                                    <div class="card-actions  justify-center w-max h-1/20 p-1 ">
                                        <div class="stats shadow  justify-center m-auto  w-max h-fit ">
                                            <div class="stat-desc  stat w-1/2 mx-8   my-8 px-1">{{ $post->created_at }}</div>
                                            <div class="stat w-1/2 px-1">
                                                <div class="stat-figure text-primary ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                                </div>
                                                <div class="stat-value text-primary justify-center"><p>{{ $post->likes->count() }} </p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('pagination')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4   ">
            <div class="grid grid-cols-1 place-items-center ">
            {{ $posts->links()}}
            </div>
        </div>
    </div>
@endsection








