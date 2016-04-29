<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Register</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <script src="/js/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="/js/spellchecker.js"></script>
        <style>

            .text{
                padding-top: 80px;
            }
            #list{
                list-style: none;
                padding: 0;
            }
            #list li{
                border-radius: 2px;
                width: 445px;
                height: 35px;
                border: 0.5px solid #dedede;
                border-top: 0.2px solid #dedede;
                border-bottom: 0.2px ligth #dedede;
                padding-left: 19px;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <nav >
            @include('spellchecker.dashboard')
        </nav>
        <div class="container">
            <div class="col-md-5 col-md-offset-3 text">
                <input type="text" id="word" class="form-control">
                <ul id="list"></ul>
            </div>
        </div>
    </body>
</html>