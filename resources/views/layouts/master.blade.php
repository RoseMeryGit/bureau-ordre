<!DOCTYPE html>
<html lang="en" data-layout="horizontal", data-hor-style="hor-hover">

<head>

	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="description" content="Dashlead - Admin Panel HTML Dashboard Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords"
		content="sales dashboard, admin dashboard, bootstrap 5 admin template, html admin template, admin panel design, admin panel design, bootstrap 5 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">

	<!-- Favicon -->
	<link rel="icon" href="{{asset('template/HTML/dashlead/assets/img/brand/favicon.ico')}}" type="image/x-icon">

	<!-- Title -->
	<title>App Gestion Bureau D'ordre</title>

	<!--- bootstrap css -->
	<link id="style" href="{{asset('template/HTML/dashlead/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!--- FONT-ICONS CSS -->
	<link href="{{asset('template/HTML/dashlead/assets/css/icons.css')}}" rel="stylesheet">

	<!--- Style css -->
	<link href="{{asset('template/HTML/dashlead/assets/css/style.css')}}" rel="stylesheet">

	<!--- Plugins css -->
	<link href="{{asset('template/HTML/dashlead/assets/css/plugins.css')}}" rel="stylesheet">

	<!-- Switcher css -->
	<link href="{{asset('template/HTML/dashlead/assets/switcher/css/switcher.css')}}" rel="stylesheet">
	<link href="{{asset('template/HTML/dashlead/assets/switcher/demo.css')}}" rel="stylesheet">

	
</head>

<body class="app sidebar-mini">


	<!-- Loader -->
	<div id="global-loader">
		<img src="{{asset('template/HTML/dashlead/assets/img/loader.svg')}}" class="loader-img" alt="Loader">
	</div>
	<!-- End Loader -->

	<!-- Page -->
	<div class="page">
		<div>
			<!--Main Header -->
			@include('layouts.header')
			<!--Main Header -->

			<!-- Sidemenu -->
			@include('layouts.sidebar')
			<!-- End Sidemenu -->
		</div>
		<!-- Main Content-->
		@yield('content')
		<!-- End Main Content-->

		<!-- Main Footer-->
		@include('layouts.footer')
		<!--End Footer-->


	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

	<!-- Jquery js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/jquery/jquery.min.js')}}"></script>

	<!-- Bootstrap js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/bootstrap/popper.min.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	@yield('js')
	<!-- Morris Chart js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/raphael/raphael.minjs')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/morris.js/morris.minjs')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/js/chart.morrisjs')}}"></script>
	<!-- Flot js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/js/chart.flot.sampledata.js')}}"></script>

	<!-- Chart.Bundle js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Chartjs charts js-->
    <script src="{{asset('template/HTML/dashlead/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/js/chart.chartjs.js')}}"></script>

	<!-- Peity js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/peity/jquery.peity.min.js')}}"></script>

	<!-- Jquery-Ui js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!-- Select2 js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/select2/js/select2.min.js')}}"></script>

	<!--MutipleSelect js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/multipleselect/multiple-select.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/multipleselect/multi-select.js')}}"></script>

	<!-- Perfect-scrollbar js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/perfect-scrollbar/p-scroll-1.js')}}"></script>

	<!-- Sidemenu js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/sidemenu/sidemenu.js')}}"></script>

	<!-- Sidebar js-->
	<script src="{{asset('template/HTML/dashlead/assets/plugins/sidebar/sidebar.js')}}"></script>

	<!-- Sticky js-->
	<script src="{{asset('template/HTML/dashlead/assets/js/sticky.js')}}"></script>

	<!-- Dashboard js-->
	<script src="{{asset('template/HTML/dashlead/assets/js/index.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/js/courrierE.js')}}"></script>

	<!-- Custom-Switcher js -->
	<script src="{{asset('template/HTML/dashlead/assets/js/custom-switcher.js')}}"></script>

	<!-- Custom js-->
	<script src="{{asset('template/HTML/dashlead/assets/js/custom.js')}}"></script>

	<!-- Switcher js -->
	<script src="{{asset('template/HTML/dashlead/assets/switcher/js/switcher.js')}}"></script>
	<script src="{{asset('template/HTML/dashlead/assets/plugins/jquery/jquery.minjs')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('template/HTML/dashlead/assets/plugins/bootstrap/popper.minjs')}}"></script>
<script src="{{asset('template/HTML/dashlead/assets/plugins/bootstrap/js/bootstrap.minjs')}}"></script>

<!-- Circle-progress -->
<script src="{{asset('template/HTML/dashlead/assets/js/circle-progress.minjs')}}"></script>

<!-- Chartjs charts js-->
<script src="{{asset('template/HTML/dashlead/assets/plugins/chart.js/Chart.bundle.minjs')}}"></script>
<script src="{{asset('template/HTML/dashlead/assets/js/chart.chartjsjs')}}"></script>

<!-- Perfect-scrollbar js-->
<script src="{{asset('template/HTML/dashlead/assets/plugins/perfect-scrollbar/perfect-scrollbar.minjs')}}"></script>
<script src="{{asset('template/HTML/dashlead/assets/plugins/perfect-scrollbar/p-scroll-1js')}}"></script>

<!-- Sidemenu js-->
<script src="{{asset('template/HTML/dashlead/assets/plugins/sidemenu/sidemenujs')}}"></script>

<!-- Sidebar js-->
<script src="{{asset('template/HTML/dashlead/assets/plugins/sidebar/sidebarjs')}}"></script>

<!-- Sticky js-->
<script src="{{asset('template/HTML/dashlead/assets/js/stickyjs')}}"></script>

<!-- Custom-Switcher js -->
<script src="{{asset('template/HTML/dashlead/assets/js/custom-switcherjs')}}"></script>

<!-- Custom js-->
<script src="{{asset('template/HTML/dashlead/assets/js/customjs')}}"></script>

<!-- Switcher js -->
<script src="{{asset('template/HTML/dashlead/assets/switcher/js/switcherjs')}}"></script>
</body>

</html>