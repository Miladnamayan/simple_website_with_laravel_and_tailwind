@extends('layouts.master')
@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="container mx-auto">
            <div class="bg-info-content shadow-xl my-4">
                <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">
                    <div class="overflow-x-auto">
                        <div class="w-full grid justify-items-center">
                            <table >
                                <tr>
                                    <p class="normal-case text-3xl  text-indigo-700 ">Table of Authors</p>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="stats stats-vertical lg:stats-horizontal shadow">
                                            <div class="stat">
                                                <div class="stat-title">Number of Users</div>
                                                <div class="stat-value">{{ $userCount }} members</div>
                                            </div>
                                            <div class="stat">
                                                <div class="badge badge-sm badge-warning">New Registers</div>
                                                <div class="stat-value">{{ $newUsersCount }} persons</div>
                                            </div>
                                        </div>
                                        <div class="stats stats-vertical lg:stats-horizontal shadow">
                                            <div class="stat">
                                                <div class="stat-title">Number of Posts</div>
                                                <div class="stat-value">{{ $postCount }} Posts</div>
                                            </div>
                                            <div class="stat">
                                                <div class="badge badge-sm badge-warning">New posts</div>
                                                <div class="stat-value">{{ $newpostsCount }} posts</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <ul class="menu bg-base-200 lg:menu-horizontal rounded-box">
                                            <li>
                                                <a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                                    <span class="badge badge-sm badge-warning">NEW Notification</span>
                                                    <span class="badge badge-sm">2+</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <select class="select select-primary w-full max-w-xs">
                                            <option disabled selected>FILTER</option>
                                            <option>id</option>
                                            <option>UserName</option>
                                            <option>Update</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <table class="table table-zebra">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>Role</th>
                                    <th>Create_at</th>
                                    <th>Updated_at</th>
                                    <td>Regect/Accept</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->id }}</td>
                                        <td  class="text-center">{{ $user->name }}</td>
                                        <td>
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="{{ asset('storage/'.$user->image) }}" alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                        </td>
                                        <td  class="text-center">{{ $user->role }}</td>
                                        <td class="text-center">{{ $user->created_at }}</td>
                                        <td  class="text-center">{{ $user->updated_at }}</td>
                                        <td>
                                            <form  method="post"  action={{ route('manager.accept_status', [$user]) }}>
                                                @csrf
                                                <div class="flex flex-col" >
                                                    <div class="form-control w-52" >
                                                    <input type="checkbox" name="accept_status"  value="1" class="toggle toggle-primary" {{ $user->accept_status === 1 ? 'checked' : '' }}{{ $user->role == 'Public-user' ? 'disabled' : '' }} />
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-primary text-rose-300  font-mono" {{ $user->role == 'Public-user' ? 'disabled' : '' }}>Change</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





