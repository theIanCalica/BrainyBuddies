<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use App\Models\Level;

class QuestionController extends Controller
{
    public function basicAddition()
    {
        $subject = Subject::where('name', 'Basic Addition')->first();

        // Fetch the number of questions for each level
        $easyCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'easy');
            })->count();

        $mediumCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'medium');
            })->count();

        $hardCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'hard');
            })->count();

        return view('basicAddition', compact('easyCount', 'mediumCount', 'hardCount'));
    }

    public function getEasyAdditionQuestions()
    {
        // Find the subject for Basic Addition
        $subject = Subject::where('name', 'Basic Addition')->first();

        // Fetch all easy questions for the Basic Addition subject
        $easyQuestions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'easy');
            })->get();

        dd($easyQuestions);
        // Return a view or JSON response with the questions
        // return view('easyAdditionQuestions', compact('easyQuestions'));
    }

    public function getMediumAdditionQuestions()
    {
        // Find the subject for Basic Addition
        $subject = Subject::where('name', 'Basic Addition')->first();

        // Fetch all medium questions for the Basic Addition subject
        $easyQuestions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'medium');
            })->get();
    }

    public function getHardAdditionQuestions()
    {
        // Find the subject for Basic Addition
        $subject = Subject::where('name', 'Basic Addition')->first();

        // Fetch all hard questions for the Basic Addition subject
        $easyQuestions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'hard');
            })->get();
    }

    public function basicSubtraction()
    {
        $subject = Subject::where("name", "Basic Subtraction")->first();

        // Fetch the number of questions for each level
        $easyCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'easy');
            })->count();

        $mediumCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'medium');
            })->count();

        $hardCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'hard');
            })->count();

        return view("basicSubtraction", compact("easyCount", "mediumCount", "hardCount"));
    }

    public function numberRecognition()
    {
        $subject = Subject::where("name", "Number Recognition")->first();


        // Fetch the number of questions for each level
        $easyCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'easy');
            })->count();

        $mediumCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'medium');
            })->count();

        $hardCount = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) {
                $query->where('name', 'hard');
            })->count();

        return view("numberRecognition", compact("easyCount", "mediumCount", "hardCount"));
    }
}
