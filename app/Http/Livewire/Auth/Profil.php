<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Profil extends Component
{
    public function render()
    {
        return view('livewire.auth.profil')->layout('livewire.base');
    }
}
