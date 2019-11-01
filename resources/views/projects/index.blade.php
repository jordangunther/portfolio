@extends('layout')

@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                <br>
                <span>{{ $project->excerpt }}</span>
            </li>
        @endforeach
    </ul>
@endsection
