<?php

namespace App\Livewire\Admin\Content\Topik\Content;

use App\Models\Content;
use App\Models\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class BahanBacaan extends Component
{
    public $nama, $content_id, $topik, $deskripsi, $file;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.content.topik.content.bahan-bacaan');
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->content_id = null;
        $this->deskripsi = null;
        $this->file = null;
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'file' => 'required|mimes:pdf',
            'deskripsi' => 'required',
        ]);

        $content = Content::create([
            'nama' => $this->nama,
            'type' => 'bacaan',
            'deskripsi' => $this->deskripsi,
            'topik_id' => $this->topik->id,
        ]);

        $file = $this->file;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('pdf', $fileName, 'public');

        File::create([
            'nama' => $this->nama,
            'path' => $filePath,
            'content_id' => $content->id,
        ]);
        $this->resetInput();
        return redirect()->route('admin.diklat.content', $this->topik->diklat_id);
    }
}
