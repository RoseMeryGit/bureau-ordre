<div class="sticky">
				<aside class="app-sidebar ps horizontal-main">
					<div class="app-sidebar__header">
						<a class="main-logo" href="/dashboard">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/logo.png')}}" class="desktop-logo desktop-logo-dark" alt="dashleadlogo">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/logo1.png')}}" class="desktop-logo" alt="dashleadlogo">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/favicon.png')}}" class="mobile-logo mobile-logo-dark" alt="dashleadlogo">
							<img src="{{asset('template/HTML/dashlead/assets/img/brand/favicon1.png')}}" class="mobile-logo" alt="dashleadlogo">
						</a>
					</div>
					<div class="main-sidemenu">
						<div class="slide-left disabled" id="slide-left">
							<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
							</svg>
						</div>
						<ul class="side-menu">
							<li class="side-item side-item-category">Dashboard</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="/dashboard">
									<span class="side-menu__icon">
										<i class="fe fe-airplay side_menu_img"></i>
									</span>
									<span class="side-menu__label">Dashboard</span>
								</a>
							</li>
							<li class="side-item side-item-category">Courriers</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-box side_menu_img"></i></span>
									<span class="side-menu__label">Courriers Entrants</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										<div class="tab-menu-heading p-0 pb-2 border-0">
											<div class="tabs-menu ">
												<ul class="nav panel-tabs">
													<li><a href="#side5" class="active" data-bs-toggle="tab"><i class="bi bi-house"></i><p>Ajouter Courrier</p></a></li>
													<li><a href="#side6" data-bs-toggle="tab" ><i class="bi bi-chat-square"></i><p>Liste Des Courriers</p></a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side5">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Courriers Entrants</a></li>
														<li><a href="{{route('courriers.entrants.ajoute')}}" class="slide-item">Ajouter Courrier</a></li>
														<li><a href="{{route('courriers.entrants.liste')}}" class="slide-item">Liste Des Courriers</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Courriers Sortants</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Courriers Sortants</a></li>
														<li><a href="{{route('courriers.sortants.ajoute')}}" class="slide-item">Ajouter Courrier</a></li>
														<li><a href="{{route('courriers.sortants.liste')}}" class="slide-item">Liste Des Courriers</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>
                        
							
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="{{route('archives.liste')}}">
									<span class="side-menu__icon">
										<i class="fe fe-zap side_menu_img"></i>
									</span>
									<span class="side-menu__label">Archives</span>
								</a>
							</li>

							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Clients</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Clients</a></li>
														<li><a href="{{route('clients.ajoute')}}" class="slide-item">Ajouter Client</a></li>
														<li><a href="{{route('clients.liste')}}" class="slide-item">Liste Des Clients</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>
                            <li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Recherche</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Recherche </a></li>
														<li><a href="{{route('courriers.entrants.liste')}}" class="slide-item">Courriers Entrants</a></li>
														<li><a href="{{route('courriers.sortants.liste')}}" class="slide-item">Courriers Sortants</a></li>
														<li><a href="{{route('archives.liste')}}" class="slide-item">Archives</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>

                            
                            <li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Rapports</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Rapports</a></li>
														<li><a href="{{route('rapport.entrants')}}" class="slide-item">Courriers Entrants</a></li>
														<li><a href="{{route('rapport.sortants')}}" class="slide-item">Courriers Sortants</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>

                            <li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Paramètres</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Paramètres</a></li>
														<li><a href="{{route('parametre.Type_courrier.ajoute')}}" class="slide-item">Type Courrier</a></li>
														<li><a href="{{route('parametre.Service_traiter.ajoute')}}" class="slide-item">Service Traiter</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>

								</ul>
							</li>
							@can('access_admin')
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
									<span class="side-menu__icon"><i class="fe fe-award side_menu_img"></i></span>
									<span class="side-menu__label">Utilisateurs</span><i class="angle fa fa-angle-right"></i>
								</a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active" id="side8">
													<ul class="sidemenu-list">
														<li class="side-menu__label1"><a href="javascript:void(0)">Utilisateurs</a></li>
														<li><a href="{{route('utilisateurs')}}" class="slide-item">Afficher les utilisateurs</a></li>
														<li><a href="{{route('add.utilisateur')}}" class="slide-item">Nouveau utilisateur</a></li>
													</ul>
													
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							@endcan
						</ul>
						<div class="slide-right" id="slide-right">
							<svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
								<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
							</svg>
						</div>
					</div>
				</aside>
			</div>