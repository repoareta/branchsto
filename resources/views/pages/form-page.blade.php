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
                                <div class="row">
                                    <div class="col-md-9">
                                        <form>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="First name">
                                                </div>
                                                <div class="col">
                                                    <label>Select Stable</label>
                                                    <input type="text" name="stable" class="form-control" placeholder="First name">
                                                </div>
                                                <div class="col">
                                                    <label>Age</label>
                                                    <input type="number" name="age" class="form-control" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-4">
                                                    <label>Stable</label>
                                                    <select name="stable" class="form-control">
                                                        <option value="branchsto">Branchsto</option>
                                                    </select>
                                                </div>
                                                <div class="col-4">
                                                    <label>Package</label>
                                                    <select name="package" class="form-control">
                                                        <option value="regular">Regular Class</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <h2 class="title-text mt-10 mb-5">
                                                Schedule Date
                                            </h2>
                                            <div class="row">
                                                <div class="col">
                                                    <label>Session 1</label>
                                                    <input type="date" name="session1" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label>Session 2</label>
                                                    <input type="date" name="session2" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label>Session 3</label>
                                                    <input type="date" name="session3" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-10">
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-submit">
                                                        BOOKING NOW
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