<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css">
    <link rel='stylesheet' href="{{asset('css/app.css')}}">  
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
    <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function()
        {
           
            $("div.theloai").on("click","input",function()
            {
                var hrf=$(this).attr("value");
                 
            });
          
        });
    </script>
</head>
<body>
<div class="container">
@include('layout.header')
@include('layout.sidebar')
<?php 
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = ' VND') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
?>
    <div class=container_Parent>
    @include('layout.sidebar-left')
        <div class="content">
        @yield('content')
        </div>
    </div>
    @yield('home')
</div>
@include('layout.footer')
</body>
</html>