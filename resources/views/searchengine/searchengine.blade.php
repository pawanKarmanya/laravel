<!doctype html>
<html>
    <head>
        <title>Search Engine</title>
        <link href="/css/autosuggest.css" rel="stylesheet">
    </head>
    <body>
        <nav>
            @include('chatwindow/dashboard')
        </nav>
        <div class="container">
            <form method="post" action="{{URL::route('searchenginesubmit')}}">
             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             
            <div class="col-md-12 top">     
                <div class="col-md-6">
                    <input type="text" class="form-control" name="search" placeholder="Type key word to search">
                </div>
                </div>
            <div class="col-md-1 col-md-offset-2 top">
                <input class="form-control" type="submit" value="Search">
                </div>
            </form>
            <div class="col-md-12 top">
                @if(isset($message))
                <h3>{{$message}}</h3>
                @endif
                @if(isset($result))
                <?php echo $result;?>
                @endif
            </div>
        </div>
    </body>
</html>