
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hike Details</title>
</head>
<body>
@include('includes.header')
<h1>{{ $hike->name }}</h1>
<p>Distance: {{ $hike->distance }}</p>
<p>Duration: {{ $hike->duration }}</p>
<p>Elevation Gain: {{ $hike->elevation_gain }}</p>
<p>Description: {{ $hike->description }}</p>

@if (auth()->check())
    <form action="{{ route('hikes.destroy', ['hike' => $hike->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Hike</button>
    </form>
@endif
</body>
</html>

