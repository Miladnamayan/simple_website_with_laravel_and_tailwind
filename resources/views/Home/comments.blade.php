@extends('layouts.master')
@section('content')
    <div class="container mx-auto">
        <div class="bg-info-content shadow-xl my-4">
            <div class="grid grid-cols-1  gap-x-0 gap-y-10 place-items-stretch">
                @foreach ($comments as $comment)
                    <div class="chat {{$comment->isOwner() ? 'chat-start' : 'chat-end'}}">
                        <div class="chat-image avatar">
                            <div class="w-10 rounded-full">
                                <img src="{{ asset('storage/'.$comment->user->image) }}" />
                            </div>
                        </div>
                        <div class="chat-header">
                            {{ $comment->user->name}}
                        </div>
                        <div class="chat-bubble">{{$comment->content}}</div>
                        <div class="chat-footer opacity-50">
                            <time class="text-xs opacity-50">{{$comment->created_at}}</time>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection







