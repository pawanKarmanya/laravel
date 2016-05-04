<!doctype html>
<html>
    <head>
        <title>Mailing List</title>
        <link href="/css/autosuggest.css" rel="stylesheet">
        <script src="/js/jquery.js"></script>

    </head>
    <body>
        <nav>
            @include('chatwindow/dashboard')
        </nav>
        <?php $increment = 0; ?>
        <div class="container">
            <form action="{{URL::route('maillistsubmit')}}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="col-md-5 col-md-offset-3 top box">
                    <h2 class="header">Mailing List</h2>
                    @if(isset($mail))
                    @foreach($mail as $value)
                    @foreach($value as $values=>$key)
                    @if($values=="name")
                    <div>
                        <label>{{$key}}
                            @endif
                            @if($values=="email")
                            ({{$key}})<input type="checkbox" value="{{$key}}" name="mail_<?php echo $increment++; ?>"></label>
                    </div>

                    @endif
                    @endforeach
                    @endforeach
                    @endif
                    <textarea class="form-control top" name="message" rows="5"></textarea>
                    <div class="form-group col-md-offset-5 top">
                        <input type="submit" class="btn btn-default">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>