<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "creating" event.
     */
    public function creating(User $user): void
    {
        if(empty($user->bio)) {
            $user->bio = "Welcome to our platform,{$user->name}!";
        };
        $user->name = ucwords(strtolower($user->name));

        if (strtolower($user->email) === "admin@gmail.com") {
            $user->role = "admin";
        } elseif (strtolower($user->email) === "manager@gmail.com") {
            $user->role = "manager";
        } else {
            $user->role = "user";
        }
    }


    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {

    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        $user->name = ucwords(strtolower($user->name));
         if(strtolower($user->email === "admin@gmail.com")) {
            $user->role = "admin";
        }elseif(strtolower($user->email === "manager@gmail.com")){
            $user->role = "manager";
        }else{
            $user->role = "user";
        }
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
