<?php

namespace App\Livewire\Main\Diklat\Content;

use Livewire\Component;

class Index extends Component
{
    public $content_id;
    public function render()
    {
        $content = \App\Models\Content::find($this->content_id);
        $quizs = \App\Models\Quiz::where('content_id', $this->content_id)->first();
        $videos = \App\Models\Video::where('content_id', $this->content_id)->get();
        $bahanbacaans = \App\Models\File::where('content_id', $this->content_id)->get();

        if ($quizs) {
            $asklink = \App\Models\QuestionLinkQuiz::where('quizzes_id', $quizs->id)->get();
            $questions = collect();

            if ($asklink->count() > 0) {
                $questionIds = $asklink->pluck('questions_id'); // Get the IDs of linked questions
                $questions = \App\Models\Question::whereIn('id', $questionIds)->get(); // Retrieve the linked questions
            } else {
                $questions = [];
            }
            return view('livewire.main.diklat.content.index', [
                'content' => $content,
                'quizs' => $quizs,
                'videos' => $videos,
                'bahanbacaans' => $bahanbacaans,
                'questions' => $questions,
            ]);
        } else {
            return view('livewire.main.diklat.content.index', [
                'content' => $content,
                'quizs' => $quizs,
                'videos' => $videos,
                'bahanbacaans' => $bahanbacaans,
            ]);
        }
    }
}
