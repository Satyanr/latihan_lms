<?php

namespace App\Livewire\Main\Diklat\Content;

use Livewire\Component;
use App\Models\QuestionAnswer;

class QuestionsMain extends Component
{
    public $questions, $quizz_id;
    public $answers = [];

    public function mount($questions)
    {
        $this->questions = $questions;
        $this->answers = array_fill(0, count($questions), null);
    }
    public function render()
    {
        return view('livewire.main.diklat.content.questions-main');
    }

    public function storeAnswers()
    {
        foreach ($this->questions as $index => $question) {
            QuestionAnswer::create([
                'questions_id' => $question->id,
                'users_id' => auth()->user()->id,
                'quizzes_id' => $this->quizz_id,
                'answer' => $this->answers[$index],
            ]);
        }

        $this->answers = array_fill(0, count($this->questions), null);
    }
}
