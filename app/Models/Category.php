<?php

namespace App\Models;

use App\Models\Diklat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function diklats()
    {
        return $this->hasMany(DiklatCatLink::class,'category_id','id');
    }
}
