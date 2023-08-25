<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i>
            ICAP Assets Management
            </a>
        </li>
    </ul>

    <h4 class="px-2  mt-2" style="font-size: 16px">
        @stack('nav-head')
    </h4>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
                <img src="{{ asset('adminLTE3/dist/img/avatar.png')  }}" class="img-circle elevation-2" alt="User Image" width="35" style="margin-left: 5px">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>