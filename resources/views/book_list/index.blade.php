<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        
        <!-- As a link -->
        <nav class="navbar navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="#">Navbar</a>
        </nav>
        <div class="container">
            <book-list-component />
        </div>

    </div>
</body>
<script src="{{ asset('js/app.js')}} "></script>
</html>