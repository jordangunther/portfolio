@extends('layouts.app')

@section('content')
    <ul>
        @forelse ($projects as $project)
            <li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
                <br>
                <span>{{ $project->excerpt }}</span>
            </li>
        @empty
            <p>No relevant projects yet.</p>
        @endforelse
    </ul>
@endsection
