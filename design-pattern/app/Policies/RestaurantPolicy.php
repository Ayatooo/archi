<?php

namespace App\Policies;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Restaurant $restaurant): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Restaurant $restaurant): bool
    {
    }

    public function delete(User $user, Restaurant $restaurant): bool
    {
    }

    public function restore(User $user, Restaurant $restaurant): bool
    {
    }

    public function forceDelete(User $user, Restaurant $restaurant): bool
    {
    }
}
