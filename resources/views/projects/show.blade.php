@extends('layout')

@section('content')
    <h1>{{ $project->title }}</h1>
    <div>
        {{ $project->body }}
    </div>
    <a href="{{ $project->path() }}/edit">Edit</a>

    <p>
{{--        @foreach ($project->tags as $tag)--}}
{{--            <a href="{{ route('projects.index', ['tag' => $tag->name]) }}>{{ $tag->name }}</a>--}}
{{--        @foreach--}}
    </p>
@endsection
