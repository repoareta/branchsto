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
                                                <a href="" class="text-muted">List</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <table class="table table-striped" id="dataTable">
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
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <img src="assets/media/branchsto/horse.png" width="40px" height="40px" alt="">
                                                        Colleen
                                                    </td>
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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
                                                    <td>Birth Date</td>
                                                    <td>Age</td>
                                                    <td>Sex</td>
                                                    <td>Password Number</td>
                                                    <td>Horse Owner</td>
                                                    <td>Horse Breeds</td>											
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