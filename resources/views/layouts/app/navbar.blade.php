<nav id="navbar" class="py-4">
    <div class="navbar-container flex flex-col lg:flex-row lg:items-center">

        <!-- Navbar Brand/Logo -->
        <div class="flex items-center w-full lg:w-auto">
            <div id="navbar-brand" class="pr-4">
                <a class="font-special font-bold text-3xl text-grey hover:text-grey-light" href="{{ route('home') }}" alt="Jenry Ollivierre">
                    Jenry Ollivierre
                </a>
            </div>

            <!-- Menu Toggler -->
            <div id="navbar-menu-toggler" class="ml-auto lg:hidden" aria-status="inactive">
                <button class="flex items-center px-3 py-2 border-2 rounded text-grey-light hover:text-grey-lighter border-grey hover:border-grey-lighter">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Menu Items -->
        <div id="menu-container" class="hidden lg:flex -mb-4 lg:mb-0 mt-4 lg:mt-0 -mx-8 lg:ml-auto lg:-mr-4">
            <ul id="menu" class="list-reset flex flex-col lg:flex-row font-display font-bold">
                @foreach ($menu as $key => $displayName)
                    @if ($currentPage == $key)
                        <li id="menu-{{$key}}" class="nav-item-holder active">
                            <a href="{{ route($key) }}" class="nav-link">
                                <div class="nav-item">{{ $displayName }}</div>
                            </a>
                        </li>
                    @else
                        <li id="menu-{{$key}}" class="nav-item-holder">
                            <a href="{{ route($key) }}" class="nav-link">
                                <div class="nav-item">{{ $displayName }}</div>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</nav>
