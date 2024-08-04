<?php

namespace App\Policies;

use App\Models\Supplier;
use App\Models\User;

class SupplierPolicy
{
  
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'user']);
    }

   
    public function view(User $user, Supplier $supplier): bool
    {
        return in_array($user->role, ['admin', 'manager']);
    }

   
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'manager']);
    }

    
    public function update(User $user, Supplier $supplier): bool
    {
        return in_array($user->role, ['admin', 'manager']);
    }

   
    public function delete(User $user, Supplier $supplier): bool
    {
        return in_array($user->role, ['admin', 'manager']);
    }
}
