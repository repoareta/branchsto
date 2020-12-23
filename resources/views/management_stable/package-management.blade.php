@extends('layout.index')
@push('addon-style')

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
                                        <h4 class="title-text mb-0">
                                            LIST PACKAGES
                                        </h4>
                                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                            <li class="breadcrumb-item">
                                                <a href="">HOME</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="">MANAGE STABLE</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">LIST</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <table class="table table-striped" id="dataTable">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name class or rides</th>
                                                    <th scope="col">Start Date</th>
                                                    <th scope="col">End Date</th>
                                                    <th scope="col">Package</th>
                                                    <th scope="col">Capacity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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
                                                        Example class name
                                                    </td>
                                                    <td>23-12-20 14:00</td>
                                                    <td>23-12-20 16:00</td>
                                                    <td>3</td>
                                                    <td>3</td>
                                                    <td>Rp. 500.000</td>
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