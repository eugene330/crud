<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/style.css"
    </head>
    <body>
        <h1>My Site</h1>
        <?php
            include_once 'views' . DIRECTORY_SEPARATOR . 'content' . DIRECTORY_SEPARATOR . $contentPage . '.php';
        ?>
    </body>
</html>