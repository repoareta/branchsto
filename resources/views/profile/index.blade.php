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
									@if (Auth::user()->photo)
										<img src="{{asset('storage/myprofile/photo/'.Auth::user()->photo)}}" alt="" height="100px" class="rounded-circle">										
									@else
										<img src="{{url('assets/media/branchsto/profile.png')}}" alt="" class="rounded-circle">
									@endif										
									<div class="username">
										{{Auth::user()->name}}
									</div>
									<div class="location">
										<img src="{{url('assets/media/branchsto/email.svg')}}" alt="">
										{{Auth::user()->email}}
									</div>
								</div>
							</section>
							<div class="premium-or-not">
								<div class="card-premium">
									{{-- <div class="card-body-premium">
										<img src="{{url('assets/media/branchsto/gem-silver-icon.svg')}}" alt="">
										<div class="title">Premium</div>
										<div class="subtitle">Unregistered</div>										
									</div> --}}
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
													<span class="label label-lg label-light-warning label-inline">Pending Approval Step 1.</span>											
											</div>
										@elseif ($data->approval_status == 'Email Sent')
											<div class="card-body-premium pointer-link" data-toggle="modal" id="form-stable-pending">
												<img src="{{url('assets/media/branchsto/chess-gold-icon.svg')}}" alt="">
												<div class="title">Stable</div>
												<div class="subtitle">Registered</div>	
													<span class="label label-lg label-light-warning label-inline">Pending Approval Step 2.</span>											
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
									{{-- <div class="card-body-premium">
										<img src="{{url('assets/media/branchsto/event-silver-icon.svg')}}" alt="">
										<div class="title">EO</div>
										<div class="subtitle">Unregistered</div>												
									</div> --}}
								</div>
							</div>
							<section class="profile-body">
								<div class="feature">
									<h5>FEATURE</h5>
									<div class="row">
										{{-- <div class="col-md-4 mb-5">
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
										</div> --}} 
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
																	<a href="#" data-toggle="modal" data-target="#key-stable">
																		<div class="title-card">Management Stable</div>
																		<div class="subtitle-card">Add or manage your stable</div>
																	</a>
																@else
																	<a href="#" data-toggle="modal" data-target="#key-stable">
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

<div class="modal fade" id="key-stable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title-text" id="exampleModalLabel">INPUT KEY STABLE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="kt-form" id="formstable" action="{{route('stable.key.stable')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Key Stable</label>
                            <input type="text" name="key" class="form-control" placeholder="Key Stable" autocomplete="off">
                        </div>
                    </div>               
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-dark font-weight-bold" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dark font-weight-bold">Submit</button>
                    </div>
                    {{-- <div class="form-group row">
                        <div class="col-4">
                            <div class="help">
                                <a href="#">
                                    Needed help?
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
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