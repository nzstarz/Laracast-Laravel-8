<!DOCTYPE html>
<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">-->
    <head>
        
        <title>My Blog</title>
       <!--  (Laravel 8) This commented link below doesn't work as tutorial says in laracasts
        <link rel="stylesheet" herf="/app.css"> try one of them from below three (from stackoverflow)

        <link rel="stylesheet" type="text/css" href="{{ url('/app.css') }}"> -->

        <link href="./app.css" rel="stylesheet">
       

       <!-- This one work as well
           <link href="{{ asset('/app.css') }}" rel="stylesheet">-->

          
        

    
    </head>
    <body>
        <h1>Hello World</h1>
        
        <script src="/app.js"></script>
    </body>
</html>
