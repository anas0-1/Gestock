<?php

namespace App\Policies;

use App\Models\User;
use App\Models\User as ModelUser;

class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function view(User $user, ModelUser $modelUser): bool
    {
        return $user->role === 'admin';
    }

    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, ModelUser $modelUser): bool
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, ModelUser $modelUser): bool
    {
        return $user->role === 'admin';
    }
}
