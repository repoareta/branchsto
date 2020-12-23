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
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <div class="d-flex justify-content-center align-items-center">
                                <h4 class="title-text mb-0">
                                    BOOKING HISTORY
                                </h4>
                            </div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-8 order-md-2 order-2 order-lg-1">
                                    <div class="card card-booking">
                                        <div class="card-body">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h4>
                                                                Nama Package
                                                            </h4>
                                                            <p>
                                                                Nama Stable <span class="mx-3">|</span> Rp. 100.000
                                                            </p>															
                                                        </div>
                                                        <div class="col-2 align-self-center text-right">
                                                            <div class="shape">
                                                                <img src="assets/media/branchsto/arrow-line.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h4>
                                                                Nama Package
                                                            </h4>
                                                            <p>
                                                                Nama Stable <span class="mx-3">|</span> Rp. 100.000
                                                            </p>															
                                                        </div>
                                                        <div class="col-2 align-self-center text-right">
                                                            <div class="shape">
                                                                <img src="assets/media/branchsto/arrow-line.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h4>
                                                                Nama Package
                                                            </h4>
                                                            <p>
                                                                Nama Stable <span class="mx-3">|</span> Rp. 100.000
                                                            </p>															
                                                        </div>
                                                        <div class="col-2 align-self-center text-right">
                                                            <div class="shape">
                                                                <img src="assets/media/branchsto/arrow-line.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-10">
                                                            <h4>
                                                                Nama Package
                                                            </h4>
                                                            <p>
                                                                Nama Stable <span class="mx-3">|</span> Rp. 100.000
                                                            </p>															
                                                        </div>
                                                        <div class="col-2 align-self-center text-right">
                                                            <div class="shape">
                                                                <img src="assets/media/branchsto/arrow-line.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
            @include('partials._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
@endpush