<?php

namespace App\Livewire\Admin\Content\Topik;

use App\Models\File;
use App\Models\Video;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Content extends Component
{
    public $topik;
    public function render()
    {
        $contents = \App\Models\Content::where('topik_id', $this->topik->id)->get();
        return view('livewire.admin.content.topik.content', compact('contents'));
    }

    public function delete($id)
    {
        $content = \App\Models\Content::find($id);

        if ($content) {
            if ($content->type == 'bacaan') {
                $file = File::where('content_id', $id)->first();
                Storage::delete($file->path);
                $file->delete();
            } elseif ($content->type == 'video') {
                $video = Video::where('content_id', $id)->first();
                if ($content->video->path) {
                    unlink(public_path($content->video->path));
                    $video->delete();
                } else {
                    $video->delete();
                }
            }
            $content->delete();
        } else {
        }
    }
}
