@extends('layout.index')
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
                            <div class="container-fluid form-page">							
                                <h5 class="title-text">
                                    ADD NEW HORSE
                                </h5>
                                <h5 class="title-text">
                                    Add your data horse here
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Horse Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="First name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Date Arrival</label>
                                                        <input type="date" name="date_arrival" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Date of Departure</label>
                                                        <input type="date" name="date_of_departure" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Birth Date</label>
                                                        <input type="date" name="birth_date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Birth Date</label>
                                                        <div class="fallback dropzone" id="my-awesome-dropzone">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="row mt-10">
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-submit">
                                                        SAVE NOW
                                                    </button>
                                                    <div class="help">
                                                        <a href="#">
                                                            Needed help?
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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