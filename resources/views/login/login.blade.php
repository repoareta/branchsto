
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="{{ url('/') }}">
		<meta charset="utf-8" />
		<title>
			{{ config('app.name', 'BRANCHSTO') }} | 
			@if(Request::segment(1)) {{ strtoupper(str_replace('_', ' ', Request::segment(1))) }} @endif
		</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ asset('assets/css/stylee.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
	
		<!--begin::Page Custom Styles(used by this page) -->
		<link href="{{ asset('assets/css/pages/login/login-6.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles -->
		
	
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ asset('assetss/media/logos/favicon-1.ico') }}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
		<!--begin::Main-->
		<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
					<div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url({{ asset('assets/media/logos/bg-login.png') }});border-bottom-right-radius:2%;border-top-right-radius:2%;">
						<div class="kt-login__section">
							<div class="kt-login__block">
								<div class="kt-login__logo">
								<a href="{{url('/login')}}">
										<img src="{{ asset('assets/media/logos/profile.png') }}" style="margin-left:10rem;width: 40%;height: 40%;">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
						<div class="kt-login__wrapper">
							<div class="kt-login__container">
								<div class="kt-login__body">
									<div class="kt-login__signin">
										<div class="">
											@if(\Session::has('notif'))
											<div class="alert alert-danger alert-block">
												<button type="button" class="close" data-dismiss="alert">×&nbsp;&nbsp;&nbsp;</button>
												<strong>{{Session::get('notif')}}</strong>
											</div>
											@endif
										</div>
										<div class="kt-login__head">
											<h2 class="kt-login__title">Login</h2>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" id="formcomm" action="{{ route('login.postlogin')}}" method="post">
												@csrf
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Username" value="mulyonomuiz63@gmail.com" name="email" autocomplete="off">
												</div>
												<div class="form-group">
													<input class="form-control form-control-last" type="password" value="admin" placeholder="Password" name="password">
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_signin_submitn" style="color:#fff; background-color:#2A4158" class="form-control">LOGIN</button>
												</div>
												<div class="kt-login__extra">
													<a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
												</div>
											</form>
												<div class="kt-login__actions">
													<a href="javascript:;" id="kt_login_signup" style="color:#2A4158" class="form-control">REGISTER</a>
												</div>
										</div>
									</div>
									<div class="kt-login__signup">
										<div class="kt-login__head">
											<h2 class="kt-login__title">Register</h2>
										</div>
										<div class="kt-login__form">
										<form class="kt-form" id="formregister" action="{{ route('login.register')}}" method="POST">
											@csrf
											<div class="input-group">
												<input class="form-control" type="text" placeholder="Name" name="name">
											</div>
											<div class="input-group">
												<input class="form-control" type="email" placeholder="Email" name="email"  autocomplete="off">
											</div>
											<div class="input-group">
												<input class="form-control" type="password" placeholder="Password" name="password">
											</div>
											{{-- <div class="form-group">
												<select class="form-control" name="jenis_kelamin">
													<option value="">- Jenis Kelamin -</option>
													<option value="laki-laki">Laki-Laki</option>
													<option value="perempuan">Perempuan</option>
												</select>
											</div>
											<div class="input-group">
												<input class="form-control" id="tanggal" type="text" placeholder="Tanggal Lahir" name="tanggal_lahir" autocomplete='off'>
											</div>
											<div class="input-group">
												<input class="form-control" type="text" placeholder="Phone" name="phone">
											</div>
											<div class="input-group">
												<input class="form-control" type="text" placeholder="Address" name="address">
											</div> --}}
											<div class="kt-login__actions">
												<button style="color:#fff;background-color:#2A4158" type="submit" class="form-control">Sign Up</button>
											</div>
											<div class="kt-login__extra">
												<a href="javascript:;" id="kt_login_signup_cancel">Have any account?</a>
											</div>
										</form>
										</div>
									</div>
									<div class="kt-login__forgot">
										<div class="kt-login__head">
											<h3 class="kt-login__title">Reset Password ?</h3>
										</div>
										<div class="kt-login__form">
											<form class="kt-form" action="">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
												</div>
												<div class="kt-login__actions">
													<button style="color:#fff;background-color:#2A4158" class="form-control">SEND PASSWORD RESET LINK</button>&nbsp;&nbsp;
												</div>
												<div class="kt-login__actions">
													<button id="kt_login_forgot_cancel" style="color:#2A4158;background-color:#fff" class="form-control">Back</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('sweetalert::alert')
		<!-- end:: Page -->
		<!--begin::Global Theme Bundle(used by all pages) -->
		@include('includes.scripts')
		<!--end::Global Theme Bundle -->
		{!! JsValidator::formRequest('App\Http\Requests\Compotitions', '#formcom') !!}
		{!! JsValidator::formRequest('App\Http\Requests\Register', '#formregister') !!}
		<script>
			$('#tanggal').datepicker({
				todayHighlight: true,
				orientation: "bottom left",
				autoclose: true,
				// language : 'id',
				format   : 'yyyy-mm-dd'
			});
		</script>
	</body>
	<!--end::Body-->
</html>