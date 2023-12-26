@extends('layouts.master')
@section('content')
    <div class="card w-96 bg-base-100 shadow-xl  ring-2 ring-gray-900 ">
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form class="card-body" method="Post" action={{ route('profiles.newpost.create') }} enctype="multipart/form-data">
                @csrf
                <div class="form-control" >
                    <label class="label">
                        <span class="label-text">Pick one category:</span>
                    </label>
                    <select class="select select-primary w-full max-w-xs   @error('category_id') is-invalid @enderror"  name="category_id"   required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Title:</span>
                    </label>
                    <input  name="title" type="title"  placeholder="Take your Title" class="input input-bordered   @error('title') is-invalid @enderror" value="{{ old('title') }}"     required autocomplete="title" />
                    @error('title')
                        <span class="invalid-feedback text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">body:</span>
                    </label>
                    <textarea  name="body" type="body"  placeholder="Take your body" class="textarea textarea-bordered textarea-lg w-full max-w-xs  @error('body') is-invalid @enderror" value="{{ old('body') }}"     required autocomplete="body"></textarea>
                    @error('body')
                        <span class="invalid-feedback text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control ">
                    <label class="label">
                        <span class="label-text">Post Picture:</span>
                    </label>
                    <input  name="picture" type="file" class="file-input file-input-bordered file-input-primary  w-full max-w-xs  @error('Picture') is-invalid @enderror"   required />
                    @error('Picture')
                        <span class="invalid-feedback text-red-600" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control mt-6">
                    <button  class="button-link  btn btn-primary" type="submit">Post</button>
                </div>
                <div class="form-control mt-6">
                    <a class="btn btn-outline "   href={{route("profiles.view")}}> Profiles</a>
                </div>
            </form>
        </div>
    </div>
@endsection
