<!doctype html>
<html>
    <head>
        <title>
            Multiple File upload
        </title>
        <link href="/bootstrap/css/bootstrap.min.css">
        <script src="/js/jquery.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav>
            @include('multiple.dashboard')
        </nav>
        @if(isset($message))
        <div class="col-md-5 col-md-offset-3 alert alert-info">{{$message}}</div>
        @endif
        <form method="post" action="{{URL::route('multiplefilesubmit')}}" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             <div class="col-md-6 col-md-offset-3">
                 <div class="form-group">
                     <input class="form-control" type="file" name="file[]" multiple required>
                 </div>
             </div>
             <div class="col-md-1 col-md-offset-4">
                 <input type="submit" class="btn btn-default" value="Upload">
             </div>
        </form>
    </body>
</html>