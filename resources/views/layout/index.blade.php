<!DOCTYPE html>

<html lang="en">

	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>
			{{ config('app.name', 'BRANCHSTO') }} | 
			@if(Request::segment(1)) {{ strtoupper(str_replace('_', ' ', Request::segment(1))) }} @endif
		</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		
		<!--begin::Layout Themes-->
		@include('includes.styles')
		@stack('add-style')
		<!--end::Layout Themes-->
	</head>

	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
		<div class="page-loader page-loader-logo">
			<img alt="Logo" class="max-h-200px" src="{{url('assets/media/branchsto/branchsto-logo.png')}}">
			<div class="spinner spinner-dark"></div>
		</div>
		<!--[html-partial:include:{"file":"layout.html"}]/-->
		@include('sweetalert::alert')
		@yield('content')

		{{-- <!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-notifications.html"}]/-->
		@include('partials._extras.offcanvas.quick-notifications')

		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-actions.html"}]/-->
		@include('partials._extras.offcanvas.quick-actions')

		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-user.html"}]/-->
		@include('partials._extras.offcanvas.quick-actions')

		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/quick-panel.html"}]/-->
		@include('partials._extras.offcanvas.quick-panel')
		<!--[html-partial:include:{"file":"partials/_extras/scrolltop.html"}]/-->
		@include('partials._extras.scrolltop')
		<!--[html-partial:include:{"file":"partials/_extras/toolbar.html"}]/-->
		@include('partials._extras.toolbar')
		<!--[html-partial:include:{"file":"partials/_extras/offcanvas/demo-panel.html"}]/-->
		@include('partials._extras.offcanvas.demo-panel') --}}
		<script>
			var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
		</script>

		<!--begin::Global Config(global config for global JS scripts)-->
		@include('includes.scripts')
		@stack('add-script')
		<!--end::Page Scripts-->
	</body>

	<!--end::Body-->
</html>