<!DOCTYPE html>

<head>
    <title>ISSET and EMPTY</title>
</head>

<body>
    @isset($name)
        <p>Hello my name is {{ $name }}</p>
    @endisset

    @empty($hobbies)
        <p>I don't have any hobbies</p>
    @endempty
</body>

</html>
