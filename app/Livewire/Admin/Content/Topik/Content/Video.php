<?php

namespace App\Livewire\Admin\Content\Topik\Content;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Video extends Component
{
    public $title, $deskripsi, $video, $url, $topik;

    use WithFileUploads;
    public function render()
    {
        return view('livewire.admin.content.topik.content.video');
    }

    public function resetInput()
    {
        $this->title = null;
        $this->deskripsi = null;
        $this->video = null;
        $this->url = null;
    }

    public function uploadVideo()
    {
        $this->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'url' => 'required_if:video,null',
        ]);

        if ($this->video) {
            $filename = time() . $this->video->getClientOriginalName();
            $destinationPath = 'public/uploads';

            Storage::putFileAs($destinationPath, $this->video, $filename);

            $content = Content::create([
                'topik_id' => $this->topik->id,
                'nama' => $this->title,
                'deskripsi' => $this->deskripsi,
                'type' => 'video',
            ]);

            \App\Models\Video::create([
                'name' => $filename,
                'path' => 'storage/uploads/' . $filename,
                'content_id' => $content->id,
            ]);

            $this->resetInput();
            return redirect()->route('admin.diklat.content', $this->topik->diklat_id);
        } else {
            $url = $this->url;

            if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_\-]+)/', $url, $matches) || preg_match('/youtu\.be\/([a-zA-Z0-9_\-]+)/', $url, $matches)) {
                $videoId = $matches[1];
                $embedCode = 'https://www.youtube.com/embed/' . $videoId;
            } else {
                $embedCode = $url;
            }

            $content = Content::create([
                'topik_id' => $this->topik->id,
                'nama' => $this->title,
                'deskripsi' => $this->deskripsi,
                'type' => 'video',
            ]);

            \App\Models\Video::create([
                'name'=> $this->title,
                'url' => $embedCode,
                'content_id' => $content->id,
            ]);

            $this->resetInput();
            return redirect()->route('admin.diklat.content', $this->topik->diklat_id);
        }
    }
}
