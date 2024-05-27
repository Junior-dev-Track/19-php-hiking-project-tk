<!DOCTYPE html>
<html>
<head>
    <title>Subscribe</title>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@include('includes.header')
    <h1>Subscribe to our newsletter : </h1>
    <form action="/subscribe" method="POST">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" autocomplete="email"><br>
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname">
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname">
        <label for="nickname">Last Name:</label><br>
        <input type="text" id="nickname" name="nickname">
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password">
        <input type="submit" value="Subscribe">
    </form>
</body>
</html>
