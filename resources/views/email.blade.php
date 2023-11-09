@extends('layouts.blank')
@section('content')

{{-- <p>{{ $email1->email }}</p> --}}

{{-- <ul>
@foreach ($emails as $email)


<li>{{$email->email}}</li>
</ul> --}}

<p>{{$emails->email}}</p>
{{-- @endforeach --}}
@endsection
