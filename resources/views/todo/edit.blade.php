@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit todo
    </h1>
    <form method = 'get' action = '{!!url("todo")!!}'>
        <button class = 'btn blue'>todo Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("todo")!!}/{!!$todo->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="title" name = "title" type="text" class="validate" value="{!!$todo->
            title!!}"> 
            <label for="title">title</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection