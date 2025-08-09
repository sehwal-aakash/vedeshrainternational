<!DOCTYPE html>
<html>
<head>
    <title>{{ $name }}</title>
</head>
<body>
    <h2>Hello, {{ $name }}</h2>
    {!! $data['content'] !!}
    <hr>
    <small>Sender Email: {{ $email }}</small>
</body>
</html>
