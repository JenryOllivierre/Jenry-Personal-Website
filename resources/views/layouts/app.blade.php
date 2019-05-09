{{-- HTML Header --}}
@include('layouts.app.html-header')

<div id="app">

	<!-- Header -->
	<div id="header-background" class="bg-cover bg-fixed bg-no-repeat" style="background-image: url(@yield('header-background-image', asset('images/frontpage-background-image.jpg')));">
		<div id="header-section">
			<header id="header-nav">
				@include('layouts.app.navbar')
			</header>
			<div id="header-main">
				@include('layouts.app.header-content')
			</div>
		</div>
	</div>

	<!-- Main Content -->
	<div id="main">
		@yield('content')
	</div>

	<!-- Footer -->
	<footer id="footer" class="tracking-semi-wide">
		@include('layouts.app.footer')
	</footer>
</div>

{{-- HTML Footer --}}
@include('layouts.app.html-footer')
