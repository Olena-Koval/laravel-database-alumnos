<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite("resources/css/app.css")
</head>
<body>
<header class="h-15v bg-header">
    ESTOY EN HEADER
</header>
<nav class="h-10v bg-nav">
    <a class="header" href="about">About</a>
    <a href="noticias">Noticias</a>
    <a href="/">Ppal</a>
</nav>
<main class="bg-main h-65v">
    {{$slot}}
</main>
<footer class="h-10v bg-footer">
    estoy en footer
</footer>

</body>
</html>
