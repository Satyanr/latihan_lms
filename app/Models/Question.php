<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function answers()
    {
        return $this->hasMany(QuestionAnswer::class);
    }

    public function correct()
    {
        return $this->hasOne(QuestionAnswer::class, 'questions_id')->where('answer', 'answer');
    }

    public function wrong()
    {
        return $this->hasOne(QuestionAnswer::class, 'questions_id')->where('answer', '!=', 'answer');
    }
}
