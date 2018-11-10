@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create post
    </h1>
    <form method = 'get' action = '{!!url("post")!!}'>
        <button class = 'btn blue'>post Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("post")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="title" name = "title" type="text" class="validate">
            <label for="title">title</label>
        </div>
        <div class="input-field col s6">
            <input id="slug" name = "slug" type="text" class="validate">
            <label for="slug">slug</label>
        </div>
        <div class="input-field col s6">
            <input id="body" name = "body" type="text" class="validate">
            <label for="body">body</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection