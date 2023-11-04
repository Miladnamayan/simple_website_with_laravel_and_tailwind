@extends('layouts.master')


@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="container mx-auto">
            <div class="bg-info-content shadow-xl my-4">
                <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">

                    <div class="w-full grid justify-items-center">
                        <table >
                        <tr>
                        <td>
                        <ul class="menu bg-base-200 lg:menu-horizontal rounded-box">

                            <li>
                              <a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                                Inbox
                                <span class="badge badge-sm">99</span>
                              </a>
                            </li>
                            <li>
                              <a>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span class="badge badge-sm badge-warning">NEW POST</span>
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

                    <div>
                        <div class="overflow-x-auto">
                            <table class="table table-zebra">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th>id</th>
                                  <th>Title</th>
                                  <th>Create_at</th>
                                  <th>Updated_at</th>
                                  <td>Detais</td>
                                  <td>Publish/UnPublish</td>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                <tr>
                                  <th>1</th>
                                  <td>Cy Ganderton</td>
                                  <td>Quality Control Specialist</td>
                                  <td>Blue</td>
                                  <td>
                                        <div class="dropdown dropdown-hover">
                                            <label tabindex="0" class="btn btn-outline btn-primary">detail</label>
                                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                            <li><a>View</a></li>
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
                                <!-- row 2 -->
                                <tr>
                                  <th>2</th>
                                  <td>Hart Hagerty</td>
                                  <td>Desktop Support Technician</td>
                                  <td>Purple</td>
                                  <td>
                                        <div class="dropdown dropdown-hover">
                                            <label tabindex="0" class="btn btn-outline btn-primary">detail</label>
                                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                            <li><a>View</a></li>
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
                                <!-- row 3 -->
                                <tr>
                                  <th>3</th>
                                  <td>Brice Swyre</td>
                                  <td>Tax Accountant</td>
                                  <td>Red</td>
                                  <td>
                                    <div class="dropdown dropdown-hover">
                                        <label tabindex="0" class="btn btn-outline btn-primary">detail</label>
                                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                          <li><a>View</a></li>
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
                                <!-- row 4 -->
                                <tr>
                                    <th>4</th>
                                    <td>Hart Hagerty</td>
                                    <td>Desktop Support Technician</td>
                                    <td>Purple</td>
                                    <td>
                                        <div class="dropdown dropdown-hover">
                                            <label tabindex="0" class="btn btn-outline btn-primary">detail</label>
                                            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                                              <li><a>View</a></li>
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
                              </tbody>
                            </table>
                          </div>
                        {{-- table --}}

                    </div>
                    <div>
                        {{-- <div>newPost</div> --}}
                        {{-- <div>comment</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





