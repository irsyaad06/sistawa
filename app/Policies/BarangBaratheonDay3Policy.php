<?php

namespace App\Policies;

use App\Models\BarangBaratheonDay3;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangBaratheonDay3Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BarangBaratheonDay3 $barangBaratheonDay3): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BarangBaratheonDay3 $barangBaratheonDay3): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BarangBaratheonDay3 $barangBaratheonDay3): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BarangBaratheonDay3 $barangBaratheonDay3): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BarangBaratheonDay3 $barangBaratheonDay3): bool
    {
        return $user->email === 'baratheon@gmail.com' || $user->email === 'admin@gmail.com';
    }
}
