@extends('layout')

@section('content')
    <div>
        <div>
            <h1>New Project</h1>

            <form method="POST" action="/projects">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <div>
                        <input type="text" name="title" id="title">
                    </div>
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <div>
                        <textarea type="textarea" name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div>
                        <textarea type="textarea" name="body" id="body"></textarea>
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
