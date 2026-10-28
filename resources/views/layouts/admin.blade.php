<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Studio | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('admin-assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
    <!-- ================== END core-css ================== -->
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		
		<!-- Header / Navbar Admin -->
		@include('layouts.partials.header')
		
		<!-- Sidebar Admin -->
		@include('layouts.partials.sidebar')
		
		<!-- Main Content (Isi Halaman Admin) -->
		@yield('content')
		
		<!-- Footer Admin -->
		@include('layouts.partials.footer')

	</div>
	<!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('admin-assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="{{ asset('admin-assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/demo/dashboard.demo.js') }}"></script>
    <!-- ================== END page-js ================== -->
</body>
</html>