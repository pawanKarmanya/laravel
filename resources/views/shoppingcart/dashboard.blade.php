<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            #cloud{
                font-size: 2em;
               
            }
            li:hover{
                background-color: #DBDBDB;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar-default navbar-fixed">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" id="cloud"><span  class="glyphicon glyphicon-home"></span></a>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li ><a href="{{ URL::route('minishoppingcart')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>