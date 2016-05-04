<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Auto Suggest</title>
        <link href="/css/autosuggest.css" rel="stylesheet">
        <script src="/js/jquery.js"></script>
        <script src="/js/autosuggest.js"></script>
        <style>
            
        </style>
    </head>
    <body>
        <nav>
            @include('chatwindow/dashboard')
        </nav>
        <div class="container">
            <div class="col-md-12 top">     
                <div class="col-md-6">
                    <input type="text" class="form-control" name="suggest" placeholder="Enter city name" id="suggest">
                    <div class="dropdown"> 
                        <ul class="result">
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>