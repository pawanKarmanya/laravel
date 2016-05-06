<!doctype html>
<html>
    <head>
        
        <title>Cart</title>
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            p{
                font-size: 1.5em;
            }
            h1 {
                color: green;
            }
            #top{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <nav>
            @include('shoppingcart/dashboard')
        </nav>
        <div class="container">
          <div class=" col-md-6 col-md-offset-2">
              <h1><u>Payment</u> <u>Successfully</u> <u>done</u> </h1>
              <p id="top">Name:{{$name}}</p>
            <p>Account:{{$account}}</p>
            <p>Total Payment:{{$price}}</p>
            </div>
            
            <div class="col-md-6 col-md-offset-2 alert alert-success">
                Your Product will be delivered to you shortly 
            </div>
        </div>
    </body>
</html>
