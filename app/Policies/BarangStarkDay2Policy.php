<?php

namespace App\Policies;

use App\Models\BarangStarkDay2;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangStarkDay2Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BarangStarkDay2 $barangStarkDay2): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BarangStarkDay2 $barangStarkDay2): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BarangStarkDay2 $barangStarkDay2): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BarangStarkDay2 $barangStarkDay2): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BarangStarkDay2 $barangStarkDay2): bool
    {
        return $user->email === 'stark@gmail.com' || $user->email === 'admin@gmail.com';
    }
}
