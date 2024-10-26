@extends('Layout.app')

@section('content')
    <div class="container mt-4">
        <h1 style="margin-top: 50px;">Basic Subtractions</h1>
        <div class="row">
            <!-- Easy Level Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Easy</h5>
                        <p class="card-text">Number of Questions: {{ $easyCount }}</p>
                        <a href="{{ route('basicSubtractionTest', 'easy') }}" class="btn btn-primary">Start Easy</a>
                    </div>
                </div>
            </div>

            <!-- Medium Level Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Medium</h5>
                        <p class="card-text">Number of Questions: {{ $mediumCount }}</p>
                        <a href="{{ route('basicSubtractionTest', 'medium') }}" class="btn btn-warning">Start Medium</a>
                    </div>
                </div>
            </div>

            <!-- Hard Level Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hard</h5>
                        <p class="card-text">Number of Questions: {{ $hardCount }}</p>
                        <a href="{{ route('basicSubtractionTest', 'hard') }}" class="btn btn-danger">Start Hard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
