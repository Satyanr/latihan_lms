<?php

namespace App\Livewire\Main\Diklat;

use Livewire\Component;

class Content extends Component
{
    public $topik_id;
    public function render()
    {
        $contents = \App\Models\Content::where('topik_id', $this->topik_id)->get();
        return view('livewire.main.diklat.content', [
            'contents' => $contents,
        ]);
    }
}
