<div id="kt_header" class="header header-fixed nav-form">
	<!--begin::Header Wrapper-->
	<div class="header-wrapper d-flex flex-grow-1 align-items-center">
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
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="{{route('owner.dashboard')}}" class="menu-link menu-toggle">
								<span class="menu-text">DASHBOARD</span>
								<span class="menu-desc"></span>
							</a>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text active">STABLES</span>
								<span class="menu-desc"></span>
							</a>
							<div class="menu-submenu menu-submenu-classic menu-submenu-left">
								<ul class="menu-subnav">
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="{{route('package_approval.index')}}" class="menu-link">
											<span class="menu-text">Riding Package Approval</span>
										</a>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="{{route('stable_approval.index')}}" class="menu-link">
											<span class="menu-text">List Stable Approval</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">PAYMENTS</span>
								<span class="menu-desc"></span>
							</a>
							<div class="menu-submenu menu-submenu-classic menu-submenu-left">
								<ul class="menu-subnav">
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="{{route('owner.payment-approval')}}" class="menu-link menu-toggle">
											<span class="menu-text">Riding Package</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click"
							aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">SETTINGS</span>
								<span class="menu-desc"></span>
							</a>
							<div class="menu-submenu menu-submenu-classic menu-submenu-left">
								<ul class="menu-subnav">
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="{{route('owner.horse-sex')}}" class="menu-link menu-toggle">
											<span class="menu-text">Horse Sex</span>
										</a>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="{{route('owner.bank-account')}}" class="menu-link menu-toggle">
											<span class="menu-text">Bank Account Number</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
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
	<div class="align-items-center py-3 form-header">						
		<!--end::Desktop Search-->
		<!--begin::Dropdown-->
		<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
			<a href="#" class="btn btn-icon btn-notif ml-3 h-50px w-50px flex-shrink-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="svg-icon svg-icon-lg">
					<!--begin::Svg Icon | path:../assets/media/svg/icons/Media/Equalizer.svg-->
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M18 8C18 6.4087 17.3679 4.88258 16.2426 3.75736C15.1174 2.63214 13.5913 2 12 2C10.4087 2 8.88258 2.63214 7.75736 3.75736C6.63214 4.88258 6 6.4087 6 8C6 15 3 17 3 17H21C21 17 18 15 18 8Z" stroke="#66696C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21" stroke="#66696C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					<!--end::Svg Icon-->
				</span>
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
		<!--begin::Dropdown-->
		<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
			<a href="#" class="btn btn-icon btn-user ml-3 h-50px w-50px flex-shrink-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="../assets/media/branchsto/person-1.png" alt="">
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