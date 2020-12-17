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
									MANAGE HORSE
								</h5>
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
									<li class="breadcrumb-item">
										<a href="">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="">MANAGE STABLE</a>
									</li>
									<li class="breadcrumb-item">
										<a href=""  class="text-muted">List</a>
									</li>
								</ul>
							</div>
							<div class="card mt-10">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-data table-striped" id="dataTable">
											<thead>
												<tr>
												<th scope="col">#</th>
												<th scope="col">Horse Name</th>
												<th scope="col">Birth Date</th>
												<th scope="col">Age</th>
												<th scope="col">Sex</th>
												<th scope="col">Password Number</th>
												<th scope="col">Horse Owner</th>
												<th scope="col">Horse Breeds</th>
												<th scope="col">Action</th>
												</tr>
											</thead>
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
		var name = $(this).attr('data');

		console.log(name);
        var t = $('#dataTable').DataTable({
			scrollX   : true,
			processing: true,
			// serverSide: true
			language: {
            	processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i> <br> Loading...'
			},
			ajax      : "{{ route('horse.list.json') }}",
			columns: [
				{data: 'profile', name: 'profile'},
				{data: 'horse_name', name: 'horse_name'},
				{data: 'birth_date', name: 'birth_date'},
				{data: 'age', name: 'age'},
				{data: 'sex', name: 'sex'},
				{data: 'passport_number', name: 'passport_number'},
				{data: 'horse_owner', name: 'horse_owner'},
				{data: 'horse_breeds', name: 'horse_breeds'},
				{data: 'action', name: 'action'},
			]
		});
        $("#dataTable_filter").append("<button class='btn btn-add-new ml-5' id='create'>Add New +</button>");
		$('#create').click(function(e) {
			e.preventDefault();
			location.replace("{{url('horse/create')}}");
		});

		$('#dataTable tbody').on( 'click', '.delete-horse', function (e) {
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
						url: "{{ route('horse.delete') }}",
						type: 'DELETE',
						dataType: 'json',
						data: {
							"id": id,
							"_token": "{{ csrf_token() }}",
						},
						success: function () {
							Swal.fire({
								title: "Delete Data Horse",
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

		$('#dataTable tbody').on( 'click', '.edit-horse', function (e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			location.replace("{{url('horse/edit')}}"+ '/' +id);
		});
    } );
</script>
@endpush