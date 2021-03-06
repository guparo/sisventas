<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Developers::@yield('title')::</title>

    <!-- Bootstrap -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/navbar-fixed-top.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}    
 
     <!-- MENSAJE ALERT -->
    {!!Html::style('js/jquery-alertable-master/jquery.alertable.css')!!}
    {!!Html::script('js/jquery-alertable-master/jquery.alertable.js')!!}
   
  </head>
  <body>
     <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <img src="{{url('img/logo.png')}}" alt=""/> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('dashboard')}}">Escritorio</a></li>
            <li><a href="{{url('product')}}">Productos</a></li>
            <li><a href="{{url('mark')}}">Marcas</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">
      @yield('content')


    </div> <!-- /container -->
    </body>
</html>

