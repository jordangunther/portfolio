@component('mail::message')
# New Project! {{ $project->title }}

{{ $project->body }}

The body of your message.

@component('mail::button', ['url' => url('/projects/' . $project->id)])
View project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
