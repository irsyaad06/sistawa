<?php

namespace App\Policies;

use App\Models\BarangBrackenDay1;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangBrackenDay1Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BarangBrackenDay1 $barangBrackenDay1): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BarangBrackenDay1 $barangBrackenDay1): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BarangBrackenDay1 $barangBrackenDay1): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BarangBrackenDay1 $barangBrackenDay1): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BarangBrackenDay1 $barangBrackenDay1): bool
    {
        return $user->email === 'bracken@gmail.com' || $user->email === 'admin@gmail.com';
    }
}
