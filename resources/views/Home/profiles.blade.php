@extends('layouts.master')

@section('profile_info')
    <div><a class="normal-case text-yellow-900">Your Role:{{ $user->role }}</a></div>
   <div> <a class="normal-case text-yellow-900">Your Email Address:{{ $user->email }}</a></div>
@endsection

@section('content')
    <div class="flex justify-center ">
        <div class="container mx-auto  ">
            <div class="bg-info-content shadow-xl my-4 ">
                <div class="grid grid-cols-1  gap-x-0 gap-y-0 place-items-center   ">
                        <div class="overflow-x-auto">
                            <div class="stats stats-vertical lg:stats-horizontal shadow">
                                <div class="stat">
                                    <div class="stat-title">Number of notifications</div>
                                    <div class="stat-value">{{$notification->count() }} notifications</div>

                                </div>
                                <div class="stat">
                                    <ul class="menu bg-base-200 lg:menu-horizontal rounded-box">
                                        <li>
                                            <button class="btn" onclick="my_modal_1.showModal()">
                                                <span class="badge badge-sm badge-warning">NEW Notification</span>
                                                <span class="badge badge-sm">{{ $newNotification->count() }}</span>
                                            </button>
                                            <dialog id="my_modal_1" class="modal">
                                              <div class="modal-box">
                                                <div class="overflow-x-auto ">
                                                    <table class="table">

                                                      <tbody >
                                                        @foreach ($user->unreadNotifications as $notification)
                                                        <tr class="hover text-justify">
                                                          <th>{{ $notification->created_at }}</th>
                                                          <td ">{{ $notification->data['message'] }}</td>
                                                          {{-- <td>Desktop Support Technician</td>
                                                          <td>Purple</td> --}}
                                                        </tr>
                                                        @endforeach
                                                      </tbody>
                                                    </table>
                                                  </div>
                                                <div class="modal-action">
                                                  <form method="dialog">
                                                    <button class="btn">Close</button>
                                                  </form>
                                                </div>
                                              </div>
                                            </dialog>
                                        {{-- <a>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                            <span class="badge badge-sm badge-warning">NEW Notification</span>
                                            <span class="badge badge-sm">{{ $newNotification->count() }}</span>
                                        </a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                    {{-- <div class="badge badge-sm badge-warning">New notifications</div>
                                    <span class="badge badge-sm">2+</span>
                                    <div class="stat-value"> notifications</div> --}}


                            <table class="table table-zebra" >
                                <thead>
                                    <tr class="text-center">
                                        <th>post_id</th>
                                        <th>picture</th>
                                        <th>Title</th>
                                        <th>Create_at</th>
                                        <th>Updated_at</th>
                                        <td>Details</td>
                                        <td>UnPublish/Publish</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="text-center">{{ $post->id }}</td>
                                            <td>
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="{{ asset('storage/'.$post->picture) }}" alt="Avatar Tailwind CSS Component" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td  class="text-center">{{ $post->title }}</td>
                                            <td class="text-center">{{ $post->created_at }}</td>
                                            <td  class="text-center">{{ $post->updated_at }}</td>
                                            <td>
                                                <div class="dropdown dropdown-hover">
                                                    <label tabindex="0" class="btn btn-outline btn-primary">details</label>
                                                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                                        <li><a class="btn normal-case text-orange-200"  href={{ route("profiles.details.view", ['post' => $post]) }}>View</a></li>
                                                        <li><a class="btn normal-case text-orange-200"  href={{ route("profiles.details.update.view", ['post' => $post]) }}>Update</a></li>
                                                        <li><a class="btn btn-warning" href={{ route("profiles.details.delete", ['post' => $post]) }}  onclick="return confirm('Are you sure you want to delete {{ $post->title }} post?')">DELETE</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <form  method="post"  action={{ route('profiles.publish_post', [$post]) }}>
                                                        @csrf
                                                    <div class="flex flex-col" >
                                                        <div class="form-control w-52">
                                                        <div class="tooltip" data-tip="When you put it in check mode, the post will be displayed on the home page" >
                                                        <input type="checkbox" name="post_status"  value="1" class="toggle toggle-primary" {{ $post->post_status == 1 ? 'checked' : '' }} />
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class=" btn-primary">Change</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <th><a class="btn btn-primary"   href={{route("profiles.newpost.view")}}> NewPost</a></th>
                                @if (session('message'))
                                    <div role="alert" class="alert ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                                        <span>{{ session('message') }}</span>
                                        <button  class="btn btn-sm" >Deny</button>
                                        <form  method="post"  action={{ route('profiles.adminsnotification') }}>
                                            @csrf
                                            <button  type="submit" name="adminsnotification"  value="1" class="btn btn-sm btn-primary">Accept</button>
                                        </form>
                                    </div>
                                @endif
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





