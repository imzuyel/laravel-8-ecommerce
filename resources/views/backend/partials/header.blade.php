<header class="top-header">
  <nav class="navbar navbar-expand">
    <div class="left-topbar d-flex align-items-center">
      <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
      </a>
    </div>
    <div class="flex-grow-1 search-bar">
      <div class="input-group">
        <div class="input-group-prepend search-arrow-back">
          <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
          </button>
        </div>
        <input type="text" class="form-control" placeholder="search" />
        <div class="input-group-append">
          <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="right-topbar ml-auto">
      <ul class="navbar-nav">
        <li class="nav-item search-btn-mobile">
          <a class="nav-link position-relative" href="javascript:;"> <i class="bx bx-search vertical-align-middle"></i>
          </a>
        </li>


        <li class="nav-item dropdown dropdown-user-profile">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
            <div class="media user-box align-items-center">
              <div class="media-body user-info">
                <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                <p class="designattion mb-0">
                  User
                </p>
              </div>
              <img class="user-img" alt="user avatar" @if (isset(Auth()->user()->image)) src="/{{ Auth()->user()->image }}"
              @else
              src="/images/no_image.jpg" @endif>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            @if (Auth::user()->hasPermission('app.profile.update'))
            <a class="dropdown-item" href="{{ route('app.profile.index') }}"><i class="bx bx-edit"></i><span>Edit profile</span></a>
            @endif

            @if (Auth::user()->hasPermission('app.profile.password'))
            <a class="dropdown-item" href="{{ route('app.profile.password.change') }}"><i class="bx bx-lock"></i><span>Change
                password</span></a>
            @endif

            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bx bx-power-off"></i><span>Logout</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>

          </div>
        </li>

      </ul>
    </div>
  </nav>
</header>
