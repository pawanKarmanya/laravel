<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Like button</title>
        <script src="/js/jquery.js"></script>
        
       
    </head>
    <body>
        <nav>
            @include('likebutton/dashboard')
        </nav>
        <script> var name="<?php echo $name;?>";
        
        </script>
        <script src="/js/likebutton.js"></script>
            <?php $count=count($article);?>
        @for($x=0;$x<$count;$x++)
        <p>{{$article[$x]['name']}}  <button class="btn btn-info" onclick="like(this)" value="<?php echo $article[$x]["articleid"];?>">Like</button>
            <span id='<?php echo $article[$x]["articleid"];?>' ></span>
        </p>
        @endfor
            
    </body>
</html>