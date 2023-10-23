<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function Topik()
    {
        return $this->belongsTo(Topik::class);
    }

    public function file()
    {
        return $this->hasMany(File::class);
    }

    public function video()
    {
        return $this->hasMany(Video::class);
    }

    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function contentlink()
    {
        return $this->hasMany(ContentLink::class);
    }
}
