@extends('layouts.app')

    @section('content')
    <h1>{{$post->content}}</h1>

    @forelse ($post->comments as $comment)
    
    <div>
        {{ $comment->content }}
    </div>
        
    @empty
        <span>nothing</span>
    @endforelse 
    
    @endsection
    