<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
</head>
<body>
{{ Form::open(array('url' => '/user/create')) }}
    {{ Form::text('name') }}
    {{ Form::submit('Create new User') }}
{{ Form::close() }}
</body>
</html>
