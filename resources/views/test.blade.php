@extends('Layout.app')

@section('styles')
    <style>
        #result-container {
            visibility: hidden;
            /* Initially hidden */
            opacity: 0;
            /* Fully transparent */
            transition: opacity 0.5s ease-in-out;
            /* Smooth fade-in */
            position: relative;
            z-index: 9999;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }



        /* Custom styles for the option buttons */
        .option-button {
            width: 100%;
            height: 50px;
            font-size: 18px;
            margin: 10px 0;
            border-radius: 10px;
            border: 2px solid #007bff;
            background-color: #f8f9fa;
            transition: background-color 0.3s, transform 0.3s;
        }

        .option-button:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }

        #question-container {
            margin-bottom: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-4">
        <h2>Basic Addition Quiz - {{ ucfirst($difficulty) }} Level</h2>
        <div id="quiz-container">
            <div id="question-container">
                @if ($questions->isEmpty())
                    <p>No questions available for this difficulty level.</p>
                @else
                    @foreach ($questions as $index => $question)
                        <div class="question-item" id="question-{{ $index }}">
                            <h4>{{ $question->text }}</h4> <!-- Adjusted to use 'text' for question -->
                            <div id="options-{{ $index }}" class="mb-3 d-flex flex-column align-items-center">
                                @foreach ($question->answers as $answer)
                                    <button class="option-button"
                                        onclick="selectAnswer({{ $answer->is_correct }}, {{ $index }}, '{{ $answer->text }}')">{{ $answer->text }}</button>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div id="result-container" style="display: none;">
                <h4>Your Score: <span id="score"></span>/5</h4>
                <div id="message"></div> <!-- Message placeholder -->
                <button id="restart-button" class="btn btn-success">Restart Quiz</button>
            </div>
            <button id="next-button" class="btn btn-primary" style="display: none;">Next Question</button>
        </div>
    </div>



    <script>
        let currentQuestionIndex = 0;
        let score = 0;
        const questions = @json($questions); // Pass the questions from the server to JavaScript

        function loadQuestion() {
            const currentQuestion = questions[currentQuestionIndex];

            // Update question text
            document.getElementById('question-container').innerHTML = `
        <h4>${currentQuestion.text}</h4>
        <div id="options-${currentQuestionIndex}" class="mb-3 d-flex flex-column align-items-center"></div>
    `;

            // Load options for the current question
            const optionsContainer = document.getElementById(`options-${currentQuestionIndex}`);
            optionsContainer.innerHTML = ''; // Clear previous options

            currentQuestion.answers.forEach(answer => {
                const button = document.createElement('button');
                button.innerText = answer.text; // Use 'text' for the answer
                button.className = 'option-button';
                button.onclick = () => selectAnswer(answer.is_correct, currentQuestionIndex, answer
                    .text); // Pass is_correct, index, and text
                optionsContainer.appendChild(button);
            });

            // Hide the "Next" button after the last question
            document.getElementById('next-button').style.display = (currentQuestionIndex < questions.length - 1) ? 'block' :
                'none';
        }

        function selectAnswer(isCorrect, index, selectedOption) {
            if (isCorrect) {
                score++;
                Swal.fire({
                    title: 'Correct!',
                    text: 'Good job!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            } else {
                const correctAnswer = questions[index].answers.find(answer => answer.is_correct)
                    .text; // Get the correct answer text
                Swal.fire({
                    title: 'Wrong!',
                    text: 'The correct answer is ' + correctAnswer,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }

            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                loadQuestion(); // Load the next question
            } else {
                disableOptions(); // Disable options on the last question
                showResults(); // Show results if there are no more questions
            }
        }

        function disableOptions() {
            // Disable all option buttons
            const optionButtons = document.querySelectorAll('.option-button');
            optionButtons.forEach(button => {
                button.disabled = true;
                button.classList.add('disabled'); // Add custom disabled styling if needed
            });
        }

        function showResults() {
            let message = '';
            if (score === questions.length) {
                message = 'Perfect score! You really know your stuff!';
            } else if (score >= 3) {
                message = 'Great job! You did really well!';
            } else if (score === 2) {
                message = 'Not bad! A bit more practice would help.';
            } else {
                message = 'Keep trying! Practice makes perfect!';
            }

            Swal.fire({
                title: 'Quiz Complete!',
                html: `<h4>Your Score: ${score}/${questions.length}</h4><p>${message}</p>`,
                icon: 'info',
                confirmButtonText: 'Restart Quiz',
                showCloseButton: true,
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    restartQuiz();
                }
            });
        }

        function restartQuiz() {
            currentQuestionIndex = 0;
            score = 0;
            loadQuestion(); // Load the first question again
        }

        // Load the first question on page load
        loadQuestion();
    </script>

    <!-- Include SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
