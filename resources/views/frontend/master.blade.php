<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UFT-8">
    <title> KEENO </title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slicarousel.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        
    <button class="topbtn">Top</button>
        
<!--        Header-->
    @include('frontend.partials.header')
<!--        End of Header-->
        
<!--        Banner-->
        
    @yield('content')
        
<!--        end of about-->
        
<!--footer-->
        
        @include('frontend.partials.footer')
    
        
        
        <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/slicarousel.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/main.js"></script>
        
    </body>
</html>