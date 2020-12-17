@extends('layout.index')
@push('add-style')
<link rel="stylesheet" href="{{url('assets/datatables/datatables.min.css')}}" type="text/css">
@endpush
@section('content')
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
								<h5 class="title-text">
									TABLE LIST HORSE
								</h5>
								<a href="#" class="btn btn-back">
									BACK
								</a>
								<a href="#" class="btn btn-add">
									ADD HORSE
								</a>
								<div class="card mt-10">
									<div class="card-body">
										<table class="table table-striped" id="dataTable">
											<thead>
											  <tr>
												<th scope="col">#</th>
												<th scope="col">Horse Name</th>
												<th scope="col">Date Arrival</th>
												<th scope="col">Date of Departure</th>
												<th scope="col">Birthday</th>
												<th scope="col">Action</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<th scope="row">1</th>
												<td>
													<img src="{{url('assets/media/branchsto/horse.png')}}" width="40px" height="40px" alt="">
													Colleen
												</td>
												<td>12-03-2014</td>
												<td>12-03-2014</td>
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
													<img src="{{url('assets/media/branchsto/horse.png')}}" width="40px" height="40px" alt="">
													Colleen
												</td>
												<td>12-03-2014</td>
												<td>12-03-2014</td>
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
													<img src="{{url('assets/media/branchsto/horse.png')}}" width="40px" height="40px" alt="">
													Colleen
												</td>
												<td>12-03-2014</td>
												<td>12-03-2014</td>
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
													<img src="{{url('assets/media/branchsto/horse.png')}}" width="40px" height="40px" alt="">
													Colleen
												</td>
												<td>12-03-2014</td>
												<td>12-03-2014</td>
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
@endsection
@push('add-script')
<script src="{{url('assets/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>
@endpush