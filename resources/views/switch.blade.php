<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>

<body>
    @switch($value)
        @case('A')
            <p>Memuaskan</p>
        @break

        @case('B')
            <p>Bagus</p>
        @break

        @case('C')
            <p>Cukup</p>
        @break

        @case('D')
            <p>Tidak lulus</p>
        @break

        @default
    @endswitch
</body>

</html>
