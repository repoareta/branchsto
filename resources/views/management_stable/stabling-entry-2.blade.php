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
                                <ul class="nav step-form">
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">Step 1 - Stabling Form</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link active" href="#">Step 2 - Entry Form</a>
                                    </li>
                                </ul>
                                <h5 class="title-text">
                                    ENTRY FORM
                                </h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Class Number</label>
                                                        <select name="name" class="form-control">
                                                            <option value="asjkQIONS">asjkQIONS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class=" mt-10 mb-5 d-flex justify-content-between">
                                                <h2 class="title-text">
                                                    Add Rider
                                                </h2>
                                                <div class="action-table">
                                                    <button type="button" class="btn btn-action" data-toggle="modal" data-target="#modalSelectRider">
                                                        Select Rider
                                                    </button>
                                                    <button type="button" class="btn btn-action" data-toggle="modal" data-target="#modalRegisterRider">
                                                        <span>Register New Rider</span>
                                                        <i class="fas fa-plus-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <table class="table stabling-form">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Rider Name</th>
                                                    <th scope="col">Days</th>
                                                    <th scope="col">Fee</th>
                                                    <th scope="col">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>5</td>
                                                    <td>5.000.000</td>
                                                    <td>
                                                        <a href="#" data-toggle="modal" data-target="#modalDetailRider" class="mr-2">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="#" class="mr-2">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>5</td>
                                                    <td>5.000.000</td>
                                                    <td>
                                                        <a href="#" class="mr-2">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="#" class="mr-2">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>5</td>
                                                    <td>5.000.000</td>
                                                    <td>
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
                                            <div class="row mt-10">
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-submit">
                                                        NEXT STEP
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
    
                                <!-- Modal-->
                                <div class="modal fade" id="modalRegisterRider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-end">
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="title-text text-center">
                                                    REGISTER RIDER TABLE
                                                </h2>
                                                <form>
                                                    <div class="form-group">
                                                      <label>Rider Name</label>
                                                      <input type="text" class="form-control" name="name" placeholder="Enter rider name...">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Date Arrival</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Date of Deoarture</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Birth Date</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Total Staling Days</label>
                                                      <select name="" id="" class="form-control">
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stabling Fee</label>
                                                        <input type="number" class="form-control" name="name" placeholder="Enter stabling fee...">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" name="" class="form-control" id="">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">											
                                                <button type="button" class="btn btn-submit font-weight-bold">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalSelectRider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-end">
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="title-text text-center">
                                                    SELECT RIDER
                                                </h2>
                                                <form>
                                                    <div class="form-group">
                                                      <label>Rider Name</label>
                                                      <select name="" id="" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Date Arrival</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Date of Deoarture</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Birth Date</label>
                                                      <input type="date" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group">
                                                      <label>Total Staling Days</label>
                                                      <select name="" id="" class="form-control">
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stabling Fee</label>
                                                        <input type="number" class="form-control" name="name" placeholder="Enter stabling fee...">
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="assets/media/branchsto/kuda.png" alt="" class="img-thumbnail">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">											
                                                <button type="button" class="btn btn-submit font-weight-bold">SAVE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalDetailRider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header justify-content-end">
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-end">
                                                    <a href="#" class="ml-5">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <a href="#" class="ml-5">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                                <div class="header-kuda">
                                                    <img src="assets/media/branchsto/profile-kuda.png" alt="">
                                                    <span>Kathryn Murphy</span>
                                                </div>
                                                <div class="detail-kuda">
                                                    <div class="text">
                                                        Date Arrival : 12-05-2020
                                                    </div>
                                                    <div class="text">
                                                        Birth day : 02-04-2015
                                                    </div>
                                                    <div class="text">
                                                        Date of departure : 16-05-2020
                                                    </div>
                                                    <div class="text">
                                                        Total stabling days : 5 days
                                                    </div>
                                                    <div class="text">
                                                        Stabling fee : 5.000.000
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">											
                                                <button type="button" class="btn btn-submit font-weight-bold">SAVE</button>
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