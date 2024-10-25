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
            // Number Recognition - Easy (5 questions)
            ['subject' => 'Number Recognition', 'level' => 'Easy', 'text' => 'Which number is shown in the picture?', 'correct_answer' => '2'],
            ['subject' => 'Number Recognition', 'level' => 'Easy', 'text' => 'Identify the number 5 in the group.', 'correct_answer' => '5'],
            ['subject' => 'Number Recognition', 'level' => 'Easy', 'text' => 'What number is this?', 'correct_answer' => '3'],
            ['subject' => 'Number Recognition', 'level' => 'Easy', 'text' => 'Point to the number 7 in the image.', 'correct_answer' => '7'],
            ['subject' => 'Number Recognition', 'level' => 'Easy', 'text' => 'What number comes after 3?', 'correct_answer' => '4'],

            // Number Recognition - Medium (5 questions)
            ['subject' => 'Number Recognition', 'level' => 'Medium', 'text' => 'Identify the number that comes after 7.', 'correct_answer' => '8'],
            ['subject' => 'Number Recognition', 'level' => 'Medium', 'text' => 'What is the number before 10?', 'correct_answer' => '9'],
            ['subject' => 'Number Recognition', 'level' => 'Medium', 'text' => 'Identify the number between 4 and 6.', 'correct_answer' => '5'],
            ['subject' => 'Number Recognition', 'level' => 'Medium', 'text' => 'What number is missing in this sequence: 5, __, 7, 8?', 'correct_answer' => '6'],
            ['subject' => 'Number Recognition', 'level' => 'Medium', 'text' => 'Which of these numbers is the largest?', 'correct_answer' => '9'],

            // Number Recognition - Hard (5 questions)
            ['subject' => 'Number Recognition', 'level' => 'Hard', 'text' => 'Identify the missing number: 12, __, 14, 15.', 'correct_answer' => '13'],
            ['subject' => 'Number Recognition', 'level' => 'Hard', 'text' => 'What number is shown as XXIV in Roman numerals?', 'correct_answer' => '24'],
            ['subject' => 'Number Recognition', 'level' => 'Hard', 'text' => 'What is the square of 5?', 'correct_answer' => '25'],
            ['subject' => 'Number Recognition', 'level' => 'Hard', 'text' => 'Identify the number in this pattern: 2, 4, 8, 16, __.', 'correct_answer' => '32'],
            ['subject' => 'Number Recognition', 'level' => 'Hard', 'text' => 'What number is this? 10?', 'correct_answer' => '10'],

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

            // Insert incorrect answers (customize this part as needed)
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
        // Modify as per your requirements or database values
        $incorrect_answers = [
            '1' => ['0', '3', '4', '5'],
            '2' => ['1', '3', '4', '6'],
            '3' => ['1', '2', '4', '5'],
            // Add more incorrect answers according to the correct answers
        ];

        // Return a set of incorrect answers based on the provided correct answer
        return $incorrect_answers[$correct_answer] ?? [];
    }
}
