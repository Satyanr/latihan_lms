<?php

namespace App\Livewire\Admin\Content\Topik\Content;

use App\Models\Quiz;
use App\Models\Content;
use Livewire\Component;
use App\Models\Question;
use App\Models\QuestionLinkQuiz;

class QuizzContent extends Component
{
    public $topik, $nama, $deskripsi, $question, $option1, $option2, $option3, $option4, $answer;
    public $questionmode = false,
        $updateMode = false;
    public $selectedquiz;
    public function render()
    {
        $questions = QuestionLinkQuiz::where('quizzes_id', $this->selectedquiz)->get();
        return view('livewire.admin.content.topik.content.quizz-content', compact('questions'));
    }

    public function resetInput()
    {
        $this->question = null;
        $this->option1 = null;
        $this->option2 = null;
        $this->option3 = null;
        $this->option4 = null;
        $this->answer = null;
    }

    public function cancel()
    {
        $this->resetInput();
    }
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $content = Content::create([
            'topik_id' => $this->topik->id,
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'type' => 'kuis',
        ]);

        $quiz = Quiz::create([
            'nama' => $this->nama,
            'content_id' => $content->id,
        ]);

        $this->selectedquiz = $quiz->id;
        $this->questionmode = true;
    }

    public function questionadd()
    {
        $this->validate([
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'answer' => 'required',
        ]);

        if($this->answer=='option1')
        {
            $questionid = Question::create([
                'question' => $this->question,
                'option_1' => $this->option1,
                'option_2' => $this->option2,
                'option_3' => $this->option3,
                'option_4' => $this->option4,
                'answer' => $this->option1,
            ]);
        }elseif($this->answer=='option2')
        {
            $questionid = Question::create([
                'question' => $this->question,
                'option_1' => $this->option1,
                'option_2' => $this->option2,
                'option_3' => $this->option3,
                'option_4' => $this->option4,
                'answer' => $this->option2,
            ]);
        }elseif($this->answer=='option3')
        {
            $questionid = Question::create([
                'question' => $this->question,
                'option_1' => $this->option1,
                'option_2' => $this->option2,
                'option_3' => $this->option3,
                'option_4' => $this->option4,
                'answer' => $this->option3,
            ]);
        }elseif($this->answer=='option4')
        {
            $questionid = Question::create([
                'question' => $this->question,
                'option_1' => $this->option1,
                'option_2' => $this->option2,
                'option_3' => $this->option3,
                'option_4' => $this->option4,
                'answer' => $this->option4,
            ]);
        }

        QuestionLinkQuiz::create([
            'quizzes_id' => $this->selectedquiz,
            'questions_id' => $questionid->id,
        ]);

        $this->resetInput();
    }
}
