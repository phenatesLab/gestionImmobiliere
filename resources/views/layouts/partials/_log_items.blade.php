<div class="col s6 m6">
    @guest
        <li class="right"><a href="{{ route('login') }}">{{ __('Se connecter') }}</a></li>
        @if(Route::has('register'))
            <li class="right"><a href="{{ route('register') }}">{{ __("S'inscricre") }}</a></li>
        @endif
    @else
        <li class="right">
            <a class="dropdown-trigger" href="#!" data-target="log-drop">
                {{ Auth::user()->name }} <span class="caret"></span>
                <i class="material-icons right">arrow_drop_down</i>
            </a>
        </li>
    @endguest
</div>

<!-- Dropdown structure -->
<ul id="log-drop" class="dropdown-content">
    <li>
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Déconnexion') }}
        </a>
    </li>
</ul>

<form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
    @csrf
</form>
