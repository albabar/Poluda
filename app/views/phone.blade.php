<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Phone Number</title>
</head>
<body>
{{ Form::open(array('url' => '/phone/create')) }}
    {{ Form::select('user', $users) }}
    {{ Form::text('number') }}
    {{ Form::submit('New Phone Number') }}
{{ Form::close() }}
</body>
</html>
