<div class="main-header side-header sticky">
				<div class="container-fluid main-container">
					<div class="main-header-left sidemenu">
						<a class="main-header-menu-icon" href="javascript:void(0);" data-bs-toggle="sidebar" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-left horizontal">
						<a class="main-logo" href="/">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/logo.png')}}" class="desktop-logo desktop-logo-dark" alt="dashleadlogo">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/logo1.png')}}" class="desktop-logo theme-logo" alt="dashleadlogo">
						</a>
					</div>
					<div class="main-header-right">
						<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto collapsed" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon fe fe-more-vertical"></span>
						</button>
						<div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
							<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
								<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
									<!-- Country-selector-->
									
									<!-- Theme-Layout -->
									<li class="dropdown  d-flex">
										<a class="nav-link icon theme-layout nav-link-bg layout-setting" href="javascript:void(0);">
											<span class="dark-layout"><i class="fe fe-moon"></i></span>
											<span class="light-layout"><i class="fe fe-sun"></i></span>
										</a>
									</li>
									<!-- Theme-Layout -->
									<!-- <li class="dropdown header-search">
										<a class="nav-link icon header-search" data-bs-toggle="dropdown" href="javascript:void(0);">
											<i class="fe fe-search"></i>
										</a>
										<div class="dropdown-menu">
											<div class="main-form-search p-2">
												<input class="form-control" placeholder="Search" type="search">
												<button class="btn"><i class="fe fe-search"></i></button>
											</div>
										</div>
									</li> -->
									<!-- CART -->
									
									<!-- CART -->
									<!-- FULL SCREEN -->
									<li class="dropdown">
										<a class="nav-link icon full-screen-link" href="javascript:void(0);">
											<i class="fe fe-maximize fullscreen-button"></i>
										</a>
									</li>
									<!-- FULL SCREEN -->
									
									<li class="dropdown main-profile-menu">
										<a class="main-img-user" href="javascript:void(0);" data-bs-toggle="dropdown"><img alt="avatar"
												src="{{asset('template/HTML/dashlead/assets/img/users/profile.png')}}"></a>
										<div class="dropdown-menu">
											<div class="header-navheading">
												<h6 class="main-notification-title">Bienvenu, {{ Auth::user()->name }}</h6>
											</div>
											<a class="dropdown-item border-top text-wrap"  href="{{ route('profile.show') }}">
												<i class="fe fe-user"></i> Mon Profile
											</a>
											<a class="dropdown-item text-wrap" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											<i class="fe fe-power"></i> {{ __('Logout') }}
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>