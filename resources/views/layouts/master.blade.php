<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.3/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script> --}}

        <link href="elyas/style.css" rel="stylesheet" type="text/css" />
        <script src="elyas/script.js"></script>

    </head>
    <body class="flex flex-col h-screen justify-between">
    {{-- Navbar --}}
    <div class="navbar bg-base-100">
        <div class="navbar-start">
          <div class="dropdown">
            <label tabindex="0" class="btn btn-outline btn-primary">

                    <span class="badge badge-lg">Arghinaaaaaaaaaaaaaaaaaaaa</span>

            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>A@gmail.com</a></li>
              <li><a>Public User</a></li>
              <li><a class="btn  normal-case text-amber-500">LogOut</a></li>
            </ul>
          </div>

          <div class="avatar">
            <div class="w-12 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
              <img src="/images/user picture/AA.jpg" />
            </div>
          </div>





        </div>
        <div class="navbar-center">
          <a class="btn btn-ghost normal-case text-3xl  text-indigo-700" > <p class="font-mono">Miladgram</p></a>
        </div>

        <div class="navbar-end">

            <div class="join">
                <div>
                  <div>
                    <input class="input input-bordered join-item" placeholder="Search Title"/>
                  </div>
                </div>
                <select class="select select-bordered join-item">
                  <option disabled selected>Filter</option>
                  <option>New</option>
                  <option>Jungle</option>
                  <option>Sea</option>
                  <option>Mountain</option>
                  <option>Desert</option>
                  <option>plain</option>
                </select>
                <div class="indicator">
                  <button class="btn join-item">Search</button>
                </div>
            </div>
        </div>
      </div>
    {{-- End of nav --}}

    <div class="mb-auto">
        @yield('content')
    </div>

    <div class="mb-auto">
        @yield('pagination')
    </div>


    {{-- <div class="join  m-auto">
        <button class="join-item btn btn-lg">1</button>
        <button class="join-item btn btn-lg btn-active">2</button>
        <button class="join-item btn btn-lg">3</button>
        <button class="join-item btn btn-lg">4</button>
    </div> --}}


    <footer class="footer footer-center  p-10 bg-base-200 text-base-content rounded">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
            </div>
        </nav>
        <aside>
            <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>


    </body>
</html>


