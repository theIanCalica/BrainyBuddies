@extends('Layout.app')

@section('content')
    <div class="container mt-4">
        <h2>Basic Addition Quiz</h2>
        <div id="quiz-container">
            <div id="question-container">
                <h4 id="question"></h4>
                <div id="options" class="mb-3 d-flex flex-column align-items-center"></div>
                <button id="next-button" class="btn btn-primary" style="display: none;">Next Question</button>
            </div>
            <div id="result-container" style="display: none;">
                <h4>Your Score: <span id="score"></span>/5</h4>
                <button id="restart-button" class="btn btn-success">Restart Quiz</button>
            </div>
        </div>
    </div>

    <style>
        /* Custom styles for the option buttons */
        .option-button {
            width: 100%;
            /* Full width */
            height: 80px;
            /* Height of the button */
            font-size: 24px;
            /* Font size */
            margin: 10px 0;
            /* Margin between buttons */
            border-radius: 10px;
            /* Rounded corners */
            border: 2px solid #007bff;
            /* Border color */
            background-color: #f8f9fa;
            /* Background color */
            transition: background-color 0.3s, transform 0.3s;
            /* Smooth transition for hover effects */
        }

        .option-button:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }
    </style>

    <script>
        const questions = [{
                question: "What is 2 + 3?",
                options: [4, 5, 6, 7],
                answer: 5
            },
            {
                question: "What is 4 + 1?",
                options: [5, 6, 3, 4],
                answer: 5
            },
            {
                question: "What is 7 + 2?",
                options: [8, 9, 10, 11],
                answer: 9
            },
            {
                question: "What is 5 + 5?",
                options: [10, 9, 11, 12],
                answer: 10
            },
            {
                question: "What is 3 + 4?",
                options: [6, 7, 8, 9],
                answer: 7
            }
        ];

        let currentQuestionIndex = 0;
        let score = 0;

        function loadQuestion() {
            const currentQuestion = questions[currentQuestionIndex];
            document.getElementById('question').innerText = currentQuestion.question;

            const optionsContainer = document.getElementById('options');
            optionsContainer.innerHTML = ''; // Clear previous options

            currentQuestion.options.forEach(option => {
                const button = document.createElement('button');
                button.innerText = option;
                button.className = 'option-button'; // Apply the new class for styles
                button.onclick = () => selectAnswer(option);
                optionsContainer.appendChild(button);
            });

            document.getElementById('next-button').style.display = 'none'; // Hide the next button
        }

        function selectAnswer(selectedOption) {
            const currentQuestion = questions[currentQuestionIndex];
            if (selectedOption === currentQuestion.answer) {
                score++;
                Swal.fire({
                    icon: 'success',
                    title: 'Correct!',
                    text: 'Good job! Your answer is correct.',
                }).then(() => {
                    currentQuestionIndex++;
                    if (currentQuestionIndex < questions.length) {
                        loadQuestion();
                    } else {
                        showResults();
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Wrong!',
                    text: 'The correct answer is ' + currentQuestion.answer,
                }).then(() => {
                    currentQuestionIndex++;
                    if (currentQuestionIndex < questions.length) {
                        loadQuestion();
                    } else {
                        showResults();
                    }
                });
            }
        }

        function showResults() {
            document.getElementById('quiz-container').style.display = 'none';
            document.getElementById('result-container').style.display = 'block';
            document.getElementById('score').innerText = score;
        }

        document.getElementById('restart-button').onclick = () => {
            currentQuestionIndex = 0;
            score = 0;
            document.getElementById('quiz-container').style.display = 'block';
            document.getElementById('result-container').style.display = 'none';
            loadQuestion();
        };

        // Load the first question
        loadQuestion();
    </script>
@endsection
