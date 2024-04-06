<!DOCTYPE html>
<!-- 
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">

<!-- Mirrored from hencework.com/theme/jampack/classic/add-new-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 06:13:04 GMT -->
<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post | Jampack - Admin CRM Dashboard Template</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Bootstrap Dropify CSS -->
	<link href="vendors/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />

	<!-- Select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />

	<!-- Data Table CSS -->
    <link href="vendors/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />

	<!-- CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
   	<!-- Wrapper -->
	<div class="hk-wrapper" data-layout="vertical" data-layout-style="collapsed" data-menu="light" data-footer="simple" data-hover="active">
		<!-- Top Navbar -->
		<nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
			<div class="container-fluid">
			<!-- Start Nav -->
			<div class="nav-start-wrap">
				<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>
					
				<!-- Search -->
				<form class="dropdown navbar-search">
					<div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
						<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
						<div class="input-group d-xl-flex d-none">
							<span class="input-affix-wrapper input-search affix-border">
								<input type="text" class="form-control  bg-transparent"  data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
								<span class="input-suffix"><span>/</span>
									<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
									<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
										<span class="sr-only">Loading...</span>
									</span>
								</span>
							</span>
						</div>
					</div>
					<div  class="dropdown-menu p-0">
						<!-- Mobile Search -->
						<div class="dropdown-item d-xl-none bg-transparent">
							<div class="input-group mobile-search">
								<span class="input-affix-wrapper input-search">
									<input type="text" class="form-control" placeholder="Search..." aria-label="Search">
									<span class="input-suffix">
										<span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
										<span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</span>
									</span>
								</span>
							</div>
						</div>
						<!--/ Mobile Search -->
						<div data-simplebar class="dropdown-body p-2">
							<h6 class="dropdown-header">Recent Search
							</h6>
							<div class="dropdown-item bg-transparent">
								<a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
								<a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
							</div>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Help
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										How to setup theme?
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
											<span class="initial-wrap">
												<span class="svg-icon">
													<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
														<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
														<path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
													 </svg>
												</span>
											</span>
										</div>
									</div>
									<div class="media-body">
										View detail documentation
									</div>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<h6 class="dropdown-header">Users
							</h6>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Sarah Jone
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
											<span class="initial-wrap">J</span>
										</div>
									</div>
									<div class="media-body">
										Joe Jackson
									</div>
								</div>
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<div class="media align-items-center">
									<div class="media-head me-2">
										<div class="avatar avatar-xs avatar-rounded">
											<img src="dist/img/avatar4.jpg" alt="user" class="avatar-img">
										</div>
									</div>
									<div class="media-body">
										Maria Richard
									</div>
								</div>
							</a>
						</div>
						<div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
					</div>
				</form>
				<!-- /Search -->
			</div>
			<!-- /Start Nav -->
			
			<!-- End Nav -->
			<div class="nav-end-wrap">
				<ul class="navbar-nav flex-row">
					<li class="nav-item">
						<a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
					</li>
					<li class="nav-item">
						<div class="dropdown dropdown-notifications">
							<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
							<div class="dropdown-menu dropdown-menu-end p-0">
								<h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
								</h6>
								<div data-simplebar class="dropdown-body  p-2">
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-rounded avatar-sm">
													<img src="dist/img/avatar2.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
													<div class="notifications-info">
														<span class="badge badge-soft-success">Collaboration</span>
														<div class="notifications-time">Today, 10:14 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="inbox"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">New message received from Alan Rickman</div>
													<div class="notifications-info">
														<div class="notifications-time">Today, 7:51 AM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="clock"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">You have a follow up with Jampack Head on Friday, Dec 19 at 9:30 am</div>
													<div class="notifications-info">
														<div class="notifications-time">Yesterday, 9:25 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar3.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>
													<div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
													<div class="notifications-info">
														<div class="notifications-time">Today 10:14 PM</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar avatar-sm avatar-rounded">
													<img src="dist/img/avatar10.jpg" alt="user" class="avatar-img">
												</div>
											</div>
											<div class="media-body">
												<div>	
													<div class="notifications-text">Winston Churchil shared a document with you</div>
													<div class="notifications-info">
														<span class="badge badge-soft-violet">File Manager</span>
														<div class="notifications-time">2 Oct, 2021</div>
													</div>
												</div>
											</div>
										</div>
									</a>
									<a href="javascript:void(0);" class="dropdown-item">
										<div class="media">
											<div class="media-head">
												<div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
													<span class="initial-wrap">
														<span class="feather-icon"><i data-feather="calendar"></i></span>
													</span>
												</div>
											</div>
											<div class="media-body">
												<div>	
													<div class="notifications-text">Last 2 days left for the project to be completed</div>
													<div class="notifications-info">
														<span class="badge badge-soft-orange">Updates</span>
														<div class="notifications-time">14 Sep, 2021</div>
													</div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown ps-2">
							<a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
								<div class="avatar avatar-rounded avatar-xs">
									<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<div class="p-2">
									<div class="media">
										<div class="media-head me-2">
											<div class="avatar avatar-primary avatar-sm avatar-rounded">
												<span class="initial-wrap">Hk</span>
											</div>
										</div>
										<div class="media-body">
											<div class="dropdown">
												<a href="#" class="d-block dropdown-toggle link-dark fw-medium"  data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">Hencework</a>
												<div class="dropdown-menu dropdown-menu-end">
													<div class="p-2">
														<div class="media align-items-center active-user mb-3">
															<div class="media-head me-2">
																<div class="avatar avatar-primary avatar-xs avatar-rounded">
																	<span class="initial-wrap">Hk</span>
																</div>
															</div>
															<div class="media-body">
																<a href="#" class="d-flex align-items-center link-dark">Hencework <i class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
																<a href="#" class="d-block fs-8 link-secondary"><u>Manage your account</u></a>
															</div>
														</div>
														<div class="media align-items-center mb-3">
															<div class="media-head me-2">
																<div class="avatar avatar-xs avatar-rounded">
																	<img src="dist/img/avatar12.jpg" alt="user" class="avatar-img">
																</div>
															</div>
															<div class="media-body">
																<a href="#" class="d-block link-dark">Jampack Team</a>
																<a href="#" class="d-block fs-8 link-secondary">contact@hencework.com</a>
															</div>
														</div>
														<button class="btn btn-block btn-outline-light btn-sm">
															<span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span>
															<span>Add Account</span></span>
														</button>
													</div>
												</div>
											</div>
											<div class="fs-7">contact@hencework.com</div>
											<a href="#" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
										</div>
									</div>
								</div>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="profile.html">Profile</a>
								<a class="dropdown-item" href="#"><span class="me-2">Offers</span><span class="badge badge-sm badge-soft-pink">2</span></a><div class="dropdown-divider"></div>
								<h6 class="dropdown-header">Manage Account</h6>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="credit-card"></i></span><span>Payment methods</span></a>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="check-square"></i></span><span>Subscriptions</span></a>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="tag"></i></span><span>Raise a ticket</span></a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Terms & Conditions</a>
								<a class="dropdown-item" href="#">Help & Support</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /End Nav -->
			</div>									
		</nav>
		<!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
			<!-- Brand -->
			<div class="menu-header">
				<span>
					<a class="navbar-brand" href="index.html">
						<img class="brand-img img-fluid" src="dist/img/brand-sm.svg" alt="brand" />
						<img class="brand-img img-fluid" src="dist/img/Jampack.svg" alt="brand" />
					</a>
					<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
						<span class="icon">
							<span class="svg-icon fs-5">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<line x1="10" y1="12" x2="20" y2="12"></line>
									<line x1="10" y1="12" x2="14" y2="16"></line>
									<line x1="10" y1="12" x2="14" y2="8"></line>
									<line x1="4" y1="4" x2="4" y2="20"></line>
								</svg>
							</span>
						</span>
					</button>
				</span>
			</div>
			<!-- /Brand -->

			<!-- Main Menu -->
			<div data-simplebar class="nicescroll-bar">
				<div class="menu-content-wrap">
					<div class="menu-group">
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="index.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="4" rx="1" />
												<rect x="4" y="12" width="6" height="8" rx="1" />
												<line x1="14" y1="12" x2="20" y2="12" />
												<line x1="14" y1="16" x2="20" y2="16" />
												<line x1="14" y1="20" x2="20" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Dashboard</span>
									<span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
								</a>
							</li>
						</ul>	
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Apps</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
												<line x1="12" y1="11" x2="12" y2="11.01" />
												<line x1="8" y1="11" x2="8" y2="11.01" />
												<line x1="16" y1="11" x2="16" y2="11.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat</span>
								</a>
								<ul id="dash_chat" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="chats.html"><span class="nav-link-text">Chats</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-group.html"><span class="nav-link-text">Groups</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Contacts</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chatpop">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
												<line x1="12" y1="12" x2="12" y2="12.01" />
												<line x1="8" y1="12" x2="8" y2="12.01" />
												<line x1="16" y1="12" x2="16" y2="12.01" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Chat Popup</span>
								</a>
								<ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="chatpopup.html"><span class="nav-link-text">Direct Message</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="chatbot.html"><span class="nav-link-text">Chatbot</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="calendar.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
												<circle cx="18" cy="18" r="4" />
												<path d="M15 3v4" />
												<path d="M7 3v4" />
												<path d="M3 11h16" />
												<path d="M18 16.496v1.504l1 1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Calendar</span>
								</a>
							</li>	
							<li class="nav-item">
								<a class="nav-link" href="email.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-inbox" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="2" />
												<path d="M4 13h3l3 3h4l3 -3h3" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Email</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_scrumboard">
									<span class="nav-icon-wrap position-relative">
										<span class="badge badge-sm badge-primary badge-sm badge-pill position-top-end-overflow">3</span>
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="4" y1="4" x2="10" y2="4" />
												<line x1="14" y1="4" x2="20" y2="4" />
												<rect x="4" y="8" width="6" height="12" rx="2" />
												<rect x="14" y="8" width="6" height="6" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Scrumboard</span>
								</a>
								<ul id="dash_scrumboard" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="projects-board.html"><span class="nav-link-text">All Boards</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="kanban-board.html"><span class="nav-link-text">Project Kanban</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="pipeline.html"><span class="nav-link-text">Pipeline Kanban</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_contact">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
												<line x1="13" y1="8" x2="15" y2="8" />
												<line x1="13" y1="12" x2="15" y2="12" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Contact</span>
								</a>
								<ul id="dash_contact" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="contact.html"><span class="nav-link-text">Contact List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="contact-cards.html"><span class="nav-link-text">Contact Cards</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-contact.html"><span class="nav-link-text">Edit Contact</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_file">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M9 15l2 2l4 -4" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">File Manager</span>
								</a>
								<ul id="dash_file" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="file-manager-list.html"><span class="nav-link-text">List View</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="file-manager-grid.html"><span class="nav-link-text">Grid View</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="gallery.html">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<line x1="15" y1="8" x2="15.01" y2="8" />
												<rect x="4" y="4" width="16" height="16" rx="3" />
												<path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
												<path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Gallery</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_task">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M13 5h8" />
												<path d="M13 9h5" />
												<path d="M13 15h8" />
												<path d="M13 19h5" />
												<rect x="3" y="4" width="6" height="6" rx="1" />
												<rect x="3" y="14" width="6" height="6" rx="1" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Todo</span>
									<span class="badge badge-soft-success ms-2">2</span>
								</a>
								<ul id="dash_task" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="tasklist.html"><span class="nav-link-text">Tasklist</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="gantt.html"><span class="nav-link-text">Gantt</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_blog">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-browser" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="16" height="16" rx="1" />
												<line x1="4" y1="8" x2="20" y2="8" />
												<line x1="8" y1="4" x2="8" y2="8" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Blog</span>
								</a>
								<ul id="dash_blog" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="posts.html"><span class="nav-link-text">Posts</span></a>
											</li>
											<li class="nav-item active">
												<a class="nav-link" href="add-new-post.html"><span class="nav-link-text">Add New Post</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="post-detail.html"><span class="nav-link-text">Post Detail</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_invoice">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-digit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<rect x="9" y="12" width="3" height="5" rx="1" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
												<path d="M15 12v5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Invoices</span>
								</a>
								<ul id="dash_invoice" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="invoice-list.html"><span class="nav-link-text">Invoice List</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-templates.html"><span class="nav-link-text">Invoice Templates</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="create-invoice.html"><span class="nav-link-text">Create Invoice</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="invoice-preview.html"><span class="nav-link-text">Invoice Preview</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_integ">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<polyline points="7 8 3 12 7 16" />
												<polyline points="17 8 21 12 17 16" />
												<line x1="14" y1="4" x2="10" y2="20" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Integrations</span>
								</a>
								<ul id="dash_integ" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="all-apps.html"><span class="nav-link-text">All Apps</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations-detail.html"><span class="nav-link-text">App Detail</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="integrations.html"><span class="nav-link-text">Integrations</span></a>
											</li>
										</ul>	
									</li>	
								</ul>	
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Pages</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="9" cy="7" r="4" />
												<path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
												<path d="M16 11h6m-3 -3v6" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Authentication</span>
								</a>
								<ul id="dash_pages" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
													<span class="nav-link-text">Log In</span> 
												</a>
												<ul id="dash_log" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="login.html"><span class="nav-link-text">Login</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-simple.html"><span class="nav-link-text">Login Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="login-classic.html"><span class="nav-link-text">Login Classic</span></a>
															</li>
														</ul>	
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_sign">
													<span class="nav-link-text">Sign Up</span>
												</a>
												<ul id="dash_sign" class="nav flex-column collapse  nav-children">
													<li class="nav-item">
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="signup.html"><span class="nav-link-text">Signup</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-simple.html"><span class="nav-link-text">Signup Simple</span></a>
															</li>
															<li class="nav-item">
																<a class="nav-link" href="signup-classic.html"><span class="nav-link-text">Signup Classic</span></a>
															</li>
														</ul>		
													</li>	
												</ul>	
											</li>
											<li class="nav-item">
												<a class="nav-link" href="lock-screen.html"><span class="nav-link-text">Lock Screen</span></a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="reset-password.html"><span class="nav-link-text">Reset Password</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="404.html"><span class="nav-link-text">Error 404</span></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="503.html"><span class="nav-link-text">Error 503</span></a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_profile">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<circle cx="12" cy="7" r="4" />
												<path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
												<circle cx="16.5" cy="17.5" r="2.5" />
												<path d="M18.5 19.5l2.5 2.5" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text position-relative">Profile
										<span class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
									</span>
								</a>
								<ul id="dash_profile" class="nav flex-column collapse  nav-children">
									<li class="nav-item">
										<ul class="nav flex-column">
											<li class="nav-item">
												<a class="nav-link" href="profile.html">
													<span class="nav-link-text">Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="edit-profile.html">
													<span class="nav-link-text">Edit Profile</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="account.html">
													<span class="nav-link-text">Account</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="menu-gap"></div>
					<div class="menu-group">
						<div class="nav-header">
							<span>Documentation</span>
						</div>
						<ul class="navbar-nav flex-column">
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-code-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M10 12h-1v5h1" />
												<path d="M14 12h1v5h-1" />
												<path d="M14 3v4a1 1 0 0 0 1 1h4" />
												<path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Documentation</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://nubra-ui.hencework.com/avatar.html" target="_blank">
									<span class="nav-icon-wrap">
										<span class="svg-icon">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<rect x="4" y="4" width="6" height="5" rx="2" />
												<rect x="4" y="13" width="6" height="7" rx="2" />
												<rect x="14" y="4" width="6" height="16" rx="2" />
											</svg>
										</span>
									</span>
									<span class="nav-link-text">Components</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="callout card card-flush bg-orange-light-5 text-center mt-5 w-220p mx-auto">
						<div class="card-body">
							<h5 class="h5">Quickly Build Applications</h5>
							<p class="p-sm card-text">Exclusively for webapps Based on Bootstrap</p>
							<a href="https://nubra-ui.hencework.com/" target="_blank" class="btn btn-primary btn-block">Go Nubra-UI</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Menu -->
		</div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

		<!-- Main Content -->
		<div class="hk-pg-wrapper pb-0">
			<div class="hk-pg-body py-0">
				<div class="blogapp-wrap">
					<nav class="blogapp-sidebar">
						<div data-simplebar class="nicescroll-bar">
							<div class="menu-content-wrap">
								<a href="add-new-post.html" class="btn btn-primary btn-rounded btn-block mb-4">
									Create Post
								</a>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">
										<li class="nav-item active">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="users"></i></span></span>
												<span class="nav-link-text">Posts</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="star"></i></span></span>
												<span class="nav-link-text">Published</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="archive"></i></span></span>
												<span class="nav-link-text">Archived</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span>
												<span class="nav-link-text">Draft</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="trash-2"></i></span></span>
												<span class="nav-link-text">Deleted</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="menu-gap"></div>
								<div class="nav-header">
									<span>Manage</span>
								</div>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">	
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="flag"></i></span></span>
												<span class="nav-link-text">Manage Post</span>
											</a>
										</li>
										
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="grid"></i></span></span>
												<span class="nav-link-text">Manage Categories</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="javascript:void(0);">
												<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="tag"></i></span></span>
												<span class="nav-link-text">Manage Tags</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="separator separator-light"></div>
								<div class="d-flex align-items-center justify-content-between mb-2">
									<div class="title-sm text-primary mb-0">Categories</div>
									<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal" data-bs-target="#add_new_cat"><span class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
								</div>
								<div class="menu-group">
									<ul class="nav nav-light navbar-nav flex-column">
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Design</span>
												<span class="badge badge-pill badge-sm badge-soft-secondary ms-auto">136</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Development</span>
												<span class="badge badge-pill badge-sm badge-soft-secondary ms-auto">2</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">User Interface</span>
												<span class="badge badge-pill badge-sm badge-soft-secondary ms-auto">86</span>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link link-badge-right" href="#">
												<span class="nav-link-text">Business</span>
												<span class="badge badge-pill badge-sm badge-soft-secondary ms-auto">34</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="separator separator-light"></div>
								<div class="d-flex align-items-center justify-content-between mb-4">
									<div class="title-sm text-primary mb-0">Tags</div>
									<a href="#" class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="modal" data-bs-target="#add_new_tag"><span class="icon" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Add Tag"><span class="feather-icon"><i data-feather="plus"></i></span></span></a>
								</div>
								<div class="menu-group">
									<div class="tag-cloud">
										<a href="#" class="badge badge-outline badge-light">Collaboration</a>
										<a href="#" class="badge badge-outline badge-light">React Developer</a>
										<a href="#" class="badge badge-outline badge-light">Angular Developer</a>
										<a href="#" class="badge badge-outline badge-light">promotion</a>
										<a href="#" class="badge badge-outline badge-light">Advertisement</a>
									</div>
								</div>
							</div>
						</div>
						<!--Sidebar Fixnav-->
						<div class="blogapp-fixednav">
							<div class="hk-toolbar">
								<ul class="nav nav-light">
									<li class="nav-item nav-link">
										<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" href="#"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
									</li>
									<li class="nav-item nav-link">
										<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Archive"><span class="icon"><span class="feather-icon"><i data-feather="archive"></i></span></span></a>
									</li>
									<li class="nav-item nav-link">
										<a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Help"><span class="icon"><span class="feather-icon"><i data-feather="book"></i></span></span></a>
									</li>
								</ul>
							</div>
						</div>
						<!--/ Sidebar Fixnav-->
					</nav>
					<div class="blogapp-content">
						<div class="blogapp-detail-wrap">
							<header class="blog-header">
								<div class="d-flex align-items-center">
									<a class="blogapp-title link-dark" href="#">
										<h1>Add New Post</h1>
									</a>
								</div>
								<div class="blog-options-wrap">	
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" href="#" data-bs-toggle="dropdown"><span class="icon"><span class="feather-icon"><i data-feather="more-vertical"></i></span></span></a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="users"></i></span><span>Posts</span></a>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="slash"></i></span><span>Block Content</span></a>
										<a class="dropdown-item" href="#"><span class="feather-icon dropdown-icon"><i data-feather="external-link"></i></span><span>Feedback</span></a>
									</div>
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable d-sm-inline-block d-none" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collapse">
										<span class="icon">
											<span class="feather-icon"><i data-feather="chevron-up"></i></span>
											<span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
										</span>
									</a>
								</div>
								<div class="hk-sidebar-togglable"></div>
							</header>
							<div class="blog-body">
								<div data-simplebar class="nicescroll-bar">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xxl-9 col-lg-8">
												<form class="edit-post-form">
													<div class="form-group">
														<label class="form-label">Post Title</label>
														<input class="form-control"  placeholder="Post Title">
													</div>
													<div class="form-group">
														<label class="form-label">Permalink</label>
														<input class="form-control"  placeholder="Permalink">
													</div>
													<ul class="nav nav-light nav-tabs border-bottom-0">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#tab_classic">
																<span class="nav-link-text">Classic</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#tab_code">
																<span class="nav-link-text">Code</span>
															</a>
														</li>
													</ul>
													<div class="card card-border rounded-top-start-0">
														<div class="card-body">
															<div class="tab-content mt-0">
																<div class="tab-pane fade show active" id="tab_classic">
																	<div class="tinymce-wrap">
																		<textarea id="classic">
																		</textarea>
																	</div>
																</div>
																<div class="tab-pane fade" id="tab_code">
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border advance-option-post">
														<div class="card-body">
															<h5 class="card-title">Advance Option</h5>
															<ul class="nav nav-tabs nav-line nav-icon nav-light border-bottom">
																<li class="nav-item">
																	<a class="nav-link active" data-bs-toggle="tab" href="#tab_summery">
																		<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="zap"></i></span></span>
																		<span class="nav-link-text">Post Slider Images</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link" data-bs-toggle="tab" href="#">
																		<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="settings"></i></span></span>
																		<span class="nav-link-text">Post Settings</span>
																	</a>
																</li>
																<li class="nav-item">
																	<a class="nav-link disabled" data-bs-toggle="tab" href="#">
																		<span class="nav-icon-wrap"><span class="feather-icon"><i data-feather="edit"></i></span></span>
																		<span class="nav-link-text">Version History</span>
																	</a>
																</li>
															</ul>
															<div class="tab-content">
																<div class="tab-pane fade show active" id="tab_summery">
																	<input type="file" class="dropify" />
																</div>
															</div>
														</div>	
													</div>	
												</form>
											</div>
											<div class="col-xxl-3 col-lg-4">
												<div class="content-aside">
													<button class="btn btn-outline-secondary btn-block"  disabled>Preview Changes</button>
													<button class="btn btn-primary btn-block mb-3">Publish</button>
													<div class="card card-border">
														<div class="card-body">
															<form class="edit-post-form">
																<div class="form-group">
																	<label class="form-label">Published Date</label>
																	<input class="form-control" name="single-date" value="02/12/20 8:30PM">
																</div>
																<div class="form-group">
																	<label class="form-label">Visibility</label>
																	<select class="form-select">
																		<option selected value="1">Public</option>
																		<option value="2">Private</option>
																	</select>
																</div>
																<div class="form-group">
																	<label class="form-label">Status</label>
																	<select class="form-select">
																		<option selected value="1">--</option>
																	</select>
																</div>
															</form>
														</div>
													</div>
													<div class="card card-border overflow-hidden">
														<div class="card-header card-header-action">
															<a role="button" data-bs-toggle="collapse" data-bs-target="#categories_1" aria-expanded="true">
																<div class="d-flex align-items-center">
																	<h6 class="me-2 mb-0">Categories</h6>
																	<span class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span>
																</div>
															</a>
															<div class="card-action-wrap">
																<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"  data-bs-toggle="collapse" href="#categories_1" aria-expanded="true"><span class="icon"><span class="feather-icon"><i data-feather="chevron-down"></i></span></span></a>
															</div>												
														</div>
														<div id="categories_1" class="collapse show">
															<div class="card-body">
																<ul class="nav nav-justified nav-light nav-tabs nav-segmented-tabs segmented-tabs-soft">
																	<li class="nav-item">
																		<a class="nav-link active" data-bs-toggle="tab" href="#tab_cat">
																			<span class="nav-link-text">All Categories</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#tab_freq">
																			<span class="nav-link-text badge-on-text">Frequent</span>
																		</a>
																	</li>
																</ul>
																<div class="tab-content">
																	<div class="tab-pane fade show active" id="tab_cat">
																		<div class="h-180p">
																			<div data-simplebar class="nicescroll-bar p-0">
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk1">
																					<label class="form-check-label" for="catchk1">Design</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk2">
																					<label class="form-check-label" for="catchk2">Development</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk3">
																					<label class="form-check-label" for="catchk3">Technology</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk4">
																					<label class="form-check-label" for="catchk4">Business</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk5">
																					<label class="form-check-label" for="catchk5">Social Media</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk6">
																					<label class="form-check-label" for="catchk6">Sports</label>
																				</div>
																				<div class="form-check mb-1">
																					<input type="checkbox" class="form-check-input" id="catchk7">
																					<label class="form-check-label" for="catchk7">Writing</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border overflow-hidden">
														<div class="card-header card-header-action">
															<a role="button" data-bs-toggle="collapse" href="#tags_1" aria-expanded="true">
																<h6 class="mb-0">Add Tags(Upto 5)</h6>
															</a>
															<div class="card-action-wrap">
																<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"  data-bs-toggle="collapse" href="#tags_1" aria-expanded="true"><span class="icon"><span class="feather-icon"><i data-feather="chevron-down"></i></span></span></a>
															</div>
														</div>
														<div id="tags_1" class="collapse show">
															<div class="card-body">
																<div class="form-group mb-0">
																	<select id="input_tags" class="form-control" multiple="multiple">
																		<option>Collaborator</option>
																		<option>Designer</option>
																		<option>React Developer</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border overflow-hidden">
														<div class="card-header card-header-action">
															<a role="button" data-bs-toggle="collapse" href="#post_1" aria-expanded="true">
																<div class="d-flex align-items-center">
																	<h6 class="me-2 mb-0">Post type</h6>
																	<span class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span>
																</div>
															</a>
															<div class="card-action-wrap">
																<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"  data-bs-toggle="collapse" href="#post_1" aria-expanded="true"><span class="icon"><span class="feather-icon"><i data-feather="chevron-down"></i></span></span></a>
															</div>
														</div>
														<div id="post_1" class="collapse show">
															<div class="card-body">
																<div class="form-check mb-1">
																	<input type="radio" id="customRadio1" name="customRadio" class="form-check-input" checked>
																	<label class="form-check-label" for="customRadio1">Image Post</label>
																</div>
																<div class="form-check mb-1">
																	<input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
																	<label class="form-check-label" for="customRadio2">Video Post</label>
																</div>
																<div class="form-check mb-1">
																	<input type="radio" id="customRadio3" name="customRadio" class="form-check-input">
																	<label class="form-check-label" for="customRadio3">Quote Post</label>
																</div>
																<div class="form-check">
																	<input type="radio" id="customRadio4" name="customRadio" class="form-check-input">
																	<label class="form-check-label" for="customRadio4">Gallery Post</label>
																</div>
															</div>
														</div>
													</div>
													<div class="card card-border overflow-hidden">
														<div class="card-header card-header-action">
															<a role="button" data-bs-toggle="collapse" href="#prev_1" aria-expanded="true">
																<div class="d-flex align-items-center">
																	<h6 class="me-2 mb-0">Preview Image</h6>
																	<span class="btn btn-xs btn-icon btn-rounded btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add Category"><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span></span>
																</div>
															</a>
															<div class="card-action-wrap">
																<a class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"  data-bs-toggle="collapse" href="#prev_1" aria-expanded="true"><span class="icon"><span class="feather-icon"><i data-feather="chevron-down"></i></span></span></a>
															</div>
														</div>
														<div id="prev_1" class="collapse show">
															<div class="card-body">
																<input type="file" id="input-file-now" class="dropify" />
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
						<!-- Add Category -->
						<div id="add_new_cat" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h6 class="text-uppercase fw-bold mb-3">Add Category</h6>
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<input class="form-control" type="text" placeholder="Category Name"/>
													</div>
												</div>
											</div>
											<button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Add Category -->
						
						<!-- Add Tag -->
						<div id="add_new_tag" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h6 class="text-uppercase fw-bold mb-3">Add Tag</h6>
										<form>
											<div class="row gx-3">
												<div class="col-sm-12">
													<div class="form-group">
														<select id="input_tags_1" class="form-control" multiple="multiple">
															<option selected="selected">Collaborator</option>
															<option selected="selected">Designer</option>
															<option selected="selected">React Developer</option>
															<option selected="selected">Promotion</option>
															<option selected="selected">Advertisement</option>
														</select>
													</div>
												</div>
											</div>
											<button type="button" class="btn btn-primary float-end" data-bs-dismiss="modal">Add</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Add Tag -->
					</div>
				</div>
			</div>
			<!-- /Page Body -->
		</div>
		<!-- /Main Content -->
	</div>
    <!-- /Wrapper -->

	<!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
   	<script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Simplebar JS -->
	<script src="vendors/simplebar/dist/simplebar.min.js"></script>
	
	<!-- Data Table JS -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="vendors/datatables.net-select/js/dataTables.select.min.js"></script>
    
	<!-- Select2 JS -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
   
	<!-- Tinymce JS -->
    <script src="vendors/tinymce/tinymce.min.js"></script>
	<script src="dist/js/tinymce-data.js"></script>

	<!-- Dropify JS -->
	<script src="vendors/dropify/dist/js/dropify.min.js"></script>
	<script src="dist/js/dropify-data.js"></script>
	
	<!-- Daterangepicker JS -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="dist/js/daterangepicker-data.js"></script>

	<!-- Init JS -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/blog-data.js"></script>
	<script src="dist/js/chips-init.js"></script>
</body>

<!-- Mirrored from hencework.com/theme/jampack/classic/add-new-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Sep 2022 06:13:05 GMT -->
</html>