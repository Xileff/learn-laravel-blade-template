<!DOCTYPE html>
<html lang="en">

<head>
    <title>If Statement</title>
</head>

<body>
    @if (count($hobbies) === 1)
        I have one hobby
    @elseif(count($hobbies) > 1)
        I have multiple hobbies
    @else
        I dont have any hobbies
    @endif
</body>

</html>
