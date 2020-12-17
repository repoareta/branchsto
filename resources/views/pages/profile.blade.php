@extends('layout.index')
<!--begin::Main-->

		<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
		@include('partials._header-mobile')
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--[html-partial:include:{"file":"partials/_aside.html"}]/-->
				@include('partials._aside')
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header.html"}]/-->
					

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
												Ghoni Abdullah
											</div>
											<div class="location">
												<img src="{{url('assets/media/branchsto/location-icon.svg')}}" alt="">
												Jakarta Selatan
											</div>
										</div>
									</section>
									<div class="premium-or-not">
										<div class="card-premium">
											<div class="row">
												<div class="col-4">
													<div class="card-body">
														<img src="{{url('assets/media/branchsto/gem-gold-icon.png')}}" alt="">
														<div class="title">Premium</div>
														<div class="subtitle">Resgitered</div>										
													</div>
												</div>
												<div class="col-4">
													<div class="card-body">
														<img src="{{url('assets/media/branchsto/chess-gold-icon.png')}}" alt="">
														<div class="title">Stable</div>
														<div class="subtitle">Resgitered</div>												
													</div>
												</div>
												<div class="col-4">
													<div class="card-body">
														<img src="{{url('assets/media/branchsto/event-silver-icon.png')}}" alt="">
														<div class="title">EO</div>
														<div class="subtitle">Resgitered</div>												
													</div>
												</div>
											</div>
										</div>
									</div>
									<section class="profile-body">
										<div class="feature">
											<h5>FEATURE</h5>
											<div class="row">
												<div class="col-md-3">
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
												<div class="col-md-3">
													<div class="card-feature">
														<div class="row">
															<div class="col-10">
																<div class="text">
																	<div class="title-card">Management Club</div>
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
												<div class="col-md-3">
													<div class="card-feature">
														<div class="row">
															<div class="col-10">
																<div class="text">
																	<div class="title-card">Management Stable</div>
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
												<div class="col-md-3">
													<div class="card-feature">
														<div class="row">
															<div class="col-10">
																<div class="text">
																	<div class="title-card">Management Horse</div>
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

					<!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
					@include('partials._footer')
				</div>

				<!--end::Wrapper-->

				<!--[html-partial:include:{"file":"partials/_sidebar.html"}]/-->
				

			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->