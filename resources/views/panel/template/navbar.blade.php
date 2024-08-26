<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route("panel.main.index") }}" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="Auth-Panel/#">
          <i class="far fa-power-off"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item" onclick="$('.logout-form').submit();">
            <!-- Message Start -->
            <div class="media">
              Sair
            </div>
            <!-- Message End -->
          </a>
          <form class="logout-form hide" method="POST" action="{{ route("logout") }}">
            {{ csrf_field() }}
          </form>

    </ul>
  </nav>
