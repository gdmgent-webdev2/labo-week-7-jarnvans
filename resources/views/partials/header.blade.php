<!-- Start Top Bar -->
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="menu" role="menubar">
                <li class="@if(Route::is('pages.home')) is-active @endif" role="menuitem">
                  <a href="{{ route('pages.home') }}">
                    Home
                  </a>
                </li>
                @if (Auth::user())
                <li class="@if(Route::is('clients.index')) is-active @endif" role="menuitem">
                  <a href="{{ route('clients.index') }}">
                    Klanten
                  </a>
                </li>
                <li class="@if(Route::is('reservations.index')) is-active @endif" role="menuitem">
                  <a href="{{ route('reservations.index') }}">
                    Reservaties
                  </a>
                </li>
                <li role="menuitem">
                  <a href="{{ route('logout') }}">
                    Logout
                  </a>
                </li>
                @else
                <li class="@if(Route::is('reservations.index')) is-active @endif" role="menuitem">
                  <a href="{{ route('login') }}">
                    Login
                  </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Top Bar -->
