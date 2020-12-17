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
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container-fluid form-page">							
								<h5 class="title-text">
									BOOKING SCHEDULE
								</h5>
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Horse Name</th>
											<th scope="col">Birthday</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>
												<img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
												Nick
											</td>
											<td>12-03-2014</td>
											<td>
												<a href="#" class="mr-2">
													<i class="fas fa-pen"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>
												<img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
												Nick
											</td>
											<td>12-03-2014</td>
											<td>
												<a href="#" class="mr-2">
													<i class="fas fa-pen"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>
												<img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
												Nick
											</td>
											<td>12-03-2014</td>
											<td>
												<a href="#" class="mr-2">
													<i class="fas fa-pen"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>
												<img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
												Nick
											</td>
											<td>12-03-2014</td>
											<td>
												<a href="#" class="mr-2">
													<i class="fas fa-pen"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
										<tr>
											<th scope="row">1</th>
											<td>
												<img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
												Nick
											</td>
											<td>12-03-2014</td>
											<td>
												<a href="#" class="mr-2">
													<i class="fas fa-pen"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-eye"></i>
												</a>
												<a href="#" class="mr-2">
													<i class="fas fa-trash"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
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