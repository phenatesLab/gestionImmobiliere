<div class="navbar-fixed">
    <nav class="blue darken-4">
        <div class="nav-wrapper">
            <div class="row">
                <ul>
                    <div class="col s6 m6">
                        <li><a href="#!">{{ __('(+228) 90 11 51 16') }}</a></li>
                        <li><a href="#!">{{ __('stephanekuma@protonmail.com') }}</a></li>
                    </div>
                    @include('layouts.partials._log_items')
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="divider"></div>
<nav class="blue darken-4">
    <div class="nav-wrapper">
        <a href="{{ url('') }}" class="brand-logo">Logo</a>
        @include('layouts.partials._nav_items')
    </div>
</nav>
