<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('includes.header')
<div class="hikes_display">
<div class="hikes">
<h1 class="title-hikes">Hikes : </h1>
<ul class="list-hikes">
    @foreach($hikes as $hike)
        <li>
            <a href="{{ route('hikes.show', ['hike' => $hike->id]) }}">{{ $hike->name }}</a>

        </li>
    @endforeach
</ul>
</div>
</div>

</body>
</html>
