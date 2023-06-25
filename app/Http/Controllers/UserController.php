<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Todos;
use Illuminate\Http\Request;
use App\Mail\SenduserLoginDetails;
use Illuminate\Support\Facades\Mail;
use ProtoneMedia\Splade\SpladeTable;
use App\Http\Requests\Userformrequest;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        /***
         * this will display a table which you can search 
         * using name or email
          */ 
        
        return view('users.users', [
            'users' => SpladeTable::for(User::class)
                ->withGlobalSearch(columns: ['name', 'email'])
                ->perPageOptions(['10', '20'])
                ->column('name', searchable: true)
                ->column('email')
                ->column('is_admin')
                ->column('created_at')
                ->column('actions')
                ->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Userformrequest $request)
    {
        $input = $request->validated();
        $user = User::create($input);

        // mail is send to user with their login credentials
        Mail::to($user->email)->send(new SenduserLoginDetails($user)); 
        Toast::title('User Succefully Created!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        try {
            $this->authorize('is_admin');

            return view('users.user_detailed', compact('user'));
        } catch (\Illuminate\Auth\Access\AuthorizationException $e) {
            return view('errors.unauthorized');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.user_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',


        ]);


        $user = User::find($user->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->is_admin = $request->input('is_admin');
        $user->save();
        Toast::title('Profile updated!')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('users.show', $user->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        Toast::title('User Succefully Deleted')
            ->success()
            ->center()
            ->backdrop()
            ->autoDismiss(2);
        return redirect()->route('users.index');
    }
}
