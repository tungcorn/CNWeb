@extends('layouts.app')

@section('content')

    <h2> {{$pageTitle}} </h2>
    <p> {{ $pageDescription }} </p>

    <h3>Danh sách công việc (lấy từ Controller):</h3>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection
