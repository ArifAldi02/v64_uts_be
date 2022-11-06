<nav class="fixed-top main-header navbar navbar-expand navbar-white navbar-light bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            @if (!Auth::check())
                <a href="/login64" class="nav-link">
                  <p>Login</p>
                </a>
                @else
                <a href="/logout64" class="nav-link">
                  <p>Logout</p>
                </a>
            @endif
        </li>
      </ul>
  </div>

</nav>
