<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        $users = User::All();
        return view('livewire.users')->with('users', $users);
    }
}
