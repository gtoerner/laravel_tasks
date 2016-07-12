<!DOCTYPE html>
<html>
    <head>
        <title>MySite - @yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="{{{ asset('/css/custom.css') }}}" rel="stylesheet">

        <!--
    <style>
      body {
        font-family: 'Tangerine', serif;
        font-size: 48px;
      }
    </style>
-->

    </head>
    <body>
        <div class="container-fluid">

<nav class="navbar navbar-custom">
<!-- <nav class="navbar navbar-default"> -->
<!--<nav class="navbar navbar-inverse"> -->
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">...
        </button>
        <a class="navbar-brand" href="/">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li><a href="about">About</a></li>
      <li><a href="tasks">Tasks</a></li>
      <li><a href="users">Users</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
         <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Search</button>
         </form>
      </li>
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span><font size=2> Login</font></a></li>
            <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-log-in"></span><font size=2> Register</font></a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                </ul>
            </li>
        @endif

    </ul>
  </div>
</nav>

        @yield('content')

        </div> <!-- end full body container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
