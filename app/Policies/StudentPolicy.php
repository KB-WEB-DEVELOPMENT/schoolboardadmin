<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()   {
        //
    }

    public function add(User $user)  {

        return $user->id === $user->isAdmin();
    }

    public function addGrade(User $user)  {

        return $user->id === $user->isAdmin();
    }

    public function edit(User $user)  {

        return $user->id === $user->isAdmin();
    }

    public function changeUser $user)  {

        return $user->id === $user->isAdmin();
    }

    public function destroy(User $user)  {

        return $user->id === $user->isAdmin();
    }

}
