@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        todo Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("todo")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New todo</button>
        </form>
    </div>
    <table>
        <thead>
            <th>title</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($todos as $todo) 
            <tr>
                <td>{!!$todo->title!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/todo/{!!$todo->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/todo/{!!$todo->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/todo/{!!$todo->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $todos->render() !!}

</div>
@endsection