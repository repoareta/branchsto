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
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-header">
                            <div class="profile">
                                <div class="profile-item">
                                    <img src="assets/media/branchsto/club-profile.png" alt="" class="rounded-circle stable-img">
                                    <div class="text">
                                        <div class="stable-name">
                                            HRS CLUB INDONESIA
                                        </div>
                                        <div class="stable-desc">
                                            A strong club with selected horses and riders
                                        </div>
                                        <div class="email-number">
                                            <div class="email">
                                                <img src="assets/media/branchsto/email.svg" alt="">
                                                support@hrc.com
                                            </div>
                                            <div class="number">
                                                <img src="assets/media/branchsto/cell.svg" alt="">
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
                            <ul class="nav step-form">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#">My Horse</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">My Rider</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">Package</a>
                                </li>
                            </ul>
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
                                                <img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
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
                                                <img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
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
                                                <img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
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
                                                <img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
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

<!-- Modal-->
<div class="modal fade" id="form-create" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTER HORSE STABLE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="height: 500px;">
				<form action="{{route('horse.store')}}" method="POST" id="formshorse" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label>Horse Name</label>
								<input type="text" name="horse_name" class="form-control" placeholder="Horse Name">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender">
									<option value="Jantan">Jantan</option>
									<option value="Betina">Betina</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Birth</label>
								<input type="text" name="birth" class="form-control" placeholder="Birth">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Type</label>
								<input type="text" name="type" class="form-control" placeholder="Type">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label>Descendant</label>
								<input type="text" name="descendant" class="form-control" placeholder="Descendant">
							</div>
						</div>
						<div class="col-6">
							<div class="image-input" id="kt_image_2">
								<div class="image-input-wrapper" style="background-image: url({{url('assets/media/users/default.jpg')}})"></div>
								<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
									<i class="fa fa-pen icon-sm text-muted"></i>
									<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="profile_avatar_remove" />
								</label>
								<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
									<i class="ki ki-bold-close icon-xs text-muted"></i>
								</span>
							</div>
							<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
						</div>
					</div>	
					<div class="modal-footer">
						<button type="button" class="btn btn-light-dark font-weight-bold" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-dark font-weight-bold">SAVE</button>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>

@endsection
@push('add-script')
<script src="{{url('assets/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
    } );
</script>
<script src="{{url('assets/dropzone/dist/dropzone.js')}}"></script>
<script src="{{url('assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<script>
	// jQuery
	$("#my-awesome-dropzone").dropzone({ url: "/file/post" });
</script>
{!! JsValidator::formRequest('App\Http\Requests\Horse', '#formshorse') !!}
@endpush
