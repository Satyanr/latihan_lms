<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionLinkQuiz extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function quiz()
    {
        return $this->hasMany(Quiz::class, 'id', 'quizzes_id');
    }

    public function question()
    {
        return $this->hasMany(Question::class, 'id', 'questions_id');
    }
}
