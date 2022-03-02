<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    @include('header')

    <form action="form" method="GET">
        <label for="template">
            Option 1
            <input type="radio" value="1" name="template">
        </label>
        <label for="template">
            Option 2
            <input type="radio" value="2" name="template">
        </label>
        <label for="template">
            Option 3
            <input type="radio" value="3" name="template">
        </label>

        <input type="submit" value="Submit the form">
    </form>

    @include('footer');
    </body>
</html>
