@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        post Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("post")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New post</button>
        </form>
    </div>
    <table>
        <thead>
            <th>title</th>
            <th>slug</th>
            <th>body</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($posts as $post) 
            <tr>
                <td>{!!$post->title!!}</td>
                <td>{!!$post->slug!!}</td>
                <td>{!!$post->body!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/post/{!!$post->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/post/{!!$post->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/post/{!!$post->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $posts->render() !!}

</div>
@endsection