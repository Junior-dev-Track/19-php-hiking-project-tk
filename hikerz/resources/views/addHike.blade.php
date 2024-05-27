<!DOCTYPE html>
<html>
<head>
    <title>Add Hike</title>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@include('includes.header')
    <h1>Add your Hike : </h1>
    <form action="/hikes/add" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="distance">Distance:</label><br>
        <input type="number" id="distance" name="distance"><br>
        <label for="duration">Duration:</label><br>
        <input type="text" id="duration" name="duration"><br>
        <label for="elevation_gain">Elevation Gain:</label><br>
        <input type="number" id="elevation_gain" name="elevation_gain"><br>
        <label for="description">Description:</label><br>
        <input type="text" id="description" name="description"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
