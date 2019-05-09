<!-- Footer Main Content -->
<div id="footer-content-area">
    <div class="container">
        <div class="row flex flex-wrap">

            <!-- Site Description -->
            <div class="footer-widget">
                @include('layouts.app.footer.widget-site-description')
            </div>

            <!-- Contact Information -->
            <div class="footer-widget">
                @include('layouts.app.footer.widget-contact-information')
            </div>

            <!-- Let's Connect -->
            <div class="footer-widget">
                @include('layouts.app.footer.widget-social-media')
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer-content-area -->

<!-- Footer Socket -->
<div id="footer-socket-area" class="py-6 text-sm">
    <div class="container flex flex-wrap">
        <div class="w-full lg:w-1/2">&copy; {{ config('app.name') }} 2017 - {{ date('Y') }} | All Rights Reserved</div>
        <div class="w-full lg:w-1/2 lg:text-right">Developing With Care</div>
    </div>
</div>
