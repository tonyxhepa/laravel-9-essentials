@component('mail::message')
    # Contact from {{ $name }}

    {{ $content }}

    @component('mail::button', ['url' => 'http://essential.test/'])
        Visit us
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
