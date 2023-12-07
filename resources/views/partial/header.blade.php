@php
    $user = session()->get('user');
@endphp
<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-outline btn-primary">
                <span class="badge badge-lg">{{ $user->name }}</span>
                <div class="avatar">
                    <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="{{ asset('storage/'.$user->image) }}" alt="Avatar Tailwind CSS Component" />
                    </div>
                </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                {{-- <a class="  normal-case text-purple-900">{{ $user->email }}</a>
                <a class="  normal-case text-purple-900">{{ $user->role }}</a> --}}
                <li><a class="btn  normal-case text-orange-200"   href={{route("home.view")}}> Home</a></li>
                <li><a class="btn  normal-case text-orange-200"   href={{route("profiles.view")}}>Your Profile</a></li>
                <li>
                    <a class="btn  normal-case text-rose-900" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">LogOut</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
    <a class="btn btn-ghost normal-case text-3xl  text-indigo-700" > <p class="font-mono">Miladgram</p></a>
    </div>
    <div class="navbar-end">
    <div class="mb-auto"> @yield('category_filter')</div>
    <div class="mb-auto"> @yield('profile_info')</div>
    </div>

</div>

