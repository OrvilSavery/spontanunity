<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ URL::asset('library/js/vendor/jquery-1.12.0.min.js') }}"><\/script>')</script>
<script src="{{ URL::asset('library/js/plugins.js') }}"></script>
<script src="{{ URL::asset('library/js/main.js') }}"></script>
<script>
    $(document).ready(function(){
        //Overlays
        $('.overlay-modal a.close').on('click', function(){
            $('.overlay-modal').fadeOut(500);
        });
        //Mobile Navigation
        $('nav.navigation a.nav-dropdown').on('click', function(){
            $('.overlay-modal.navigation').fadeIn();
        });
        $('.one-for-the-road a.checkmark').on('click', function(){
            var modalOverlay = $('.overlay-modal.generic');
            var modalContainer = $('.modal-container');
            var face = modalContainer.find('img.face');
            var image = '{{ URL::asset('library/img/face-happy.png') }}';
            modalContainer.find('h1').html('You Just Got More Spontaneous');
            modalContainer.find('p').html('Your next “One For The Road” will mosey up online tomorrow!');
            face.attr('src', image);
            modalOverlay.fadeIn();
        });
        $('[data-overlay="event-help"]').on('click', function () {
            var modalOverlay = $('.overlay-modal.generic');
            var modalContainer = $('.modal-container');
            var title = $(this).data('help-title');
            var description = $(this).data('help-description');
            var face = modalContainer.find('img.face');
            var image = '{{ URL::asset('library/img/face-generic.png') }}';
            modalContainer.find('h1').html(title);
            modalContainer.find('p').html(description);
            face.attr('src', image);
            modalOverlay.fadeIn();
        });
    });
</script>
@yield('scripts')
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>