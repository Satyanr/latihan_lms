<?php

namespace App\Livewire\Admin\Content\Topik;

use App\Models\Topik;
use Livewire\Component;

class Index extends Component
{
    public $nama, $deskripsi, $diklat;
    public $updateMode = false;
    public function render()
    {
        $topiks = Topik::where('diklat_id', $this->diklat->id)->get();
        return view('livewire.admin.content.topik.index', [
            'diklat' => $this->diklat,
            'topiks' => $topiks,
        ]);
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->deskripsi = '';
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Topik::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'diklat_id' => $this->diklat->id,
            'user_id' => auth()->user()->id,
        ]);

        $this->resetInputFields();
    }
}
