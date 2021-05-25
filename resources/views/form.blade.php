@extends('layouts.app')


@section('content')
<h1>create posts</h1>

<form method="POST" action="{{ route('posts.store') }}">

    @csrf

    <input type="text" name="title" placeholder="titre" class="border-gray-600 border-2">
    <textarea name="content" placeholder="texte" id="" cols="30" rows="10"></textarea>
    <button type="submit" class="bg-green-500">create</button>

</form>

@endsection