<x-mail::message>
    your have an enquire form your website.

    Email: {{ $data['email'] }}
    Subject: {{ $data['subject'] }}

    {{ $data['message'] }}

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
