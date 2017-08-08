<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
      <!--My style-->
      <link rel="stylesheet" href="">
      {!!Html::style('css/estilo.css')!!}    
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div id="app">
        @include('layouts.nav')
        @yield('content')               
    </div>


    <!-- Scripts app.js laravel -->


    </body>
</html>