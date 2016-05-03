<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chat Window</title>
        <script src="/js/jquery.js"></script>
        <script src="/js/chatwindow.js"></script>
        <style>
            .top{
                margin-top: 40px;
            }
            .border{
                margin-top: 40px;
                height: 300px;
                border: 1px solid #C1C1C1;
                overflow-style: scrollbar;
                overflow-y: scroll;
            }
        </style>
    </head>
    <body>
        <nav>
            @include('chatwindow/dashboard')
        </nav>
        <div class="container">
            <div class="col-md-7 border">
                
            </div>
            
            <form method="post" action="{{ URL::route('chatsubmit')}}">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="col-md-12 top">     
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for='message' class="control-label">Message:</label>
                        <input type="text" id='message' name="message" class="form-control">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label  class="control-label">  </label>
                    <input type="submit" value="Send" class="btn btn-default">
                </div>
                </div>
                    </div>
            </form>


        </div>
    </body>
</html>