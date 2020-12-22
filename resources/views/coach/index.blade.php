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
									MANAGE COACH
								</h5>
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
									<li class="breadcrumb-item">
										<a href="{{route('competitions.index')}}">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}">MANAGE STABLE</a>
									</li>
									<li class="breadcrumb-item">
										<a href="" class="text-muted">LIST COACH</a>
									</li>
								</ul>
							</div>
							<div class="card mt-10">
								<div class="card-body">
									<table class="table table-striped" id="dataTable">
										<thead>
											<tr>
											<th scope="col">#</th>
											<th scope="col">Coach Name</th>
											<th scope="col">Birth Date</th>
											<th scope="col">Age</th>
											<th scope="col">Sex</th>
											<th scope="col">Experience</th>
											<th scope="col">Certified</th>
											<th scope="col">Action</th>
											</tr>
										</thead>
									</table>
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
<script>
    $(document).ready( function () {
		var t = $('#dataTable').DataTable({
			scrollX   : true,
			processing: true,
			// serverSide: true
			language: {
            	processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
			},
			ajax      : "{{ route('coach.list.json') }}",
			columns: [
				{data: 'profile', name: 'profile'},
				{data: 'coach_name', name: 'coach_name'},
				{data: 'birth_date', name: 'birth_date'},
				{data: 'age', name: 'age'},
				{data: 'sex', name: 'sex'},
				{data: 'experience', name: 'experience'},
				{data: 'certified', name: 'certified'},
				{data: 'action', name: 'action'},
			]
		});        
		$("#dataTable_filter").append("<button class='btn btn-add-new ml-5' id='create'>Add New +</button>");
		$('#create').click(function(e) {
			e.preventDefault();
			location.replace("{{url('coach/create')}}");
		});

		$('#dataTable tbody').on( 'click', '.delete-coach', function (e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			Swal.fire({
				title: "Are you sure?",
				text: "You won't be able to revert this!" ,
				icon: "warning",
				confirmButtonText: "Delete",
				confirmButtonColor: '#141D31',
				showCancelButton: true,
				reverseButtons: true
			}).then(function(result) {
				if (result.value) {
					$.ajax({
						url: "{{ route('coach.delete') }}",
						type: 'DELETE',
						dataType: 'json',
						data: {
							"id": id,
							"_token": "{{ csrf_token() }}",
						},
						success: function () {
							Swal.fire({
								title: "Delete Data coach",
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

		$('#dataTable tbody').on( 'click', '.edit-coach', function (e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			location.replace("{{url('coach/edit')}}"+ '/' +id);
		});
    } );
</script>
@endpush