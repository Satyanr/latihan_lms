<?php

namespace App\Models;

use App\Models\Diklat;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiklatCatLink extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function diklat()
    {
        return $this->belongsTo(Diklat::class);
    }
}
