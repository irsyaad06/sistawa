<?php

namespace App\Policies;

use App\Models\BarangFreyDay2;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BarangFreyDay2Policy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BarangFreyDay2 $barangFreyDay2): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BarangFreyDay2 $barangFreyDay2): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BarangFreyDay2 $barangFreyDay2): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BarangFreyDay2 $barangFreyDay2): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BarangFreyDay2 $barangFreyDay2): bool
    {
        return $user->email === 'frey@gmail.com' || $user->email === 'admin@gmail.com';
    }
}
