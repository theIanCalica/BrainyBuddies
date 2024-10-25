<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function startAddEasy()
    {
        $questions = Question::where([
            ['subject_id', '=', 2],
            ['level_id', '=', 1],
        ])->get();
    }

    public function startAddMedium()
    {
        $questions = Question::where([
            ['subject_id', '=', 2],
            ['level_id', '=', 2],
        ])->get();
    }

    public function startAddHard()
    {
        $questions = Question::where([
            ['subject_id', '=', 2],
            ['level_id', '=', 3],
        ])->get();
    }

    public function startSubtractEasy()
    {
        $questions = Question::where([
            ['subject_id', '=', 3],
            ['level_id', '=', 1],
        ])->get();
    }

    public function startSubtractMedium()
    {
        $questions = Question::where([
            ['subject_id', '=', 3],
            ['level_id', '=', 1],
        ])->get();
    }

    public function startSubtractHard()
    {
        $questions = Question::where([
            ['subject_id', '=', 3],
            ['level_id', '=', 1],
        ])->get();
    }
}
