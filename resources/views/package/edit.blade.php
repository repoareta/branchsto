@extends('layout.index')
@push('add-style')
<link href="{{url('assets/uppy/uppy.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
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
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <a href="{{route('stable.index')}}" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<!--begin::Page Title-->
								<h4 class="title-text mb-0">
                                    PACKAGE
                                </h4>
								<!--end::Page Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
									<li class="breadcrumb-item">
										<a href="{{route('competitions.index')}}">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}">MANAGE STABLE</a>
									</li>
									<li class="breadcrumb-item">
										<a href="" class="text-muted">UPDATE PACKAGE</a>
									</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
                            <form action="{{route('package.update')}}" method="POST" id="formpackage" enctype="multipart/form-data">
                                @csrf
                                <div class="card mt-10">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Name Package</label>
                                                <input type="text" class="form-control" name="name" value="{{$data->name}}">
                                                <input type="hidden" class="form-control" name="stable_id" value="{{$data->stable_id}}">
                                                <input type="hidden" class="form-control" name="package_id" value="{{$data->id}}">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Package Number</label>
                                                <input type="number" min="0" class="form-control" name="package_number" value="{{$data->package_number}}" placeholder="Package Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control" name="description" >{{$data->description}}</textarea>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Price</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            RP
                                                        </span>
                                                    </div>
                                                    <input type="number" min="0" class="form-control" autocomplete="off" name="price" value="{{$data->price}}" placeholder="Price">
                                                </div>
                                            </div>												
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Attendance</label>
                                                <input type="number" min="0" class="form-control" name="attendance" value="{{$data->attendance}}">
                                            </div>	
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Photo</label>
                                                <input type="file" name="photo" class="form-control">
                                                @if ($data->photo)
                                                    <img src="{{asset('storage/package/photo/'.$data->photo)}}" style="margin-top:20px; max-width: 200px;" alt="">                                                        
                                                @else
                                                    <p>Image not available.</p>
                                                @endif
                                            </div>																				
                                        </div>
                                        <div class="form-group row">									
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Session Usage</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                    <input type="radio" @php if($data->session_usage == 'Yes') echo 'checked'; @endphp name="session" value="Yes">
                                                    <span></span>Riding Class</label>
                                                    <label class="radio">
                                                    <input type="radio" name="session" value="" @php if($data->session_usage == null) echo 'checked'; @endphp>
                                                    <span></span>Pony Ride</label>
                                                    <label class="radio">
                                                </div>
                                            </div>										
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Package Status</label>
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                    <input type="radio" @php if($data->package_status == 'Yes') echo 'checked'; @endphp name="status" value="Yes">
                                                    <span></span>Publish</label>
                                                    <label class="radio">
                                                    <input type="radio" name="status" value="" @php if($data->package_status == null) echo 'checked'; @endphp>
                                                    <span></span>No Publish</label>
                                                    <label class="radio">
                                                </div>
                                            </div>										
                                        </div>
                                        {{-- <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Upload Logo</label>
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileLogo">
                                                    <label class="custom-file-label" for="customFileLogo">Upload Logo</label>
                                                    </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Upload Banner</label>
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileBanner">
                                                    <label class="custom-file-label" for="customFileBanner">Upload Banner Cover</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                                <label>Gallery</label>
                                                <div id="drag-drop-area"></div>
                                            </div>
                                        </div>											 --}}
                                        </form>
                                        <div class="form-group mt-5">
                                            <button type="submit" class="btn btn-add-new mr-2">SUBMIT</button>
                                            <a href="{{route('package.index')}}" class="btn btn-secondary">Back</a>
                                        </div>											
                                    </div>
                                </div>									
                            </form>
                        </div>
                    </div>
                    <!--end::Container-->
                <!--end::Entry-->
            </div>
        </div>
            <!--end::Content-->
            @include('partials._footer')
        </div>
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
{!! JsValidator::formRequest('App\Http\Requests\PackageStore', '#formpackage') !!}
{!! JsValidator::formRequest('App\Http\Requests\SlotStore', '#formslot') !!}
<script>
    var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
        inline: true,
        target: '#drag-drop-area',
        autoProceed: true,
        allowMultipleUploads: true,
        debug: false
        })
        .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'})

    uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
    })
    
    
</script>
@endpush