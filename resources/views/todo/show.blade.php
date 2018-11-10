@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show todo
    </h1>
    <form method = 'get' action = '{!!url("todo")!!}'>
        <button class = 'btn blue'>todo Index</button>
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
                <td>{!!$todo->title!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection