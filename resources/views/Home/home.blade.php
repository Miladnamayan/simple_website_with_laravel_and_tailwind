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
                  <ul class="menu p-4 w-70 min-h-full bg-base-200 normal-case  text-orange-200 items-end">
                    <br><br><br>
                    <li ><a href={{route("home.view")}}>All</a></li>
                    @foreach($categories as $category)
                        <li ><a href={{route("home.category", [$category->id])}}>{{ $category->category_name }}</a></li>
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
@section('sortby')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4   ">
            <div class="grid grid-rows-1  ">
                <div class="collapse bg-base-200">
                    <input type="checkbox" class="peer" />
                    <div class="collapse-title bg-neutral text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                        Click on me to sort the posts by
                    </div>
                    <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                        <div class="flex flex-col w-full">
                            <div class="divider divider-start">
                                <a href={{ route('home.view', ['sort' => 'likes']) }}>most Liked</a>
                            </div>
                            <div class="divider">
                                <a href={{ route('home.view', ['sort' => 'views']) }}>most Visited</a>
                            </div>
                            <div class="divider divider-end">
                                <a href={{ route('home.view') }}>Newest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if (session('unauthorised'))
        <div role="alert" class="alert alert-warning ">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            <span>{{ session('unauthorised') }}</span>
        </div>
    @endif
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-0 gap-y-10 place-items-center">
                @foreach ($posts as $post)
                    <a class="btn btn-link  w-auto h-auto"   href={{ route("posts.view", [$post->id]) }}>
                        <div class="card w-96 bg-base-100 shadow-xl  ring-2 ring-gray-900  " >
                            <div class="card-body p-1  ">
                                <div class="bg-indigo-300 ">
                                    <img class="object-cover h-48 w-96 ..." src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" />
                                    <h2 class="card-title pl-8 ">
                                        {{ $post->title }}
                                        @if ($post->created_at->gt(now()->subDay()))
                                            <div class="badge badge-secondary px-1 ">NEW</div>
                                        @endif
                                    </h2>
                                </div>
                                <div class="flex flex-col w-full">
                                    <div class="text-left ">
                                        <p class="text-slate-600">{{ $post->body }}</p>
                                    </div>
                                </div>
                                <div class="stats shadow">
                                    <div class="stat place-items-center">
                                      <div class="stat-title">created_at</div>
                                      <div class="stat-desc text-secondary">{{ $post->created_at }}</div>
                                    </div>
                                    <div class="stat place-items-center">
                                      <div class="stat-title">
                                        <div class="badge badge-lg"><p>{{$post->views()->count()}}:View</p></div>
                                      </div>
                                      <div class="stat-value">
                                        <p>{{ $post->likes->count() }}
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                        </p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
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








