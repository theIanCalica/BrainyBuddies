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

    public function basicAdditionQuiz($difficulty)
    {
        // Find the subject for Basic Addition
        $subject = Subject::where('name', 'Basic Addition')->first();

        if (!$subject) {
            abort(404, 'Subject not found');
        }

        // Fetch questions based on the chosen difficulty
        $questions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) use ($difficulty) {
                $query->where('name', $difficulty);
            })->get();

        if ($questions->isEmpty()) {
            abort(404, 'No questions found for this difficulty level');
        }

        // Pass both questions and difficulty to the view
        return view('test', compact('questions', 'difficulty'));
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

    public function basicSubtractionQuiz($difficulty)
    {
        $subject = Subject::where('name', 'Basic Subtraction')->first();

        if (!$subject) {
            abort(404, 'Subject not found');
        }

        // Fetch questions based on the chosen difficulty
        $questions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) use ($difficulty) {
                $query->where('name', $difficulty);
            })->get();

        if ($questions->isEmpty()) {
            abort(404, 'No questions found for this difficulty level');
        }

        // Pass both questions and difficulty to the view
        return view('test', compact('questions', 'difficulty'));
    }

    // New methods for Basic Multiplication
    public function basicMultiplication()
    {
        $subject = Subject::where('name', 'Basic Multiplication')->first();

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

        return view('basicMultiplication', compact('easyCount', 'mediumCount', 'hardCount'));
    }

    public function basicMultiplicationQuiz($difficulty)
    {
        // Find the subject for Basic Multiplication
        $subject = Subject::where('name', 'Basic Multiplication')->first();

        if (!$subject) {
            abort(404, 'Subject not found');
        }

        // Fetch questions based on the chosen difficulty
        $questions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) use ($difficulty) {
                $query->where('name', $difficulty);
            })->get();

        if ($questions->isEmpty()) {
            abort(404, 'No questions found for this difficulty level');
        }

        // Pass both questions and difficulty to the view
        return view('test', compact('questions', 'difficulty'));
    }

    // New methods for Basic Division
    public function basicDivision()
    {
        $subject = Subject::where('name', 'Basic Division')->first();

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

        return view('basicDivision', compact('easyCount', 'mediumCount', 'hardCount'));
    }

    public function basicDivisionQuiz($difficulty)
    {
        // Find the subject for Basic Division
        $subject = Subject::where('name', 'Basic Division')->first();

        if (!$subject) {
            abort(404, 'Subject not found');
        }

        // Fetch questions based on the chosen difficulty
        $questions = Question::where('subject_id', $subject->id)
            ->whereHas('level', function ($query) use ($difficulty) {
                $query->where('name', $difficulty);
            })->get();

        if ($questions->isEmpty()) {
            abort(404, 'No questions found for this difficulty level');
        }

        // Pass both questions and difficulty to the view
        return view('test', compact('questions', 'difficulty'));
    }
}
