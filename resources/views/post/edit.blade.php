@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit post
    </h1>
    <form method = 'get' action = '{!!url("post")!!}'>
        <button class = 'btn blue'>post Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("post")!!}/{!!$post->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="title" name = "title" type="text" class="validate" value="{!!$post->
            title!!}"> 
            <label for="title">title</label>
        </div>
        <div class="input-field col s6">
            <input id="slug" name = "slug" type="text" class="validate" value="{!!$post->
            slug!!}"> 
            <label for="slug">slug</label>
        </div>
        <div class="input-field col s6">
            <label for="body">body</label></BR>
            <textarea id="body" name = "body" class="validate" > 
            {!!$post->body!!}
            </textarea>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection