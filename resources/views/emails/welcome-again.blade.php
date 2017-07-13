@component('mail::message')
# Introduction
Thanks for Register on App
@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Start new Post For App
@endcomponent

@component('mail::panel', ['url' => ''])
inspiration quote
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
