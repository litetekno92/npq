@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show post
    </h1>
    <form method = 'get' action = '{!!url("post")!!}'>
        <button class = 'btn blue'>post Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>title : </i></b>
                </td>
                <td>{!!$post->title!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>slug : </i></b>
                </td>
                <td>{!!$post->slug!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>body : </i></b>
                </td>
                <td>{!!$post->body!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection