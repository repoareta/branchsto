@extends('layout.index')
@push('addon-style')

@endpush
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
				<!--begin::Entry-->
				<div class="d-flex flex-column-fluid">
					<!--begin::Container-->
					<div class="container-fluid stable">
						<div class="stable-body">
							<a href="{{route('stable.index')}}" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
							<div class="d-flex justify-content-start align-items-center">
								<h5 class="title-text mb-0">
									MANAGE BOOKING
								</h5>
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
									<li class="breadcrumb-item">
										<a href="{{route('competitions.index')}}">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}">MANAGE BOOKING</a>
									</li>
									<li class="breadcrumb-item">
										<a href=""  class="text-muted">LIST BOOKING</a>
									</li>
								</ul>
							</div>
							<div class="card mt-10">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-data table-striped" id="dataTable">
											@if ($session_usage == 'pony_ride')
												<thead>
													<tr>
													<th scope="col">Name</th>
													<th scope="col">Date</th>
													<th scope="col">No Entry</th>
													<th scope="col">Status</th>
													<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($data_list as $item)
														<tr>
															<td>{{$item->name}}</td>
															<td>{{$item->booking_at}}</td>
															<td>{{$item->queue_no}}</td>
															<td>
																@if($item->queue_status == 'Close')
																	<span class='label label-lg label-light-danger label-inline'>Close</span>
																@else
																	<span class='label label-lg label-light-success label-inline'>Active</span>
																@endif
															</td>
															<td>
																@if($item->queue_status == 'Close')
																	<a href='#' class='btn btn-danger text-center mr-2 '>
																		<i class='fas fa-ban pointer-link'></i>                    
																	</a>
																@else
																	<a href='#' data-id="{{$item->id}}" data-status="{{$session_usage}}" class="btn btn-success text-center mr-2" id="close">
																		<i class='fas fa-check-circle pointer-link'></i>                  
																	</a>
																@endif
															</td>
														</tr>
													@endforeach
												</tbody>
											@else	
												<thead>
													<tr>
													<th scope="col">Name</th>
													<th scope="col">Date</th>
													<th scope="col">Time Start</th>
													<th scope="col">Time End</th>
													<th scope="col">Status</th>
													<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($data_list as $item)
														<tr>
															<td>{{$item->name}}</td>
															<td>{{$item->date}}</td>
															<td>{{$item->time_start}}</td>
															<td>{{$item->time_end}}</td>
															<td>
																@if($item->qr_code_status == 'Close')
																	<span class='label label-lg label-light-danger label-inline'>Close</span>
																@else
																	<span class='label label-lg label-light-success label-inline'>Active</span>
																@endif
															</td>
															<td>
																@if($item->qr_code_status == 'Close')
																	<a href='#' class='btn btn-danger text-center mr-2 '>
																		<i class='fas fa-ban pointer-link'></i>                    
																	</a>
																@else
																	<a href='#' data-id="{{$item->id}}" data-status="{{$session_usage}}" class="btn btn-success text-center mr-2" id="close">
																		<i class='fas fa-check-circle pointer-link'></i>                  
																	</a>
																@endif
															</td>
														</tr>
													@endforeach
												</tbody>
											@endif
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end::Container-->
				</div>
				<!--end::Entry-->
			</div>
			<!--end::Content-->
			@include('partials._footer')
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
<script type="text/javascript">
    $(document).ready( function () {
        var t = $('#dataTable').DataTable({
			scrollX   : true,
			processing: true,
			// serverSide: true
			language: {
            	processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
			},
			
		});

		$('#dataTable tbody').on( 'click', '#close', function (e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			var session_usage = $(this).attr('data-status');
			console.log(id);
			Swal.fire({
				title: "Are you sure?",
				text: "Close!" ,
				icon: "warning",
				confirmButtonText: "Close",
				confirmButtonColor: '#141D31',
				showCancelButton: true,
				reverseButtons: true
			}).then(function(result) {
				if (result.value) {
					$.ajax({
						url: "{{ route('close') }}",
						type: 'POST',
						dataType: 'json',
						data: {
							"id": id,
							"session_usage": session_usage,
							"_token": "{{ csrf_token() }}",
						},
						success: function () {
							Swal.fire({
								title: "Close Success",
								text: "success",
								icon: "success",
								buttonsStyling: false,
								confirmButtonText: "Ok",
								customClass: {
									confirmButton: "btn btn-dark"
								}
							}).then(function() {
								location.reload();
							});
						},
						error: function () {
							alert("An error occurred, please try again later.");
						}
					});
				}
			});
		});
    } );
</script>
@endpush