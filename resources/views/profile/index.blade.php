@extends('layout.index')
@section('content')
<!--begin::Main-->
@include('partials._header-mobile')
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">
		@include('partials._aside')
		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
			@include('partials._header')
			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid profile">
							<section class="profile-header">
								<div class="profile">
									<img src="{{url('assets/media/branchsto/profile.png')}}" alt="" class="rounded-circle">
									<div class="username">
										{{Auth::user()->name}}
									</div>
									<div class="location">
										<img src="{{url('assets/media/branchsto/location-icon.svg')}}" alt="">
										{{Auth::user()->alamat}}
									</div>
								</div>
							</section>
							<div class="premium-or-not">
								<div class="card-premium">
									<div class="card-body-premium">
										<img src="{{url('assets/media/branchsto/gem-silver-icon.svg')}}" alt="">
										<div class="title">Premium</div>
										<div class="subtitle">Unregistered</div>										
									</div>
									@if ($data == null)
										<div class="card-body-premium pointer-link" data-toggle="modal" data-target="#modalStableRegist">
											<img src="{{url('assets/media/branchsto/chess-silver-icon.svg')}}" alt="">
											<div class="title">Stable</div>
											<div class="subtitle">Unregistered</div>												
										</div>
									@else
										@if ($data->approval_status == null)
											<div class="card-body-premium pointer-link" data-toggle="modal" id="form-stable-pending">
												<img src="{{url('assets/media/branchsto/chess-gold-icon.svg')}}" alt="">
												<div class="title">Stable</div>
												<div class="subtitle">Registered</div>	
													<span class="label label-lg label-light-warning label-inline">Pending.</span>											
											</div>
										@else
											<div class="card-body-premium pointer-link" data-toggle="modal" id="form-stable-ready">
												<img src="{{url('assets/media/branchsto/chess-gold-icon.svg')}}" alt="">
												<div class="title">Stable</div>
												<div class="subtitle">Registered</div>	
													<span class="label label-lg label-light-success label-inline">Ready to Sell.</span>											
											</div>
										@endif

									@endif
									<div class="card-body-premium">
										<img src="{{url('assets/media/branchsto/event-silver-icon.svg')}}" alt="">
										<div class="title">EO</div>
										<div class="subtitle">Unregistered</div>												
									</div>
								</div>
							</div>
							<section class="profile-body">
								<div class="feature">
									<h5>FEATURE</h5>
									<div class="row">
										<div class="col-md-4 mb-5">
											<div class="card-feature">
												<div class="row">
													<div class="col-10">
														<div class="text">
															<div class="title-card">Management Event</div>
															<div class="subtitle-card">Add or manage your event</div>
														</div>
													</div>
													<div class="col-2 align-self-center">
														<div class="shape">
															<img src="{{url('assets/media/branchsto/arrow-line.svg')}}" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb-5">
											<div class="card-feature">
												<div class="row">
													<div class="col-10">
														<div class="text">
															<a href="#">
																<div class="title-card">Management Club</div>
																<div class="subtitle-card">Add or manage your club</div>
															</a>
														</div>
													</div>
													<div class="col-2 align-self-center">
														<div class="shape">
															<img src="{{url('assets/media/branchsto/arrow-line.svg')}}" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 mb-5">
											<div class="card-feature">
												<div class="row">
													<div class="col-10">
														<div class="text pointer-link">
															@if ($data == null)
																<div class="title-card">Management Stable</div>
																<div class="subtitle-card">Add or manage your stable</div>
															@else
																@if ($data->approval_status == null)
																	<a href="#" id="form-stable-pending1">
																		<div class="title-card">Management Stable</div>
																		<div class="subtitle-card">Add or manage your stable</div>
																	</a>
																@else
																	<a href="{{route('stable.index')}}" >
																		<div class="title-card">Management Stable</div>
																		<div class="subtitle-card">Add or manage your stable</div>
																	</a>
																@endif
															@endif
														</div>
													</div>
													<div class="col-2 align-self-center">
														<div class="shape">
															<img src="{{url('assets/media/branchsto/arrow-line.svg')}}" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
										{{-- <div class="col-md-3">
											<div class="card-feature">
												<div class="row">
													<div class="col-10">
														<div class="text">
															<a href="{{route('horse.index')}}">
																<div class="title-card">Management Horse</div>
																<div class="subtitle-card">Add or manage your event</div>
															</a>
														</div>
													</div>
													<div class="col-2 align-self-center">
														<div class="shape">
															<img src="{{url('assets/media/branchsto/arrow-line.svg')}}" alt="">
														</div>
													</div>
												</div>
											</div>
										</div> --}}
									</div>
								</div>
							</section>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>						
			</div>
			<!--end::Content-->
			@include('partials._footer')
		</div>
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->

<!--begin::Modal Stable-->
@include('management_stable.create')
<!--end::Modal Stable-->

@endsection
@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\StableStore', '#formstable') !!}
<script type="text/javascript">
    $(document).ready( function () {
		$('#form-stable-pending').click(function(e) {
			e.preventDefault();
			Swal.fire({
				title: "Thank you for completing the riding class attribute registration form. We'll send you a notification in a few moments.",
				icon: "info",
			});
		});
		$('#form-stable-pending1').click(function(e) {
			e.preventDefault();
			Swal.fire({
				title: "Thank you for completing the riding class attribute registration form. We'll send you a notification in a few moments.",
				icon: "info",
			});
		});
		$('#form-stable-ready').click(function(e) {
			e.preventDefault();
			Swal.fire({
				title: "Your stable is ready to use. Good luck.",
				icon: "info",
			});
		});
	});
</script>
@endsection