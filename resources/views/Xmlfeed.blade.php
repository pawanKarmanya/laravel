<html>
    <head>
        <title>
         How to Read XML, RSS and ATOM Feeds
        </title>
    </head>
    <body> 
        <div class="container">
            <div class="content">
                <ul>
                  @if(isset($Xmlfeed_url) && $Xmlfeed_title)
                  <?php
                  for($x=0;$x<count($Xmlfeed_url);$x++)
                 
                    echo '<li><a href="',$Xmlfeed_url[$x],'">',$Xmlfeed_title[$x],'</a></li>';?>
                   
                   
                  @endif
                </ul>
            </div>
        </div>
    </body>
</html>