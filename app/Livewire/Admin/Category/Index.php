<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public $nama, $image, $category_id, $searchCategory, $selectedCategoryId, $imageprev;
    public $updateMode = false;

    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['delete'];
    public function getListeners()
    {
        return ['delete'];
    }

    public function resetPage()
    {
        $this->gotoPage(1, 'categoryPages');
    }
    public function render()
    {
        $searchCategory = '%' . $this->searchCategory . '%';
        return view('livewire.admin.category.index', [
            'categories' => Category::where('nama', 'LIKE', $searchCategory)
                ->orderBy('id', 'DESC')
                ->paginate(10, ['*'], 'categoryPages'),
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

        $validatedDate['image'] = $this->image->store('files', 'public');

        Category::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama),
            'image' => $validatedDate['image'],
        ]);

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->category_id = $id;
        $this->nama = $category->nama;
        $this->imageprev = $category->image;
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
            $category = Category::find($this->category_id);
            $category->update([
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama),
                'image' => $validatedDate['image'],
            ]);
            Storage::disk('public')->delete($this->imageprev);
        } else {
            $category = Category::find($this->category_id);
            $category->update([
                'nama' => $this->nama,
                'slug' => Str::slug($this->nama),
            ]);
        }

        $this->updateMode = false;
        $this->resetInputFields();
    }

    // public function updateStatus($id)
    // {
    //     $category = Category::find($id);
    //     $category->status = $category->status == 1 ? 0 : 1;
    //     $category->save();
    // }

    public function ondel($id)
    {
        $this->selectedCategoryId = $id;
    }

    public function delete()
    {
        $category = Category::find($this->selectedCategoryId);

        if ($category) {
            Storage::disk('public')->delete($category->image);
            $category->delete();
        } else {
        }
    }
}
