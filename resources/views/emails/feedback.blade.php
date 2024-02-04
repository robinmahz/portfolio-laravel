<x-mail::message>
    Portfolio contact by

    Name: {{ $data['Name'] }}
    Email: {{ $data['Email'] }}

    {{ $data['Message'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
