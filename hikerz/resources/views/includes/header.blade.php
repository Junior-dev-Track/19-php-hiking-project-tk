<!-- resources/views/includes/header.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <h1>Welcome to Hikerz</h1>
        <nav>
            <ul class="nav-ul">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/hikes/add">Add Hike</a></li>
            </ul>
            <div class="log">
                <a href="#">Login</a>
                <a href="/subscribe">Subscribe</a>
            </div>
        </nav>
    </header>
</body>
</html>
