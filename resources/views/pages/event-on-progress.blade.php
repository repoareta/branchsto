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
                            <div class="container-fluid dashboard">
                                <div class="banner">
                                    <div class="carousel-content">
                                        <h5 class="title">
                                            JAKARTA HORSE LOVER COMPETITION
                                        </h5>
                                        <p class="subtitle">
                                            Choose a class that you can take according to your current abilities
                                        </p>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="d-block w-100" src="assets/media/branchsto/slider-img.png" alt="First slide">								
                                </div>
    
                                <nav class="time nav">
                                    <a class="nav-link" href="#">
                                        <div class="shape">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <span>Start 17 Mei 2020</span>
                                    </a>
                                    <a class="nav-link" href="#">
                                        <div class="shape">
                                            <i class="far fa-calendar"></i>
                                        </div>
                                        <span>End 17 Mei 2020</span>
                                    </a>
                                    <a class="nav-link" href="#">
                                        <div class="shape">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <span>Jakarta Selatan</span>
                                    </a>
                                    <a class="nav-link" href="#">
                                        <div class="shape">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <span>08 : 30 s/d 17 : 00</span>
                                    </a>
                                </nav>
    
                                <div class="register-card">
                                    <img src="assets/media/branchsto/register-icon.svg" alt="">
                                    <div class="title">
                                        REGISTER
                                    </div>
                                    <div class="subtitle">
                                        Register your club now and prove that only </br>your club deserves the trophy.
                                    </div>
                                    <a href="#" class="btn btn-register">
                                        REGISTER
                                    </a>
                                    <a href="#" class="need-help">
                                        Need Help
                                    </a>
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
				@include('partials._sidebar-on-progress')

			</div>

			<!--end::Page-->
		</div>

        <!--end::Main-->
@endsection