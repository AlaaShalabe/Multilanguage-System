<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <strong> {{ __('Multilanguage System') }} </strong>
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                {{ __('Home') }}
            </a>
            <a class="navbar-item" href="{{ route('categories.index') }}">
                {{ __('Categories') }}
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    {{ __('Language') }}
                </a>

                <div class="navbar-dropdown">
                    @if (App::isLocale('ar'))
                        <a href="/lang/en" class="navbar-item">
                            {{ __('English') }}
                        </a>
                    @else
                        <a href="/lang/ar" class="navbar-item">
                            {{ __('Arabic') }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
