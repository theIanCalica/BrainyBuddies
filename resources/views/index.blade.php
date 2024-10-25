@extends('Layout.app')
@section('styles')
    <style>
        .carousel-img {
            max-height: 400px;
            /* Adjust the height as needed */
            object-fit: cover;
            /* This ensures the image covers the area while maintaining its aspect ratio */
        }

        /* Add custom styles for the popular flashcards */
        .flashcard-section {
            margin-top: 50px;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 10px;
        }

        .flashcard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .flashcard-item {
            padding: 20px;
            background-color: #f9f9fb;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .flashcard-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .flashcard-item h5 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
        }

        .flashcard-item p {
            color: #777;
            font-size: 0.9rem;
        }
    </style>
@endsection

@section('content')
    <div class="text-center mt-5 px-5">
        <!-- Main Heading -->
        <h1 class="font-weight-bold display-4">How do you want to study?</h1>

        <!-- Description -->
        <p class="mt-2 text-muted">
            Master whatever you’re learning with BrainyBuddies interactive flashcards and practice tests.
        </p>

        <!-- Bootstrap Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <img src="{{ asset('1.jpg') }}" class="d-block w-100 carousel-img" alt="Flashcards">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interactive Flashcards</h5>
                        <p>Boost your memory with our interactive flashcards and quizzes.</p>
                    </div>
                </div>

                <!-- Second Slide -->
                <div class="carousel-item">
                    <img src="{{ asset('2.jpg') }}" class="d-block w-100 carousel-img" alt="Practice Tests">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Practice Tests</h5>
                        <p>Test your knowledge with personalized practice exams.</p>
                    </div>
                </div>

                <!-- Third Slide -->
                <div class="carousel-item">
                    <img src="{{ asset('3.jpg') }}" class="d-block w-100 carousel-img" alt="Study Groups">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Study Groups</h5>
                        <p>Join study groups and learn together with your friends.</p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- First Section -->
    <div class="study-app-section"
        style="margin-top: 200px; padding: 50px; background-color: #f9f9fb; border-radius: 10px;">
        <div class="d-flex align-items-center gap-5" style="max-width: 1200px; margin: 0 auto;">
            <!-- Text Content -->
            <div class="text-content" style="flex: 1;">
                <h1 style="font-size: 2.5rem; font-weight: 700; color: #333;">Every class, every test, one ultimate study
                    app</h1>
                <p style="font-size: 1.1rem; color: #555; margin-top: 20px; line-height: 1.6;">
                    Unlock your full learning potential with BrainyBuddies! Create your own flashcards or access
                    expert-curated sets tailored to your needs.
                </p>
            </div>

            <!-- Image -->
            <div class="image-container">
                <img src="{{ asset('4.jpg') }}" alt="BrainyBuddies app preview"
                    style="width: 250px; height: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </div>

    <!-- Second Section -->
    <div class="study-app-section" style="margin-top: 50px; padding: 50px; background-color: #ffffff; border-radius: 10px;">
        <div class="d-flex align-items-center gap-5" style="max-width: 1200px; margin: 0 auto;">
            <!-- Image -->
            <div class="image-container">
                <img src="{{ asset('5.jpg') }}" alt="Interactive Learning Tools"
                    style="width: 250px; height: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            </div>
            <!-- Text Content -->
            <div class="text-content" style="flex: 1;">
                <h1 style="font-size: 2.5rem; font-weight: 700; color: #333;">Interactive Learning Tools</h1>
                <p style="font-size: 1.1rem; color: #555; margin-top: 20px; line-height: 1.6;">
                    With BrainyBuddies, studying becomes fun and interactive. Use our tools to quiz yourself, track your
                    progress, and reach your academic goals faster.
                </p>
            </div>


        </div>
    </div>

    <!-- Third Section -->
    <div class="study-app-section" style="margin-top: 50px; padding: 50px; background-color: #f9f9fb; border-radius: 10px;">
        <div class="d-flex align-items-center gap-5" style="max-width: 1200px; margin: 0 auto;">
            <!-- Text Content -->
            <div class="text-content" style="flex: 1;">
                <h1 style="font-size: 2.5rem; font-weight: 700; color: #333;">Study Groups & Collaboration</h1>
                <p style="font-size: 1.1rem; color: #555; margin-top: 20px; line-height: 1.6;">
                    Collaborate with friends or classmates. Join or create study groups to share flashcards, practice tests,
                    and notes all in one place.
                </p>
            </div>

            <!-- Image -->
            <div class="image-container">
                <img src="{{ asset('6.jpg') }}" alt="Study Groups & Collaboration"
                    style="width: 250px; height: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </div>
    <div class="flashcard-section">
        <h2 class="text-center">Popular flashcard sets</h2>
        <div class="flashcard-grid">
            <div class="flashcard-item">

                <h5>Leading Marines - Admin and Communication</h5>
                <p>83 terms</p>
            </div>
            <div class="flashcard-item">

                <h5>Unit 3 Progress Check</h5>
                <p>21 terms</p>
            </div>
            <div class="flashcard-item">
                <h5>El pretérito</h5>
                <p>192 terms</p>
            </div>
            <div class="flashcard-item">

                <h5>El cuerpo</h5>
                <p>19 terms</p>
            </div>
            <div class="flashcard-item">
                <h5>La personalidad con adjetivos</h5>
                <p>30 terms</p>
            </div>
            <div class="flashcard-item">
                <h5>The Declaration of Independence Vocabulary</h5>
                <p>15 terms</p>
            </div>
        </div>
    </div>
@endsection
