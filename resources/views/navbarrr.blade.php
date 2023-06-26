<!DOCTYPE html>
<html>
<head>
    <title>mySong</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home">SONG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home"><font color = "blue" > <b> Home </b> </font> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Penyanyi"><font color = "purple" > <b> Penyanyi </b> </font> </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b> More </b> 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="GenreMusik">genre_musik</a>
          <a class="dropdown-item" href="Label">label</a>
          <a class="dropdown-item" href="Musik">musik</a>
          <a class="dropdown-item" href="User">user</a>
          <a class="dropdown-item" href="Genre">genre</a>
        </div>
      </li>
    </ul>
        <a class="nav-link" href="/actionlogout"><font color = "red" > Logout</font></a>
        <form class="form-inline my-2 my-lg-0">
          <a href="/User"><img src="{{URL ('img/logo.jpg')}}" width="30px" height="30px" > </a>
        </form>
    
  </div>
</nav></body>
</html>
