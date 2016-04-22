<!doctype html>
<html>
    <head>
        <title>Shoutbox</title>
        
        <link href="pages/files/css/bootstrap.min.css" rel="stylesheet">


        <script type="text/javascript" src="pages/files/jquery.js"></script>
        <script type="text/javascript" src="pages/files/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav>
            @include('pages/dashboard');
        </nav>
    </body>
</html>
<?php

echo 'Hello';
$users = DB::table('exam')->get();
print_r($users);
echo '<br><br>';
