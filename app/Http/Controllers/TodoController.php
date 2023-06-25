<?php

namespace App\Http\Controllers;

use App\Models\todomodel;
use Illuminate\Http\Request;
use App\Http\Requests\todorequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todos;
use ProtoneMedia\Splade\Facades\Toast;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todos::where('user_id', auth()->user()->id)->latest()->get();
        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Todos::Category;
        return view('todo.createtodo', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(todorequest $request)
    {
        $todoinput = $request->validated();


        $todoinput['status'] = 'open';
        $todoinput['user_id'] = auth()->user()->id;
        $todoinput['StartDate'] = $request->StartDate;
        $student = Todos::create($todoinput);
        Toast::title('Your Todo Succefully Created!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todos $todo)
    {
        $this->authorize('view', $todo);
        $todo = Todos::find($todo->id);
        return view('todo.todo_detailed', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todos $todo)
    {
        $this->authorize('update', $todo);
        $todo = Todos::find($todo->id);
        $category = Todos::Category;
        return view('todo.edittodo', compact('todo', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTodoRequest $request, Todos $todo)
    {
        $request->validated();
        $this->authorize('update', $todo);
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'StartDate' => $request->StartDate,
            'category' => $request->category,

        ]);
        Toast::title('Todo Succefully Updated!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('todos.show', $todo->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todos $todo)
    {
        $this->authorize('update', $todo);
        $todo = Todos::find($todo->id);
        $todo->delete();
        Toast::title('Todo Succefully Created!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('todos.index');
    }

    public function completed(Todos $todo)
    {
        $todo  = Todos::find($todo->id);
        $todo->status = 'completed';
        $todo->save();
        Toast::title('Todo Succefully Completed!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('todos.show', $todo->id);
    }
}
