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
                            <a href="#" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<!--begin::Page Title-->
								<h4 class="title-text mb-0">
                                    ADD SCHEDULE
                                </h4>
								<!--end::Page Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
									<li class="breadcrumb-item active">
										<a href="" class="text-muted">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="" class="text-muted">MANAGE SCHEDULE</a>
									</li>
									<li class="breadcrumb-item">
										<a href="" class="text-muted">ADD SCHEDULE</a>
									</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
                            <form action="{{route('package.store')}}" method="POST" id="formpackage">
                                @csrf
                                <div class="card mt-10">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Session</label>
                                                <input type="text" class="form-control" name="time[]" value="08:00">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <label>Capacity</label>
                                                <input type="text" class="form-control" name="capacity[]" value="0">
                                            </div>
                                        </div>
                                        </form>
                                        <div class="form-group mt-5">
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE</button>
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
    $(document).ready( function () {
        $("#add-more").click(function(){ 
          var html = $("#copy").html();
          $("#after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click","#remove",function(){ 
            $(this).parents(".form-group").remove();
        });
        $('#time').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            autoclose: true,
            // language : 'id',
            format   : 'H:i'
        });

        
        
    } );

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