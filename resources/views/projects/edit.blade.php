@extends('layout')

@section('content')
    <div>
        <div>
            <h1>Update Project</h1>

            <form method="POST" action="/projects/{{ $project->id }}">
                @csrf
{{--                browser only understands POST so use POST than tell laravel to use PUT--}}
                @method('PUT')
                {{ $project->id }}
                <div>
                    <label for="title">Title</label>
                    <div>
                        <input type="text" name="title" id="title" value="{{ $project->title }}">
                    </div>
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <div>
                        <textarea type="textarea" name="excerpt" id="excerpt">{{ $project->excerpt }}</textarea>
                    </div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div>
                        <textarea type="textarea" name="body" id="body">{{ $project->body }}</textarea>
                    </div>
                </div>
                <div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
