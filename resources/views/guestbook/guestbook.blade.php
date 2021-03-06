<!doctype html>
<html>
    <head>
        <title>Guest Book</title>
        <script src="/js/jquery.js"></script>
        <script src="/js/likebutton.js"></script>
        <style>
            .top{
                margin-top: 40px;
            }
            .border{
                margin-top: 40px;
                height: 150px;
                border-bottom: 1px solid #C1C1C1;
                 border-left: 1px solid #C1C1C1;
                overflow-style: scrollbar;
                overflow-y: scroll;
            }
        </style>
    </head>
    <body>
        <nav>
            @include('guestbook/dashboard')
        </nav>
        <div class="container">

            <div class="col-md-12 border">
                @if($array!=null)
                @foreach($array as $value)
                @foreach($value as $values=>$key)
                @if($values=='name')
                <p>Posted by: {{$key}}
                @endif
                @if($values=='email')
                ({{$key}})</p>
                @endif
                @if($values=='message')
                <p>{{$key}}</p>
                @endif
                @endforeach
                @endforeach
                @endif
                
            </div>
            <form method="post" action="{{ URL::route('guestbooksubmit')}}">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                       
                <div class="col-md-12">
                    <div class="form-group top col-md-5 ">
                        <label for='name' class="control-label">Name:</label>
                        <input type="text" id='name' name="name" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group  col-md-5 ">
                        <label for='email' class="control-label">Email:</label>
                        <input type="email" id='email' name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group  col-md-5">
                        <label for='message' class="control-label">Message:</label>
                        <textarea class="form-control" name="message" rows="5" id='message'></textarea>
                    </div>
                </div>
                <div class="col-md-1 col-md-offset-2">
                    <input type="submit" class="btn btn-default">
                </div>
            </form>


        </div>
    </body>
</html>