<?php

namespace App\Models;

use App\Models\User;
use App\Models\Topik;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diklat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topik()
    {
        return $this->hasMany(Topik::class);
    }

    public function content()
    {
        return $this->hasManyThrough(Content::class, Topik::class);
    }
}
