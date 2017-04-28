<?php

namespace App\Policies;

use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
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

    public function create(User $user)  {

        return $user->id === $user->isAdmin();
    }

    public function submit(User $user)  {

        return $user->id === $user->isAdmin();
    }

    public function edit(User $user) {

        return $user->id === $user->isAdmin();
    }

    public function change(User $user) {

        return $user->id === $user->isAdmin();
    }
}


