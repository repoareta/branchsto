@extends('layout.admin')
@push('add-style')
    
@endpush
@section('content')
<!--begin::Main-->

		<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
		@include('partials.admin._header-mobile')
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--[html-partial:include:{"file":"partials/_aside.html"}]/-->
				@include('partials.admin._aside')
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header.html"}]/-->
					@include('partials.admin._header')

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container-fluid stable">
                                <div class="stable-body data">
                                    <a href="" class="btn btn-back-page">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                            <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                            <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </a>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <h1 class="title-text mb-0">
                                            USER PAYMENT APPROVAL
                                        </h1>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-data table-striped" id="dataTable">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Package Name</th>
                                                        <th scope="col">User Name</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Transfer Image</th>
                                                        <th scope="col">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>Package A</td>
                                                        <td>
                                                            Lukas Mambo
                                                        </td>
                                                        <td>Rp. 100.000</td>												
                                                        <td>
                                                            <img src="../assets/media/branchsto/payment-logo.svg" alt="" class="img-thumbnail">
                                                        </td>												
                                                        <td>
                                                            <a href="#" class="btn btn-success text-center mr-2">
                                                                <i class="fas fa-check-circle"></i>
                                                            </a>
                                                            <a href="#" class="btn btn-danger text-center mr-2">
                                                                <i class="fas fa-ban"></i>
                                                            </a>
                                                        </td>
                                                      </tr>																																																																																																																																																																																																																																																																																																																																																																																		
                                                    </tbody>
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

					<!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
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
			$('#dataTable').DataTable();
			
		} );
	</script>
<!--end::Page Scripts-->
</script>
@endpush