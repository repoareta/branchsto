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
                    <div class="container-fluid verify-email">														
                        <div class="email-container">
                            <img src="{{url('assets/media/branchsto/email.png')}}" alt="">
                            <div class="title">
                                Verify your email address
                            </div>
                            <div class="desc">
                                Please check your email and click the verification link we sent you. if you do not receive an email from us and make sure the email you registered is correct.
                            </div>
                            <div class="action">
                                <a href="#" class="btn btn-send-email">
                                    RESEND EMAIL
                                </a>
                                <a href="#" class="need-help">
                                    Needed help?
                                </a>
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