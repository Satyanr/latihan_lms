<?php

namespace App\Livewire\Admin\Content;

use App\Models\Diklat;
use Livewire\Component;

class DiklatList extends Component
{
    public function render()
    {
        $diklats = Diklat::all();
        return view('livewire.admin.content.diklat-list', compact('diklats'));
    }
}
