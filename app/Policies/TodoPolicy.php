<?php

namespace App\Policies;

use App\Models\Todos;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TodoPolicy
{
    /**
     * only the the ownwer or the todo is allowed to 
     * View the todo
     */
    public function viewAny(Todos $todo, User $user): bool
    {

        if ($user->id == $todo->user_id) {
            return true;
        }
        return false;
    }

    /**
     * only the the ownwer of the todo is allowed to 
     * view is own todo
     */
    public function view(User $user, Todos $todo)
    {
        if ($user->id === $todo->user_id) {
            return true;
        }
        return false;
    }



    /**
     * only the the ownwer of the todo is allowed to 
     * update 
     */
    public function update(User $user, Todos $todo): bool
    {
       
        if ($user->id === $todo->user_id) {
            return true;
        }
        return false;
    }

    /**
     * only the the ownwer of the todo is allowed to 
     * delete
     */
    public function delete(User $user, Todos $todo): bool
    {
        if ($user->id === $todo->user_id) {
            return true;
        }
        return false;
    }
}
