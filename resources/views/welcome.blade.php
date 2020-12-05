<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>project web</title>

        <script src="https://kit.fontawesome.com/f1d7f888de.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="/css/app.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <div id="app">
        <div class="header">
            <top-bar></top-bar>
            <header-web></header-web>
            <hero-section></hero-section>
        </div>
    </div>
    <script src="/js/app.js"></script>
    </body>
</html>
