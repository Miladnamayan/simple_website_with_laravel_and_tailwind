@php
    $user = session()->get('user');
@endphp
<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a class="btn  normal-case text-orange-200"   href={{route("home.view")}}><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg> Home</a></li>
                <li><a class="btn  normal-case text-orange-200"   href={{route("profiles.view", [$user])}}>  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Your Profile</a></li>
                <li>
                    <a class="btn btn-warning normal-case text-rose-900" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">LogOut</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <label tabindex="0" class="btn btn-outline btn-primary ">
                <span class="badge badge-lg">{{ $user->name }}</span>
                <div class="avatar">
                    <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="{{ asset('storage/'.$user->image) }}" alt="Avatar Tailwind CSS Component" />
                    </div>
                </div>
            </label>
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




