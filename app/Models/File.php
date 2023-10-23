<?php

namespace App\Models;

use App\Models\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
