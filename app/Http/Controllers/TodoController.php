<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TodoController.
 *
 * @author  The scaffold-interface created at 2018-11-10 11:31:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - todo';
        $todos = Todo::paginate(6);
        return view('todo.index',compact('todos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - todo';
        
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo();

        
        $todo->title = $request->title;

        
        
        $todo->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new todo has been created !!']);

        return redirect('todo');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - todo';

        if($request->ajax())
        {
            return URL::to('todo/'.$id);
        }

        $todo = Todo::findOrfail($id);
        return view('todo.show',compact('title','todo'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - todo';
        if($request->ajax())
        {
            return URL::to('todo/'. $id . '/edit');
        }

        
        $todo = Todo::findOrfail($id);
        return view('todo.edit',compact('title','todo'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $todo = Todo::findOrfail($id);
    	
        $todo->title = $request->title;
        
        
        $todo->save();

        return redirect('todo');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/todo/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$todo = Todo::findOrfail($id);
     	$todo->delete();
        return URL::to('todo');
    }
}
