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
										<a href="{{route('stable.index')}}">MANAGE STABLE</a>
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
													<th scope="col">Name Package</th>
													<th scope="col">Date</th>
													<th scope="col">Day</th>
													<th scope="col">No Entry</th>
													<th scope="col">Status</th>
													<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($data_list as $item)
														<tr>
															<td>{{$item->name}}</td>
															<td>Pony Ride</td>
															<td>{{date('d-m-Y', strtotime($item->booking_at))}}</td>
															<td>{{date('l',strtotime($item->booking_at))}}</td>
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
													<th scope="col">Package Name</th>
													<th scope="col">Date</th>
													<th scope="col">Day</th>
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
															<td>Riding Class</td>
															<td>{{date('d-m-Y', strtotime($item->date))}}</td>
															<td>{{date('l',strtotime($item->date))}}</td>
															<td>{{date('H:i', strtotime($item->time_start))}}</td>
															<td>{{date('H:i', strtotime($item->time_end))}}</td>
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
																<a href='javascript:void(0)' data-toggle='modal' data-id='{{$item->id}}' class='btn btn-info text-center mr-2' id='openBtn' data-toggle='Detail' data-placement='top' title='Detail'>
																	<i class='fas fa-eye'></i>
																</a>
																@else
																<button data-id="{{$data_stable->id}}" data-id-slot="{{$item->id}}" class="btn btn-success text-center mr-2" type="button" id="assign{{$item->id}}">
																	<i class='fas fa-check-circle pointer-link'></i>
																</button>
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
					
					<!-- Modal-->
					<div class="modal fade" id="modalAssign" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Assign Horse And Coach</H1></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i aria-hidden="true" class="ki ki-close"></i>
									</button>
								</div>
								<div class="modal-body">
									<form action="{{route('booking_details.close')}}" id="formAssign" data-id="" method="post">
										@csrf
										<input type="hidden" name="id" id="idSlotUser" value="0">			
										<div class="form-group">
											<label>Horse</label>
											<select name="horse_id" id="horseSel" class="form-control"></select>
										</div>
										<div class="form-group">
											<label>Coach</label>
											<select name="coach_id" id="coachSel" class="form-control"></select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary font-weight-bold">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--end::Container-->

					<!-- Modal -->
					<div class="modal fade" id="modalDetail"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header ">
									<h4 class="title-text " id="title_modal" data-state="add">
										ASSIGN DETAILS
									</h4>
								</div>
								<div class="modal-body">
									<div class="row">
											<div class="col-sm-8">
												<p class="mb-0">Name</p>
												<h4 class="mb-4" id="name"></h4>
												<p class="mb-0">Horse</p>
												<h4 class="mb-4" id="horse"></h4>
												<p class="mb-0">Coach</p>
												<h4 class="mb-4" id="coach"></h4>
											</div>
										</div>
									</div>
									<div class="modal-footer">											
										<button data-dismiss="modal" class="btn btn-add-new font-weight-bold">Close</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Modal -->
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

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	
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

		@foreach ($data_list as $item)
		$('#dataTable tbody').on( 'click', '#assign{{$item->id}}', function (e) {
			e.preventDefault();
			var id = $(this).data('id');
			var idSlot = $(this).data('id-slot');
			var $horse = $("#horseSel");
			var $coach = $("#coachSel");
			var $button = $("#assign{{$item->id}}");
			$horse.find('option').remove();
			$coach.find('option').remove();
			var a = $('#formAssign').data('id'); //getter
			$('#formAssign').attr("data-id","{{$item->id}}"); //setter
			var form = $.ajax({
				type: "GET",
				async: false,
				url: '{{route("home")}}/booking-detail/confirmation/json',
				data: {
					id: id,
					id_slot: idSlot,
				},
				dataType: 'json',
				success: function(data) {
					$('#idSlotUser').val(data[2]);
					var len = 0;
					if(data != null){
						len = data.length;
					}

					if(len > 0){
						// Read data and create <option >
						for(var i=0; i<len; i++){

							var horse_id = data[0][i].id;
							var horse_name = data[0][i].name;
							var coach_id = data[1][i].id;
							var coach_name = data[1][i].name;

							var option1 = "<option value='"+horse_id+"'>"+horse_name+"</option>"; 
							var option2 = "<option value='"+coach_id+"'>"+coach_name+"</option>"; 

							$horse.append(option1);
							$coach.append(option2);
						}
					}
				},
				error: function (error) {
					console.log(error);
				}
			});	
			$('#modalAssign').modal('show');
			$("#formAssign").submit(function(e) {
				e.preventDefault();
				var form = this;

				Swal.fire({
					title: "Are you sure?",
					icon: "warning",
					confirmButtonText: "Confirm",
					confirmButtonColor: '#141D31',
					showCancelButton: true,
					reverseButtons: true
				}).then(function(result) {
					if (result.value) {
						form.submit();
					}
				});
			});
			// Swal.fire({
			// 	title: "Are you sure?",
			// 	text: "Confirmation!" ,
			// 	icon: "warning",
			// 	confirmButtonText: "Confirm",
			// 	confirmButtonColor: '#141D31',
			// 	showCancelButton: true,
			// 	reverseButtons: true
			// }).then(function(result) {
			// 	if (result.value) {
			// 	}
			// });
		});
		@endforeach

		$('body').on( 'click', '#openBtn', function () {
                var id = $(this).data('id');
                $.get('{{route("booking_details.assign_details")}}/' + id , function (data) {
                    
                    $('#name').html(data.user.name);
                    $('#horse').html(data.horse.name);
                    $('#coach').html(data.coach.name);
                    $('#modalDetail').modal('show');
                })
            });
    } );
</script>
@endpush