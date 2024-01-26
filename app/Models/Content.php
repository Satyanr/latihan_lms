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
        return $this->hasOne(File::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }

    public function contentlink()
    {
        return $this->hasMany(ContentLink::class);
    }
}
