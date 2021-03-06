@extends('layout.index')
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
                <div class="d-flex flex-column-fluid stable">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Profile Personal Information-->
                        <div class="d-flex flex-row">
                            <!--begin::Aside-->
                            <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                                <!--begin::Profile Card-->
                                <div class="card card-custom card-stretch">
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::User-->
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                                @if ($data->photo)
                                                    <div class="symbol-label" style="background-image:url('{{asset('storage/myprofile/photo/'.$data->photo)}}')"></div>
                                                @else
                                                    <div class="symbol-label" style="background-image:url('{{url('assets/media/branchsto/profile.png')}}')"></div>
                                                @endif
                                                <i class="symbol-badge bg-success"></i>
                                            </div>
                                            <div>
                                                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{$data->name}}</a>
                                                {{-- <div class="text-muted">Application Developer</div> --}}
                                            </div>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Contact-->
                                        <div class="py-9">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Email:</span>
                                                <a href="#" class="text-muted text-hover-primary">{{$data->email}}</a>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="font-weight-bold mr-2">Phone:</span>
                                                <span class="text-muted">{{$data->phone}}</span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-weight-bold mr-2">Location:</span>
                                                <span class="text-muted">{{$data->address}}</span>
                                            </div>
                                        </div>
                                        <!--end::Contact-->
                                        <!--begin::Nav-->
                                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                            <div class="navi-item mb-2">
                                                <a href="{{route('myprofile.index')}}" class="navi-link py-4 active">
                                                    <span class="navi-icon mr-2">
                                                        <span class="svg-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="navi-text font-size-lg">Personal Information</span>
                                                </a>
                                            </div>
                                            {{-- <div class="navi-item mb-2">
                                                <a href="{{route('myprofile.info')}}" class="navi-link py-4">
                                                    <span class="navi-icon mr-2">
                                                        <span class="svg-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="navi-text font-size-lg">Account Information</span>
                                                </a>
                                            </div> --}}
                                            <div class="navi-item mb-2">
                                                <a href="{{route('myprofile.password')}}" class="navi-link py-4">
                                                    <span class="navi-icon mr-2">
                                                        <span class="svg-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="navi-text font-size-lg">Change Password</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Profile Card-->
                            </div>
                            <!--end::Aside-->
                            <!--begin::Content-->
                            <div class="flex-row-fluid ml-lg-8">
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch">
                                    <!--begin::Header-->
                                    <div class="card-header pt-5 pb-3 pl-5">
                                        <div class="card-title align-items-start flex-column">
                                            <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal information</span>
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Form-->
                                    <form class="form" method="POST" action="{{route('myprofile.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                                                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)"></div>
                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fas fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="photo" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{$data->name}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Sex</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="form-group">
														<div class="radio-inline">
															<label class="radio">
															<input type="radio" name="sex" value="male" <?php if($data->sex == 'male') echo 'checked'; ?>>
															<span></span>Male</label>
															<label class="radio">
															<input type="radio" name="sex" value="female" <?php if($data->sex == 'female') echo 'checked'; ?>>
															<span></span>Female</label>														
														</div>
													</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input type="number" name="phone" min="0" class="form-control form-control-lg form-control-solid" value="{{$data->phone}}" placeholder="Phone" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Birth Date</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <input type="text" name="birth_date" id="date" class="form-control form-control-lg form-control-solid" value="{{ Carbon\Carbon::parse($data->birth_date)->format('Y-m-d') }}"/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="la la-calendar-check-o icon-lg"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Complete Address</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <textarea name="address"rows="5" class="form-control form-control-lg form-control-solid">{{$data->address}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Height</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <input type="number" name="height" min="0" class="form-control form-control-lg form-control-solid" value="{{$data->height}}" placeholder="Height" />
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                CM
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Weight</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <input type="number" name="weight" min="0" class="form-control form-control-lg form-control-solid" value="{{$data->weight}}" placeholder="Weight" />
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                KG
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right col-xl-9 col-lg-9">
                                                <button type="submit" class="btn btn-add-new">Save</button>
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Profile Personal Information-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
			<!--end::Content-->
			@include('partials._footer')
		</div>
	</div>
	<!--end::Page-->
</div>
<!--end::Main-->

<!--begin::Modal Stable-->
<!--end::Modal Stable-->

@endsection
@section('scripts')
<script src="{{url('assets/js/pages/custom/profile/profile.js')}}"></script>
<script>
    $('#province').change(function(){
        var provinceID = $(this).val();  
        if(provinceID){
            $.ajax({
            type:"GET",
            url:"{{url('profile/city')}}?province_id="+provinceID,
            success:function(res){        
                if(res){
                    $("#city").empty();
                    $("#city").append('<option>Select</option>');
                    $.each(res,function(key,value){
                        $("#city").append('<option value="'+key+'">'+value+'</option>');
                    });
                
                    }else{
                        $("#city").empty();
                        }
                    }
                });
        }else{
            $("#city").empty();
            $("#district").empty();
            $("#village").empty();
        }   
    });
    $('#city').change(function(){
        var cityID = $(this).val();  
        if(cityID){
            $.ajax({
            type:"GET",
            url:"{{url('profile/district')}}?city_id="+cityID,
            success:function(res){        
                if(res){
                    $("#district").empty();
                    $("#district").append('<option>Select</option>');
                    $.each(res,function(key,value){
                        $("#district").append('<option value="'+key+'">'+value+'</option>');
                    });
                
                    }else{
                        $("#district").empty();
                        }
                    }
                });
        }else{
            $("#district").empty();
            $("#village").empty();
        }   
    });
    $('#district').change(function(){
        var districtID = $(this).val();  
        if(districtID){
            $.ajax({
            type:"GET",
            url:"{{url('profile/village')}}?district_id="+districtID,
            success:function(res){        
                if(res){
                    $("#village").empty();
                    $("#village").append('<option>Select</option>');
                    $.each(res,function(key,value){
                        $("#village").append('<option value="'+key+'">'+value+'</option>');
                    });
                
                    }else{
                        $("#village").empty();
                        }
                    }
                });
        }else{
            $("#village").empty();
        }   
    });
    $('#date').datepicker({
        orientation: "bottom left",
        autoclose: true,
        // language : 'id',
        format   : 'yyyy-mm-dd'
    });
</script>
@endsection