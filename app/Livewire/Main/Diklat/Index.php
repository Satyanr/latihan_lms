<?php

namespace App\Livewire\Main\Diklat;

use App\Models\Diklat;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $diklats = Diklat::all();
        return view('livewire.main.diklat.index', compact('diklats'));
    }
}
