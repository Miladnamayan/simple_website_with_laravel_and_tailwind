@extends('layouts.master')
@section('content')
    <div class="hero min-h-screen bg-base-200">
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4">
            <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-center ">
                    <div class="card   bg-base-100 shadow-xl">
                        <div class="flex justify-around">
                            <h2 class="card-title" >Shoes!</h2>
                            <div class="rating gap-1">
                                <input type="radio" name="rating-3" class="mask mask-heart bg-red-400" />
                                <input type="radio" name="rating-3" class="mask mask-heart bg-orange-400" checked />
                                <input type="radio" name="rating-3" class="mask mask-heart bg-yellow-400" />
                                <input type="radio" name="rating-3" class="mask mask-heart bg-lime-400" />
                                <input type="radio" name="rating-3" class="mask mask-heart bg-green-400" />
                            </div>
                        </div>

                        <div class="card-body items-center text-center  min-w-fit   min-h-fit  px-2 pt-2">

                            <p>If a dog chews shoes whose shoes does he choose?</p>

                        </div>

                        <figure class="px-2 pt-2">
                        <img src="/images/02.jpg" alt="Shoes" class="rounded-xl" />
                        </figure>

                        <div class="px-1 pt-1 items-center text-center">

                                <input type="text" placeholder="Type here" class="input input-bordered input-primary "/>
                                <button class="btn join-item rounded-r-full">send</button>
                        </div>

                        <button class="btn btn-primary px-1 pt-1">View Comments</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


     


