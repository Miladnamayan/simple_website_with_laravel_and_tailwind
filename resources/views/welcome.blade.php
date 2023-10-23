@extends('layouts.master')
@section('content')

   <div class="card w-96 bg-base-100 shadow-xl">
    <figure><img src="/images/01.jpg" alt="Shoes" /></figure>
    <div class="card-body">
      <h2 class="card-title">Shoes!</h2>
      <p>If a dog chews shoes whose shoes does he choose?</p>
      <div class="card-actions justify-end">
        <button class="btn btn-primary">Buy Now</button>
      </div>
    </div>
  </div>

  <div class="btn-group">
    <input type="radio" name="options" data-title="1" class="btn" />
    <input type="radio" name="options" data-title="2" class="btn" checked />
    <input type="radio" name="options" data-title="3" class="btn" />
    <input type="radio" name="options" data-title="4" class="btn" />
  </div>
@endsection
