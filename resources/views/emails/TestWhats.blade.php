<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <title>Envio de $_SERVER</title>
    </head>
    <body>
        @php
        echo "<pre>";
        print_r($sign . "<br>");
        print_r($_SERVER);
        print_r($server);
        echo "</pre>";
        @endphp
    </body>
</html>