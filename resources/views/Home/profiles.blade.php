@extends('layouts.master')

@section('profile_info')
    <div><a class="normal-case text-yellow-900">Your Role:{{ $user->role }}</a></div>
   <div> <a class="normal-case text-yellow-900">Your Email Address:{{ $user->email }}</a></div>
@endsection

@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="container mx-auto">
            <div class="bg-info-content shadow-xl my-4">
                <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">
                        <div class="overflow-x-auto">
                            <table class="table table-zebra">
                                <!-- head -->
                                <thead>
                                    <tr>
                                    <th>post_id</th>
                                    <th>picture</th>
                                    <th>Title</th>
                                    <th>Create_at</th>
                                    <th>Updated_at</th>
                                    <td>Details</td>
                                    <td>Publish/UnPublish</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row  -->
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>{{ $post->updated_at }}</td>
                                            <td>
                                                <div class="dropdown dropdown-hover">
                                                    <label tabindex="0" class="btn btn-outline btn-primary">details</label>
                                                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                                    <li><a class="btn  normal-case text-orange-200"  href={{ route("posts.view", ['post' => $post->id]) }}> View</a></li>
                                                    <li><a>Update</a></li>
                                                    <li><button class="btn btn-warning">DELETE</button></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                            <div class="flex flex-col">
                                                <div class="form-control w-52">
                                                    <input type="checkbox" class="toggle toggle-primary" checked />
                                                    </label>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <th><a class="btn btn-primary"   href={{route("profiles.newpost.view")}}> NewPost</a></th>
                            </table>
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>
@endsection

{{-- @section('pagination')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4   ">
            <div class="grid grid-cols-1 place-items-center ">
            {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection --}}





