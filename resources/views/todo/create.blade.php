@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create todo
    </h1>
    <form method = 'get' action = '{!!url("todo")!!}'>
        <button class = 'btn blue'>todo Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("todo")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="title" name = "title" type="text" class="validate">
            <label for="title">title</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection