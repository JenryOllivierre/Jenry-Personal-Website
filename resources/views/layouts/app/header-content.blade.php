<div id="header-main-container" class="container flex justify-center">
    <div class="flex flex-wrap items-center min-h-full lg:mx-auto lg:w-2/3 py-16 text-grey-light text-center">

        <!-- Leading Text -->
        <div id="header-main-caption" class="w-full italic">
            @yield('header-caption')
        </div>

        <!-- Heading Text -->
        <div id="header-main-title" class="w-full md:text-1xl lg:text-2xl">
            <h1>@yield('header-title')</h1>
        </div>

        @yield('header-after-title')
    </div>
</div>
