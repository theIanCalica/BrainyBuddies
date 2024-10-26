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

            // Basic Multiplication - Easy (5 questions)
            ['subject' => 'Basic Multiplication', 'level' => 'Easy', 'text' => 'What is 1 x 1?', 'correct_answer' => '1'],
            ['subject' => 'Basic Multiplication', 'level' => 'Easy', 'text' => 'How much is 2 x 3?', 'correct_answer' => '6'],
            ['subject' => 'Basic Multiplication', 'level' => 'Easy', 'text' => 'What do you get when you multiply 4 and 2?', 'correct_answer' => '8'],
            ['subject' => 'Basic Multiplication', 'level' => 'Easy', 'text' => 'If you have 5 groups of 2 apples, how many apples do you have?', 'correct_answer' => '10'],
            ['subject' => 'Basic Multiplication', 'level' => 'Easy', 'text' => 'What is 3 x 3?', 'correct_answer' => '9'],

            // Basic Multiplication - Medium (5 questions)
            ['subject' => 'Basic Multiplication', 'level' => 'Medium', 'text' => 'What is 7 x 5?', 'correct_answer' => '35'],
            ['subject' => 'Basic Multiplication', 'level' => 'Medium', 'text' => 'How much is 6 x 8?', 'correct_answer' => '48'],
            ['subject' => 'Basic Multiplication', 'level' => 'Medium', 'text' => 'If you multiply 9 and 4, what do you get?', 'correct_answer' => '36'],
            ['subject' => 'Basic Multiplication', 'level' => 'Medium', 'text' => 'What is 10 x 10?', 'correct_answer' => '100'],
            ['subject' => 'Basic Multiplication', 'level' => 'Medium', 'text' => 'How much is 12 x 3?', 'correct_answer' => '36'],

            // Basic Multiplication - Hard (5 questions)
            ['subject' => 'Basic Multiplication', 'level' => 'Hard', 'text' => 'What is 15 x 15?', 'correct_answer' => '225'],
            ['subject' => 'Basic Multiplication', 'level' => 'Hard', 'text' => 'How much is 20 x 30?', 'correct_answer' => '600'],
            ['subject' => 'Basic Multiplication', 'level' => 'Hard', 'text' => 'If you multiply 25 and 37, what do you get?', 'correct_answer' => '925'],
            ['subject' => 'Basic Multiplication', 'level' => 'Hard', 'text' => 'What is the product of 100 x 200?', 'correct_answer' => '20000'],
            ['subject' => 'Basic Multiplication', 'level' => 'Hard', 'text' => 'What is 45 x 55?', 'correct_answer' => '2475'],

            // Basic Division - Easy (5 questions)
            ['subject' => 'Basic Division', 'level' => 'Easy', 'text' => 'What is 4 ÷ 2?', 'correct_answer' => '2'],
            ['subject' => 'Basic Division', 'level' => 'Easy', 'text' => 'How much is 6 ÷ 3?', 'correct_answer' => '2'],
            ['subject' => 'Basic Division', 'level' => 'Easy', 'text' => 'What do you get when you divide 8 by 4?', 'correct_answer' => '2'],
            ['subject' => 'Basic Division', 'level' => 'Easy', 'text' => 'If you have 10 apples and divide them into 5 groups, how many apples are in each group?', 'correct_answer' => '2'],
            ['subject' => 'Basic Division', 'level' => 'Easy', 'text' => 'What is 9 ÷ 3?', 'correct_answer' => '3'],

            // Basic Division - Medium (5 questions)
            ['subject' => 'Basic Division', 'level' => 'Medium', 'text' => 'What is 15 ÷ 5?', 'correct_answer' => '3'],
            ['subject' => 'Basic Division', 'level' => 'Medium', 'text' => 'How much is 20 ÷ 4?', 'correct_answer' => '5'],
            ['subject' => 'Basic Division', 'level' => 'Medium', 'text' => 'If you divide 30 by 6, what do you get?', 'correct_answer' => '5'],
            ['subject' => 'Basic Division', 'level' => 'Medium', 'text' => 'What is the result of 50 ÷ 10?', 'correct_answer' => '5'],
            ['subject' => 'Basic Division', 'level' => 'Medium', 'text' => 'What do you get when you divide 100 by 25?', 'correct_answer' => '4'],

            // Basic Division - Hard (5 questions)
            ['subject' => 'Basic Division', 'level' => 'Hard', 'text' => 'What is 100 ÷ 25?', 'correct_answer' => '4'],
            ['subject' => 'Basic Division', 'level' => 'Hard', 'text' => 'How much is 200 ÷ 50?', 'correct_answer' => '4'],
            ['subject' => 'Basic Division', 'level' => 'Hard', 'text' => 'If you divide 250 by 5, what do you get?', 'correct_answer' => '50'],
            ['subject' => 'Basic Division', 'level' => 'Hard', 'text' => 'What is the result of 500 ÷ 125?', 'correct_answer' => '4'],
            ['subject' => 'Basic Division', 'level' => 'Hard', 'text' => 'How much is 750 ÷ 150?', 'correct_answer' => '5'],
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
        // Generate some simple incorrect answers based on the correct answer
        $correct_answer = (int)$correct_answer; // Ensure it's an integer
        $incorrect_answers = [];

        // Generate incorrect answers around the correct answer
        while (count($incorrect_answers) < 3) {
            $rand = $correct_answer + rand(-3, 3); // Generate a number near the correct answer
            if ($rand != $correct_answer && !in_array($rand, $incorrect_answers)) {
                $incorrect_answers[] = $rand; // Only add if it's not the correct answer and not already in the list
            }
        }

        return $incorrect_answers;
    }
}
