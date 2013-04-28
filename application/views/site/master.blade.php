<html>
<head>
<title>Scrumple Bookmarks</title>
 {{ Asset::styles() }}
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="#">Scrumple Bookmarks</a>
    <ul class="nav">
      <li class=""><a href="/">bookmarks</a></li>
      <li class=""><a href="/users/">users</a></li>
      <li><a href="/tags/">tags</a></li>
    </ul>
  </div>
</div>
<div class="container-fluid">
@yield('content')
</div>
</body>
</html>
