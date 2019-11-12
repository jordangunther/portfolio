@extends('layouts.app')

@section('content')
    <div>
        <div>
            <h1>New Project</h1>

            <form method="POST" action="/projects">
                @csrf
                <div>
                    <label for="title">Title</label>
                    <div>
                        <input
                            class="@error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <p>{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="excerpt">Excerpt</label>
                    <div>
                        <textarea
                            class="@error('excerpt') is-danger @enderror"
                            type="textarea"
                            name="excerpt"
                            id="excerpt">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <p>{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="body">Body</label>
                    <div>
                        <textarea
                            class="@error('body') is-danger @enderror"
                            type="textarea"
                            name="body"
                            id="body">{{ old('body') }}</textarea>
                        @error('body')
                            <p>{{ $errors->first('body') }}</p>
                        @enderror
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
