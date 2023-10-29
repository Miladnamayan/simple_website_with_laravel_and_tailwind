@extends('layouts.master')


@section('content')
    <div class="hero min-h-screen bg-base-200">
        <div class="container mx-auto">
            <div class="bg-info-content shadow-xl my-4">
                <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">
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
                              </tbody>
                              <th><button class="btn btn-primary">NewPost</button></th>
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





