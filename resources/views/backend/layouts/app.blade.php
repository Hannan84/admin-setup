<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DashApp</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    @include('backend.partials.styles')
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{ asset('backend/vendors/images/deskapp-logo.svg') }}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

    @include('backend.partials.header')
    @include('backend.partials.sidebar')

	<div class="mobile-menu-overlay"></div>
	<!-- main-container -->
    	<div class="main-container">
		<div class="pd-ltr-20">
		@yield('content')
		<!-- footer -->
        @include('backend.partials.footer')
		</div>
	</div>
	<!-- js -->
     @include('backend.partials.scripts')
</body>
</html>