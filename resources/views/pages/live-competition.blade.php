@extends('layout.index')
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
                                    <img class="d-block w-100" src="{{url('assets/media/branchsto/slider-img.png')}}" alt="First slide">								
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
    
                                <h5 class="title-text">
                                    SCHEDULE EVENT
                                </h5>
    
                                <div class="schedule-event">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="event active">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="event active">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="event">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="event">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="event">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="event">
                                                <div class="title">
                                                    <div class="day">THURSDAY</div>
                                                    <div class="start">25 APRIL 2020</div>
                                                </div>
                                                <div class="subtitle">
                                                    <div class="clock">16:00</div>
                                                    <div class="desc">Horse Inspection</div>
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

					<!--[html-partial:include:{"file":"partials/_footer.html"}]/-->
					@include('partials._footer')
				</div>

				<!--end::Wrapper-->

				<!--[html-partial:include:{"file":"partials/_sidebar.html"}]/-->
				@include('partials._sidebar')

			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->