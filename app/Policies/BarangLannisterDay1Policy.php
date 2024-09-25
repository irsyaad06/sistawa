<?php

namespace App\Policies;

use App\Models\BarangLannisterDay1;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangLannisterDay1Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BarangLannisterDay1 $barangLannisterDay1): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BarangLannisterDay1 $barangLannisterDay1): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BarangLannisterDay1 $barangLannisterDay1): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BarangLannisterDay1 $barangLannisterDay1): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BarangLannisterDay1 $barangLannisterDay1): bool
    {
        return $user->email === 'lannister@gmail.com' || $user->email === 'admin@gmail.com';
    }
}
