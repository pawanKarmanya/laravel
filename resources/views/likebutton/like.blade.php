<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Like button</title>
        <script src="/js/jquery.js"></script>
        <script src="/js/likebutton.js"></script>
       
    </head>
    <body>
        <nav>
            @include('likebutton/dashboard')
        </nav>
        <?php $count=count($article);?>
        @for($x=0;$x<$count;$x++)
        {{$article[$x]['name']}}
        @endfor
            
    </body>
</html>