<?php

namespace App\Models;

use App\Models\User;
use App\Models\Content;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentLink extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
