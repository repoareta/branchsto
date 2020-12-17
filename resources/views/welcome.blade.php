@extends('layout.global')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row mt-0 mt-lg-8">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators" >
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('assets/media/logos/slide-utama.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block" style="margin-left: ">
                            <h5>RIDING CLASS<br> FOR EVERYONE</h5>
                            <p>Choose a class that you can take according to your current abilities</p>
                            <a href="#" style="background-color:#F4B93D; width:20%" class="ext-muted form-control">JOIN THIS CLASS</a>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('assets/media/logos/slide-utama.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>RIDING CLASS<br> FOR EVERYONE</h5>
                            <p>Choose a class that you can take according to your current abilities</p>
                            <a href="#" style="background-color:#F4B93D; width:20%" class="form-control">JOIN THIS CLASS</a>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('assets/media/logos/slide-utama.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>RIDING CLASS<br> FOR EVERYONE</h5>
                            <p>Choose a class that you can take according to your current abilities</p>
                            <a href="#" style="background-color:#F4B93D; width:20%" class="form-control">JOIN THIS CLASS</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
           
            <!--end::Row-->
            <!--begin::Row-->
            
            <!--end::Row-->
            <!--begin::Advance Table Widget 4-->
            
            <!--end::Advance Table Widget 4-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

@endsection
@section('scripts')
@endsection
