<aside class="main-sidebar sidebar-light-primary bg-light">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">v3421064</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if ($foto != null)
            <img src="/img/{{ $foto }}" class="img-circle" alt="User Image">
            @else
            <img src="/img/25231.png" class="img-circle" alt="User Image">
            @endif
        </div>
        <div class="info">
            @if (Auth::check())
            <a href="/profile64" class="d-block">{{ Auth::user()->name }}</a>
            @else
            <a href="/login64" class="d-block">Guest</a>
            @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <p>Home</p>
                </a>
            </li>
                @if ($role == "Admin")
                <li class="nav-item">
                    <a href="/users64" class="nav-link">
                    <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/agama64" class="nav-link">
                    <p>Agama</p>
                    </a>
                </li>
                @endif
        </ul>
      </nav>
    </div>
  </aside>
