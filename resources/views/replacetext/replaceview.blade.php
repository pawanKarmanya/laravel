<html>
    <head>
        <title>
            Find and Replace
        </title>
        <link href="/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="container">
            <div class="content">
                
           
           <form action="{{ URL::route('Findreplacepost') }}" method="post" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
            <input type="text" name="find" placeholder="words,to,find"/>
            <input type="text" name="replace" placeholder="replace,text,here"/><br>
            <p><textarea name="text" rows="10" cols="30">@if(isset($text)){{$text}}@endif</textarea></p>
            <input type="submit" value="submit" name="submit"/>
           </form>
            </div>
        </div>
    </body>
</html>