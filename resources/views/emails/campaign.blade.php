<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $campaign->subject }}</title>
</head>
<body>
    <p>Hi {{ $contact->full_name ?? 'there' }},</p>

    {!! $campaign->email_body !!}

    <p style="font-size: 12px; color: #999;">
        If you no longer want to receive these emails, <a href="{{ route('unsubscribe', ['email' => $contact->email]) }}">unsubscribe here</a>.
    </p>
</body>
</html>
