<?php

namespace App\Livewire\Main\Diklat;

use App\Models\Topik;
use App\Models\Diklat;
use Livewire\Component;

class Detail extends Component
{
    public $diklat_id;
    public function render()
    {
        $diklat = Diklat::find($this->diklat_id);
        $topiks = Topik::where('diklat_id', $this->diklat_id)->get();

        return view('livewire.main.diklat.detail', [
            'diklat' => $diklat,
            'topiks' => $topiks,
        ]);
    }
}
