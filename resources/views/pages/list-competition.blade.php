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
                            <div class="container-fluid">
                                <h5 class="title-text">
                                    COMPETITIONS
                                </h5>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 my-5">
                                        <div class="competition-card">
                                            <div class="image">
                                                <div class="title">
                                                    <div class="title-card">
                                                        Jakarta horse lover competition
                                                    </div>
                                                    <div class="subtitle-card">
                                                        Choose a class that you can take according to your current abilities
                                                    </div>
                                                </div>									
                                                <div class="live">Live</div>
                                                <img src="{{url('assets/media/branchsto/Rectangle 140.png')}}" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <i class="far fa-calendar"></i>
                                                        <span>Start 17 Mei 2020</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="far fa-calendar"></i>
                                                        <span>End 17 Mei 2020</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span>Jakarta Selatan</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fas fa-clock"></i>
                                                        <span>08 : 30 s/d 17 : 00</span>
                                                    </td>
                                                </trc>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 my-5">
                                        <div class="competition-card">
                                            <div class="image">
                                                <div class="title">
                                                    <div class="title-card">
                                                        Jakarta horse lover competition
                                                    </div>
                                                    <div class="subtitle-card">
                                                        Choose a class that you can take according to your current abilities
                                                    </div>
                                                </div>									
                                                <div class="live">Live</div>
                                                <img src="{{url('assets/media/branchsto/Rectangle 140.png')}}" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <i class="far fa-calendar"></i>
                                                        <span>Start 17 Mei 2020</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="far fa-calendar"></i>
                                                        <span>End 17 Mei 2020</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span>Jakarta Selatan</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fas fa-clock"></i>
                                                        <span>08 : 30 s/d 17 : 00</span>
                                                    </td>
                                                </trc>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 my-5">
                                        <div class="competition-card">
                                            <div class="image">
                                                <div class="title">
                                                    <div class="title-card">
                                                        Jakarta horse lover competition
                                                    </div>
                                                    <div class="subtitle-card">
                                                        Choose a class that you can take according to your current abilities
                                                    </div>
                                                </div>									
                                                <div class="live">Live</div>
                                                <img src="{{url('assets/media/branchsto/Rectangle 140.png')}}" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        <i class="far fa-calendar"></i>
                                                        <span>Start 17 Mei 2020</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="far fa-calendar"></i>
                                                        <span>End 17 Mei 2020</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span>Jakarta Selatan</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <i class="fas fa-clock"></i>
                                                        <span>08 : 30 s/d 17 : 00</span>
                                                    </td>
                                                </trc>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <h5 class="title-text">
                                    LASTEST COMPETITIONS
                                </h5>
                                <div class="lastest-competitions">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card-competitions">
                                                <div class="header-competitions">
                                                    <div class="title">
                                                        JAKARTA HORSE EVENT
                                                    </div>
                                                    <div class="subtitle">
                                                        Choose a class that you can take
                                                    </div>
                                                </div>
                                                <div class="overlay"></div>
                                                <img src="{{url('assets/media/branchsto/lastest-competition.png')}}" alt="">
                                            </div>
                                            <div class="body-competitions">
                                                <table class="table">
                                                    <tr>
                                                        <td>#1</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-1.png')}}" alt="">
                                                        </td>
                                                        <td>Bessie Cooper</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#2</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-2.png')}}" alt="">
                                                        </td>
                                                        <td>Wadde Warren</td>
                                                        <td>2387</td>
                                                    </tr>
                                                    <tr>
                                                        <td>#3</td>
                                                        <td>
                                                            <img src="{{url('assets/media/branchsto/person-3.png')}}" alt="">
                                                        </td>
                                                        <td>Ronald Richards</td>
                                                        <td>2387</td>
                                                    </tr>
                                                </table>
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
				

			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->