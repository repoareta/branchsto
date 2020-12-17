@extends('layout.index')
@push('addon-style')
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
                                <div class="stable-body">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <h5 class="title-text mb-0">
                                            ADD HORSE
                                        </h5>
                                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                            <li class="breadcrumb-item">
                                                <a href="">HOME</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="">MANAGE STABLE</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">ADD HORSE</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <form action="">											
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="" placeholder="Horse name">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="date" class="form-control" name="" placeholder="Birth Date">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <input type="number" class="form-control" name="" placeholder="Age">
                                                    </div>
                                                    <div class="col-4">
                                                        <select class="form-control" name="">
                                                            <option value="">Sex</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <input type="number" class="form-control" name="" placeholder="Passport Number">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" name="" placeholder="Horse Owner">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-4">
                                                        <select class="form-control" name="">
                                                            <option value="">Horse Breeds</option>
                                                            <option value="Indonesian">Indonesian</option>
                                                            <option value="European">European</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                                    <button class="btn btn-secondary">RESET</button>
                                                </div>
                                            </form>
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
@endsection
@push('add-script')
<script src="{{url('assets/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable();
        $("#dataTable_filter").append("<button class='btn btn-add-new'>Add New +</button>")
    } );
</script>
@endpush