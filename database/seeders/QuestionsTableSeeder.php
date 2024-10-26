<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch subjects and levels
        $subjects = DB::table('subjects')->pluck('id', 'name');
        $levels = DB::table('levels')->pluck('id', 'name');

        // Sample questions and their corresponding answers
        $questions = [
            // Basic Addition - Easy (5 questions)
            ['subject' => 'Basic Addition', 'level' => 'Easy', 'text' => 'What is 1 + 1?', 'correct_answer' => '2'],
            ['subject' => 'Basic Addition', 'level' => 'Easy', 'text' => 'How much is 2 + 3?', 'correct_answer' => '5'],
            ['subject' => 'Basic Addition', 'level' => 'Easy', 'text' => 'What do you get when you add 4 and 2?', 'correct_answer' => '6'],
            ['subject' => 'Basic Addition', 'level' => 'Easy', 'text' => 'If you have 5 apples and add 1 more, how many apples do you have?', 'correct_answer' => '6'],
            ['subject' => 'Basic Addition', 'level' => 'Easy', 'text' => 'What is 3 + 3?', 'correct_answer' => '6'],

            // Basic Addition - Medium (5 questions)
            ['subject' => 'Basic Addition', 'level' => 'Medium', 'text' => 'What is 7 + 5?', 'correct_answer' => '12'],
            ['subject' => 'Basic Addition', 'level' => 'Medium', 'text' => 'How much is 6 + 8?', 'correct_answer' => '14'],
            ['subject' => 'Basic Addition', 'level' => 'Medium', 'text' => 'If you add 9 and 4, what do you get?', 'correct_answer' => '13'],
            ['subject' => 'Basic Addition', 'level' => 'Medium', 'text' => 'What is 10 + 10?', 'correct_answer' => '20'],
            ['subject' => 'Basic Addition', 'level' => 'Medium', 'text' => 'How much is 12 + 3?', 'correct_answer' => '15'],

            // Basic Addition - Hard (5 questions)
            ['subject' => 'Basic Addition', 'level' => 'Hard', 'text' => 'What is 15 + 15?', 'correct_answer' => '30'],
            ['subject' => 'Basic Addition', 'level' => 'Hard', 'text' => 'How much is 20 + 30?', 'correct_answer' => '50'],
            ['subject' => 'Basic Addition', 'level' => 'Hard', 'text' => 'If you add 25 and 37, what do you get?', 'correct_answer' => '62'],
            ['subject' => 'Basic Addition', 'level' => 'Hard', 'text' => 'What is the sum of 100 + 200?', 'correct_answer' => '300'],
            ['subject' => 'Basic Addition', 'level' => 'Hard', 'text' => 'What is 45 + 55?', 'correct_answer' => '100'],

            // Basic Subtraction - Easy (5 questions)
            ['subject' => 'Basic Subtraction', 'level' => 'Easy', 'text' => 'What is 3 - 1?', 'correct_answer' => '2'],
            ['subject' => 'Basic Subtraction', 'level' => 'Easy', 'text' => 'If you have 5 apples and give away 2, how many are left?', 'correct_answer' => '3'],
            ['subject' => 'Basic Subtraction', 'level' => 'Easy', 'text' => 'What do you get when you subtract 2 from 4?', 'correct_answer' => '2'],
            ['subject' => 'Basic Subtraction', 'level' => 'Easy', 'text' => 'How much is 7 - 3?', 'correct_answer' => '4'],
            ['subject' => 'Basic Subtraction', 'level' => 'Easy', 'text' => 'What is 10 - 5?', 'correct_answer' => '5'],

            // Basic Subtraction - Medium (5 questions)
            ['subject' => 'Basic Subtraction', 'level' => 'Medium', 'text' => 'What is 15 - 6?', 'correct_answer' => '9'],
            ['subject' => 'Basic Subtraction', 'level' => 'Medium', 'text' => 'How much is 20 - 9?', 'correct_answer' => '11'],
            ['subject' => 'Basic Subtraction', 'level' => 'Medium', 'text' => 'If you have 30 and spend 12, how much do you have left?', 'correct_answer' => '18'],
            ['subject' => 'Basic Subtraction', 'level' => 'Medium', 'text' => 'What is the result of 25 - 10?', 'correct_answer' => '15'],
            ['subject' => 'Basic Subtraction', 'level' => 'Medium', 'text' => 'What do you get when you subtract 5 from 22?', 'correct_answer' => '17'],

            // Basic Subtraction - Hard (5 questions)
            ['subject' => 'Basic Subtraction', 'level' => 'Hard', 'text' => 'What is 100 - 45?', 'correct_answer' => '55'],
            ['subject' => 'Basic Subtraction', 'level' => 'Hard', 'text' => 'How much is 200 - 150?', 'correct_answer' => '50'],
            ['subject' => 'Basic Subtraction', 'level' => 'Hard', 'text' => 'If you subtract 77 from 100, what do you get?', 'correct_answer' => '23'],
            ['subject' => 'Basic Subtraction', 'level' => 'Hard', 'text' => 'What is the result of 500 - 275?', 'correct_answer' => '225'],
            ['subject' => 'Basic Subtraction', 'level' => 'Hard', 'text' => 'How much is 75 - 25?', 'correct_answer' => '50'],
        ];

        foreach ($questions as $question) {
            // Insert the question using the mapped IDs
            $id = DB::table('questions')->insertGetId([
                'subject_id' => $subjects[$question['subject']],
                'level_id' => $levels[$question['level']],
                'text' => $question['text'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert the correct answer
            DB::table('answers')->insert([
                'question_id' => $id,
                'text' => $question['correct_answer'],
                'is_correct' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert incorrect answers
            $incorrect_answers = $this->getIncorrectAnswers($question['correct_answer']);
            foreach ($incorrect_answers as $incorrect_answer) {
                DB::table('answers')->insert([
                    'question_id' => $id,
                    'text' => $incorrect_answer,
                    'is_correct' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function getIncorrectAnswers($correct_answer)
    {
        // Provide a list of incorrect answers based on the type of question
        $incorrect_answers = [
            '1' => ['0', '3', '4', '5'],
            '2' => ['1', '3', '4', '6'],
            '3' => ['1', '2', '4', '5'],
            '4' => ['3', '5', '6', '7'],
            '5' => ['2', '6', '7', '8'],
            '6' => ['4', '5', '7', '8'],
            '7' => ['5', '6', '8', '9'],
            '8' => ['6', '7', '9', '10'],
            '9' => ['7', '8', '10', '11'],
            '10' => ['8', '9', '11', '12'],
            '11' => ['9', '10', '12', '13'],
            '12' => ['10', '11', '13', '14'],
            '13' => ['11', '12', '14', '15'],
            '14' => ['12', '13', '15', '16'],
            '15' => ['13', '14', '16', '17'],
            '16' => ['14', '15', '17', '18'],
            '17' => ['15', '16', '18', '19'],
            '18' => ['16', '17', '19', '20'],
            '19' => ['17', '18', '20', '21'],
            '20' => ['18', '19', '21', '22'],
            '21' => ['19', '20', '22', '23'],
            '22' => ['20', '21', '23', '24'],
            '23' => ['21', '22', '24', '25'],
            '24' => ['22', '23', '25', '26'],
            '25' => ['23', '24', '26', '27'],
            '26' => ['24', '25', '27', '28'],
            '27' => ['25', '26', '28', '29'],
            '28' => ['26', '27', '29', '30'],
            '29' => ['27', '28', '30', '31'],
            '30' => ['28', '29', '31', '32'],
            // Add more mappings as necessary
        ];

        // Ensure there are enough incorrect answers
        return $incorrect_answers[$correct_answer] ?? [];
    }
}
