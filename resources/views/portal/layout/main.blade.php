<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('portal.layout.head')


<body class="homepage" dir="<?= (App::getLocale() == 'en') ? 'ltr' : 'rtl' ?>" >
	
	@include('portal.layout.header')


	@yield('content')
        

	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="{{route('portal.home') }}">Home</a></li>
                        <li><a href="{{route('portal.aboutus') }}">About Us</a></li>
                        <li><a href="{{route('contactus.create') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <!-- JavaScript section -->
    <script src="/js/js/jquery.js"></script>
    <script src="/js/js/bootstrap.min.js"></script>
    <script src="/js/js/jquery.prettyPhoto.js"></script>
    <script src="/js/js/jquery.isotope.min.js"></script>
    <script src="/js/js/main.js"></script>
    <script src="/js/js/wow.min.js"></script>
		
</body>
</html>