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
					@include('partials._header')

					<!--begin::Content-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid stable">
							<div class="stable-header">
								<div class="profile">
									<div class="profile-item">
										<img src="{{url('assets/media/branchsto/stable-profile.png')}}" alt="" class="rounded-circle stable-img">
										<div class="text">
											<div class="stable-name">
												EXAMPLE STABLE NAME
											</div>
											<div class="stable-desc">
												A strong club with selected horses and riders
											</div>
											<div class="email-number">
												<div class="email">
													<img src="{{url('assets/media/branchsto/email.svg')}}" alt="">
													support@hrc.com
												</div>
												<div class="number">
													<img src="{{url('assets/media/branchsto/cell.svg')}}" alt="">
													+62812 8834 1128
												</div>
											</div>
										</div>
									</div>
									<a href="#" class="btn btn-edit">
										<i class="fas fa-pen"></i>
										Edit stable profile
									</a>
								</div>
							</div>
							<div class="stable-body">
								<div class="row">
									<div class="col-md-4">
										<a href="#">
											<div class="card-action">
												<div class="image">
													<img src="{{url('assets/media/branchsto/horse_deal_icon.svg')}}" alt="">
												</div>
												<div class="text">
													<div class="title-card">Horse</div>
													<div class="subtitle-card">Manage all your horse here</div>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#">
											<div class="card-action">
												<div class="image">
													<img src="{{url('assets/media/branchsto/horse_deal_icon.svg')}}" alt="">
												</div>
												<div class="text">
													<div class="title-card">Horse</div>
													<div class="subtitle-card">Manage all your horse here</div>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#">
											<div class="card-action">
												<div class="image">
													<img src="{{url('assets/media/branchsto/horse_deal_icon.svg')}}" alt="">
												</div>
												<div class="text">
													<div class="title-card">Horse</div>
													<div class="subtitle-card">Manage all your horse here</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::Container-->
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