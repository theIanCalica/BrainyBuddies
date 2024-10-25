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
        $subjects = DB::table('subjects')->pluck('id', 'name');
        $levels = DB::table('levels')->pluck('id', 'name');

        // Sample questions and their corresponding answers
        $questions = [
            // Number Recognition - Easy (5 questions)
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Easy'], 'text' => 'Which number is shown in the picture?', 'correct_answer' => '2'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Easy'], 'text' => 'Identify the number 5 in the group.', 'correct_answer' => '5'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Easy'], 'text' => 'What number is this?', 'correct_answer' => '3'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Easy'], 'text' => 'Point to the number 7 in the image.', 'correct_answer' => '7'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Easy'], 'text' => 'What number comes after 3?', 'correct_answer' => '4'],

            // Number Recognition - Medium (5 questions)
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Medium'], 'text' => 'Identify the number that comes after 7.', 'correct_answer' => '8'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Medium'], 'text' => 'What is the number before 10?', 'correct_answer' => '9'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Medium'], 'text' => 'Identify the number between 4 and 6.', 'correct_answer' => '5'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Medium'], 'text' => 'What number is missing in this sequence: 5, __, 7, 8?', 'correct_answer' => '6'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Medium'], 'text' => 'Which of these numbers is the largest?', 'correct_answer' => '9'],

            // Number Recognition - Hard (5 questions)
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Hard'], 'text' => 'Identify the missing number: 12, __, 14, 15.', 'correct_answer' => '13'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What number is shown as XXIV in Roman numerals?', 'correct_answer' => '24'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What is the square of 5?', 'correct_answer' => '25'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Hard'], 'text' => 'Identify the number in this pattern: 2, 4, 8, 16, __.', 'correct_answer' => '32'],
            ['subject_id' => $subjects['Number Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What number is this? 10?', 'correct_answer' => '10'],

            // Basic Addition - Easy (5 questions)
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Easy'], 'text' => 'What is 1 + 1?', 'correct_answer' => '2'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Easy'], 'text' => 'How much is 2 + 3?', 'correct_answer' => '5'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Easy'], 'text' => 'What do you get when you add 4 and 2?', 'correct_answer' => '6'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Easy'], 'text' => 'If you have 5 apples and add 1 more, how many apples do you have?', 'correct_answer' => '6'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Easy'], 'text' => 'What is 3 + 3?', 'correct_answer' => '6'],

            // Basic Addition - Medium (5 questions)
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Medium'], 'text' => 'What is 7 + 5?', 'correct_answer' => '12'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Medium'], 'text' => 'How much is 6 + 8?', 'correct_answer' => '14'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Medium'], 'text' => 'If you add 9 and 4, what do you get?', 'correct_answer' => '13'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Medium'], 'text' => 'What is 10 + 10?', 'correct_answer' => '20'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Medium'], 'text' => 'How much is 12 + 3?', 'correct_answer' => '15'],

            // Basic Addition - Hard (5 questions)
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Hard'], 'text' => 'What is 15 + 15?', 'correct_answer' => '30'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Hard'], 'text' => 'How much is 20 + 30?', 'correct_answer' => '50'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Hard'], 'text' => 'If you add 25 and 37, what do you get?', 'correct_answer' => '62'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Hard'], 'text' => 'What is the sum of 100 + 200?', 'correct_answer' => '300'],
            ['subject_id' => $subjects['Basic Addition'], 'level_id' => $levels['Hard'], 'text' => 'What is 45 + 55?', 'correct_answer' => '100'],

            // Basic Subtraction - Easy (5 questions)
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Easy'], 'text' => 'What is 3 - 1?', 'correct_answer' => '2'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Easy'], 'text' => 'If you have 5 apples and give away 2, how many are left?', 'correct_answer' => '3'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Easy'], 'text' => 'What do you get when you subtract 2 from 4?', 'correct_answer' => '2'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Easy'], 'text' => 'How much is 7 - 3?', 'correct_answer' => '4'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Easy'], 'text' => 'What is 10 - 5?', 'correct_answer' => '5'],

            // Basic Subtraction - Medium (5 questions)
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Medium'], 'text' => 'What is 15 - 6?', 'correct_answer' => '9'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Medium'], 'text' => 'How much is 20 - 9?', 'correct_answer' => '11'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Medium'], 'text' => 'If you have 30 and spend 12, how much do you have left?', 'correct_answer' => '18'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Medium'], 'text' => 'What is the result of 25 - 10?', 'correct_answer' => '15'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Medium'], 'text' => 'What do you get when you subtract 5 from 22?', 'correct_answer' => '17'],

            // Basic Subtraction - Hard (5 questions)
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Hard'], 'text' => 'What is 100 - 45?', 'correct_answer' => '55'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Hard'], 'text' => 'How much is 200 - 150?', 'correct_answer' => '50'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Hard'], 'text' => 'If you subtract 77 from 100, what do you get?', 'correct_answer' => '23'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Hard'], 'text' => 'What is the result of 300 - 150?', 'correct_answer' => '150'],
            ['subject_id' => $subjects['Basic Subtraction'], 'level_id' => $levels['Hard'], 'text' => 'What is 500 - 250?', 'correct_answer' => '250'],

            // Shape Recognition - Easy (5 questions)
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Easy'], 'text' => 'What shape has three sides?', 'correct_answer' => 'Triangle'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Easy'], 'text' => 'What do you call a shape with four equal sides?', 'correct_answer' => 'Square'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Easy'], 'text' => 'Which shape is round?', 'correct_answer' => 'Circle'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Easy'], 'text' => 'What shape has five sides?', 'correct_answer' => 'Pentagon'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Easy'], 'text' => 'Which shape looks like a box?', 'correct_answer' => 'Cube'],

            // Shape Recognition - Medium (5 questions)
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Medium'], 'text' => 'What do you call a shape with six sides?', 'correct_answer' => 'Hexagon'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Medium'], 'text' => 'Which shape has opposite sides that are equal?', 'correct_answer' => 'Rectangle'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Medium'], 'text' => 'What do you call a shape that has only one curved surface?', 'correct_answer' => 'Cylinder'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Medium'], 'text' => 'Which shape has no corners?', 'correct_answer' => 'Circle'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Medium'], 'text' => 'What shape has eight sides?', 'correct_answer' => 'Octagon'],

            // Shape Recognition - Hard (5 questions)
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What do you call a shape that has no corners or edges?', 'correct_answer' => 'Circle'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Hard'], 'text' => 'Identify a shape that is formed by two parallel lines.', 'correct_answer' => 'Trapezoid'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What shape is created by connecting four points that are not all in a straight line?', 'correct_answer' => 'Quadrilateral'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What do you call a 3D shape with a circular base?', 'correct_answer' => 'Cone'],
            ['subject_id' => $subjects['Shape Recognition'], 'level_id' => $levels['Hard'], 'text' => 'What is a solid shape that has a circular base and a specific height?', 'correct_answer' => 'Cylinder'],
        ];

        foreach ($questions as $question) {
            // Insert the question
            $id = DB::table('questions')->insertGetId([
                'subject_id' => $question['subject_id'],
                'level_id' => $question['level_id'],
                'text' => $question['text'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert the corresponding answer and mark it as correct
            DB::table('answers')->insert([
                'question_id' => $id,
                'text' => $question['correct_answer'],
                'is_correct' => true, // Mark this as the correct answer
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Optionally, you can add incorrect answers if needed
            $incorrect_answers = [
                '1',
                '3',
                '4',
                '5',
                '6',
                '7',
                '8',
                '9',
                '10', // Numbers
                'Triangle',
                'Square',
                'Rectangle', // Shapes
                'Octagon',
                'Hexagon',
                'Pentagon', // Shapes
                // Add more incorrect answers as needed
            ];

            foreach ($incorrect_answers as $incorrect_answer) {
                DB::table('answers')->insert([
                    'question_id' => $id,
                    'text' => $incorrect_answer,
                    'is_correct' => false, // Mark these as incorrect
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
