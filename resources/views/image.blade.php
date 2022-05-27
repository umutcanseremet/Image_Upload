<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eklenilen Resimler</title>
</head>
<body>

@foreach($veri as $item)
    <img width="50px" src="{{ asset('' . Str::afterLast($item->image, 'public/')) }}" />
@endforeach
</body>
</html>
