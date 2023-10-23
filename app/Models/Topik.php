<?php

namespace App\Models;

use App\Models\Diklat;
use App\Models\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topik extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function diklat()
    {
        return $this->belongsTo(Diklat::class);
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
