<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function question()
    {
        return $this->hasMany(QuestionLinkQuiz::class, 'quizzes_id', 'id');
    }
}
