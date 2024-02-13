<?php

namespace App\Livewire\Main\Diklat\Content;

use App\Models\Quiz;
use Livewire\Component;
use App\Models\QuestionAnswer;

class QuestionsMain extends Component
{
    public $questions, $quizz_id, $sisa_waktu;
    public $answers = [];

    public function mount($questions)
    {
        $this->questions = $questions;
        $this->answers = array_fill(0, count($questions), null);
    }
    public function render()
    {
        $quiz = Quiz::find($this->quizz_id);
        return view('livewire.main.diklat.content.questions-main', [
            'quiz' => $quiz,
        ]);
    }

    public function storeAnswers()
    {
        dd($this->sisa_waktu);
        foreach ($this->questions as $index => $question) {
            QuestionAnswer::create([
                'questions_id' => $question->id,
                'users_id' => auth()->user()->id,
                'quizzes_id' => $this->quizz_id,
                // 'sisa_waktu' => $this->sisa_waktu,
                'answer' => $this->answers[$index],
            ]);
        }
        $this->answers = array_fill(0, count($this->questions), null);
    }
}
