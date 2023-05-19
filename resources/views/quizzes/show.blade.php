@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $quiz->title }}</h1>
        <a class="btn btn-primary" href="{{ route('quizzes.questions.index', $quiz->id) }}">View Questions</a>
    </div>
@endsection
