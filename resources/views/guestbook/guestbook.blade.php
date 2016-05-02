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
        </style>
    </head>
    <body>
        <nav>
            @include('guestbook/dashboard')
        </nav>
        <div class="container">
            
                <div class="col-md-12">
                    <form >
                        <div class="col-md-12">
                        <div class="form-group top col-md-5 ">
                            <label for='name' class="control-label">Name:</label>
                            <input type="text" id='name' class="form-control">
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group  col-md-5 ">
                            <label for='email' class="control-label">Email:</label>
                            <input type="email" id='email' class="form-control">
                        </div>
                        </div>
                       
                    </form>
                </div>
            
        </div>
    </body>
</html>