<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Cause;

class CausePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user,  Cause $cause)
    {
        return $user->id === $cause->user_id;
    }

    public function create(User $user)
    {
        return $user->id === 1;
    }
}