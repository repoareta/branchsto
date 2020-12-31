<div id="kt_header" class="header header-fixed">
	<!--begin::Header Wrapper-->
	<div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
		<!--begin::Container-->
		<div
			class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
			<!--begin::Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left py-lg-2"
				id="kt_header_menu_wrapper">
				<!--begin::Menu-->
				<div id="kt_header_menu"
					class="header-menu header-menu-mobile header-menu-layout-default">
					<!--begin::Nav-->
					<ul class="menu-nav">
						{{-- <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">COMPETITIONS</span>
								<span class="menu-desc"></span>
							</a>
						</li> --}}
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="{{route('riding_class.search_class', ['name' => null])}}" class="menu-link ">
							{{-- <a data-toggle="modal" data-target="#modalSelectTimePackage" class="menu-link menu-toggle"> --}}
								<span class="menu-text">RIDING CLASS</span>
								<span class="menu-desc"></span>
							</a>
						</li>
						{{-- <li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">VIRTUAL STABLING</span>
								<span class="menu-desc"></span>
							</a>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">HORSE DEAL</span>
								<span class="menu-desc"></span>
							</a>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">MARKET PLACE</span>
								<span class="menu-desc"></span>
							</a>
						</li> --}}
					</ul>									
					<!--end::Nav-->
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Menu Wrapper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header Wrapper-->
	<!--begin::Toolbar-->
	<div class="align-items-center d-none d-lg-flex py-3 profile-header">
		<!--begin::Desktop Search-->
		<div class="quick-search quick-search-inline flex-grow-1" id="kt_quick_search_inline">
			<!--begin::Form-->
			<form method="get" class="quick-search-form">
				<div class="input-group rounded">
					<div class="input-group-prepend">
						<span class="input-group-text">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
						</span>
					</div>
					<input type="text" class="form-control h-50px" placeholder="Search..." />
					<div class="input-group-append">
						<span class="input-group-text">
							<i class="quick-search-close ki ki-close icon-sm text-muted"></i>
						</span>
					</div>
				</div>
			</form>
			<!--end::Form-->
			<!--begin::Search Toggle-->
			<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
			<!--end::Search Toggle-->
			<!--begin::Dropdown-->
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-anim-up">
				<div class="quick-search-wrapper scroll" data-scroll="true" data-height="350" data-mobile-height="200"></div>
			</div>
			<!--end::Dropdown-->
		</div>
		<!--end::Desktop Search-->
		<!--begin::Dropdown-->
		<div class="dropdown dropdown-inline-head" data-toggle="tooltip" title="Notification" data-placement="left">
			<button type="button" class="btn btn-icon btn-notif ml-3 h-50px w-50px flex-shrink-0" id="notifUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="svg-icon svg-icon-lg">
					<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#66696C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="#66696C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0" id="notifUserOpen">
				<!--begin::Navigation-->
				<ul class="navi navi-hover py-5">
					@if(count(Auth::user()->unreadNotifications) == 0)
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-bell-2"></i>
							</span>
							<span class="navi-text">No Notifications</span>
						</a>
					</li>
					@else
						@foreach(Auth::user()->unreadNotifications as $notification)
						<li class="navi-item">
							<a href="#" class="navi-link">
								<span class="navi-icon">
									<i class="flaticon2-bell-2"></i>
								</span>
								<span class="navi-text">{{ $notification->data['message'] }}</span>
							</a>
						</li>
						@endforeach
					@endif
					<li class="navi-separator my-3"></li>
					<li class="navi-item">
						<center>
							<a href="#" class="navi-link">
								<span class="navi-text">See All</span>
							</a>
						</center>
					</li>
				</ul>
				<!--end::Navigation-->
			</div>
		</div>
		<!--end::Dropdown-->
		<!--begin::Dropdown-->
		<div class="dropdown dropdown-inline-head" data-toggle="tooltip" title="Profile" data-placement="left">
			<a href="{{route('myprofile.index')}}" class="btn btn-icon btn-user ml-3 h-50px w-50px flex-shrink-0">
				@if (Auth::user()->photo)
					<img src="{{asset('storage/myprofile/photo/'.Auth::user()->photo)}}" alt="">
				@else					
					<img src="{{url('assets/media/branchsto/profile.png')}}" alt="">
				@endif
			</a>
			<div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0">
				<!--begin::Navigation-->
				<ul class="navi navi-hover py-5">
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-drop"></i>
							</span>
							<span class="navi-text">New Group</span>
						</a>
					</li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-list-3"></i>
							</span>
							<span class="navi-text">Contacts</span>
						</a>
					</li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-rocket-1"></i>
							</span>
							<span class="navi-text">Groups</span>
							<span class="navi-link-badge">
								<span class="label label-light-primary label-inline font-weight-bold">new</span>
							</span>
						</a>
					</li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-bell-2"></i>
							</span>
							<span class="navi-text">Calls</span>
						</a>
					</li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-gear"></i>
							</span>
							<span class="navi-text">Settings</span>
						</a>
					</li>
					<li class="navi-separator my-3"></li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-magnifier-tool"></i>
							</span>
							<span class="navi-text">Help</span>
						</a>
					</li>
					<li class="navi-item">
						<a href="#" class="navi-link">
							<span class="navi-icon">
								<i class="flaticon2-bell-2"></i>
							</span>
							<span class="navi-text">Privacy</span>
							<span class="navi-link-badge">
								<span class="label label-light-danger label-rounded font-weight-bold">5</span>
							</span>
						</a>
					</li>
				</ul>
				<!--end::Navigation-->
			</div>
		</div>
		<!--end::Dropdown-->
	</div>
	<!--end::Toolbar-->
</div>