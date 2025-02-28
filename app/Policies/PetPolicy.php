<?php

namespace App\Policies;

use App\Models\Pet;
use App\Models\User;

class PetPolicy
{
    public function update(User $user, Pet $pet): bool
    {
        return $user->id === $pet->user_id;
    }
}
