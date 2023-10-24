<?php

namespace App\Livewire\Admin\Diklat;

use App\Models\Diklat;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public $nama, $image, $Diklat_id, $searchDiklat, $selectedDiklatId, $imageprev, $deskripsi;
    public $updateMode = false;

    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    // protected $listeners = ['delete'];
    // public function getListeners()
    // {
    //     return ['delete'];
    // }

    public function resetPage()
    {
        $this->gotoPage(1, 'diklatPages');
    }
    public function render()
    {
        $searchDiklat = '%' . $this->searchDiklat . '%';
        return view('livewire.admin.diklat.index', [
            'diklats' => Diklat::where('nama', 'LIKE', $searchDiklat)
                ->orderBy('id', 'DESC')
                ->paginate(10, ['*'], 'diklatPages'),
        ]);
    }

    private function resetInputFields()
    {
        $this->nama = '';
        $this->image = null;
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'nama' => 'required',
        ]);

        $validatedDate['image'] = $this->image->store('diklat_img', 'public');

        Diklat::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama),
            'deskripsi'=>$this->deskripsi,
            'user_id' => auth()->user()->id,
            'image' => $validatedDate['image'],
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Diklat = Diklat::findOrFail($id);
        $this->Diklat_id = $id;
        $this->nama = $Diklat->nama;
        $this->imageprev = $Diklat->image;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nama' => 'required',
        ]);

        if ($this->image != null) {
            $validatedDate['image'] = $this->image->store('files', 'public');
            $Diklat = Diklat::find($this->Diklat_id);
            $Diklat->update([
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama),
                'image' => $validatedDate['image'],
            ]);
            Storage::disk('public')->delete($this->imageprev);
        } else {
            $Diklat = Diklat::find($this->Diklat_id);
            $Diklat->update([
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama),
            ]);
        }

        $this->updateMode = false;
        $this->resetInputFields();
    }

    // public function updateStatus($id)
    // {
    //     $Diklat = Diklat::find($id);
    //     $Diklat->status = $Diklat->status == 1 ? 0 : 1;
    //     $Diklat->save();
    // }

    // public function ondel($id)
    // {
    //     $this->selectedDiklatId = $id;
    // }

    public function delete($id)
    {
        $Diklat = Diklat::find($id);

        if ($Diklat) {
            Storage::disk('public')->delete($Diklat->image);
            $Diklat->delete();
        } else {
        }
    }
}
