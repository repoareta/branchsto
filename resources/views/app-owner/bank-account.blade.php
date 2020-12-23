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
                                        <h5 class="title-text mb-0">
                                            Bank Account Management
                                        </h5>
                                    </div>
                                    <div class="card mt-10">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-data table-striped" id="dataTable">
                                                    <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Bank Account Number</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Branch</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Action</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                                                            11290983139121
                                                        </td>
                                                        <td>Stable Professional</td>
                                                        <td>BRI</td>													
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/bca-logo.png')}}" alt="" class="img-thumbnail">
                                                        </td>
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
                            </div>
    
                            <!-- Modal -->
                            <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header justify-content-end">
                                            
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="title-text ">
                                                ADD BANK ACCOUNT
                                            </h2>
                                            <form>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>BANK ACCOUNT</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Bank Account Number">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <label>Branch</label>
                                                        <input type="text" class="form-control" name="branch" placeholder="Branch">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Image Bank</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="files" multiple class="custom-file-input form-control" id="customFileLogo">
                                                            <label class="custom-file-label" for="customFileLogo">Bank Logo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">											
                                                <button class="btn btn-secondary">RESET</button>
                                                <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
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

			</div>

			<!--end::Page-->
		</div>

<!--end::Main-->
@endsection
@push('add-script')
	<script>
		$(document).ready( function () {
			$('#dataTable').DataTable();
            $("#dataTable_filter").append("<button class='btn btn-add-new ml-5' data-toggle='modal' data-target='#modalAdd'>Add New +</button>")
		} );
	</script>
<!--end::Page Scripts-->
</script>
@endpush