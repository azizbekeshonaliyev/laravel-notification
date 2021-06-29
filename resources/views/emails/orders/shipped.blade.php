@component('mail::message')
# Introduction

The body of your message. Azizbek 1

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
