<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-full-width">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?=site_url('/Hello')?>">
			<img src="<?=site_url('/static')?>/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HORIZANTAL MENU -->
		<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
		<!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) sidebar menu below. So the horizontal menu has 2 seperate versions -->
		<div class="hor-menu hidden-sm hidden-xs">
			<ul class="nav navbar-nav">
				<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the horizontal opening on mouse hover -->
				<li class="classic-menu-dropdown">
					<a href="<?=site_url('/Hello')?>">
					HOME 
					</a>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;" class="dropdown-toggle" data-hover="megamenu-dropdown" data-close-others="true">
					학회소개 <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu" style="min-width: 600px;">
						<li>
							<!-- Content container to add padding -->
							<div class="mega-menu-content">
								<div class="row">
									<div class="col-md-4">
										<ul class="mega-menu-submenu">
											<li>
												<h3>소 개</h3>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/about')?>">
												<i class="fa fa-angle-right"></i>학회소개 <span class="badge badge-roundless badge-danger">new</span></a>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/organization')?>">
												<i class="fa fa-angle-right"></i>조직도</a>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/management')?>">
												<i class="fa fa-angle-right"></i>운영진 소개 <span class="badge badge-roundless badge-warning">update</span></a>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/history')?>">
												<i class="fa fa-angle-right"></i>히스토리</a>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/aoa')?>">
												<i class="fa fa-angle-right"></i>정관</a>
											</li>
											<li>
												<a href="<?=site_url('/Hello/about/ci')?>">
												<i class="fa fa-angle-right"></i>학회 CI</a>
											</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul class="mega-menu-submenu">
											<li>
												<h3>공지사항</h3>
											</li>
											<li>
												<a href="<?=site_url('/Notice')?>/main_notice">
												<i class="fa fa-angle-right"></i>전체 공지 </a>
											</li>
											<li>
												<a href="<?=site_url('/Notice')?>/kusitms_notice">
												<i class="fa fa-angle-right"></i>학회 공지 </a>
											</li>
											<li>
												<a href="<?=site_url('/Notice')?>/edu_schedule">
												<i class="fa fa-angle-right"></i>교육 일정 </a>
											</li>
											<li>
												<a href="<?=site_url('/Notice')?>/abroad_notice">
												<i class="fa fa-angle-right"></i>언론보도 </a>
											</li>
											<li>
												<a href="<?=site_url('/Notice')?>/diary">
												<i class="fa fa-angle-right"></i>활동일지 </a>
											</li>
											<li>
												<a href="<?=site_url('/Notice/add')?>">
												<i class="fa fa-angle-right"></i>공지 작성 </a>
											</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul class="mega-menu-submenu">
											<li>
												<h3>동문회(개발중)</h3>
											</li>
											<li>
												<a href="<?=site_url('/Hello')?>">
												<i class="fa fa-angle-right"></i>동문회 소개 </a>
											</li>
											<li>
												<a href="<?=site_url('/Hello')?>">
												<i class="fa fa-angle-right"></i>동문회 조직도 </a>
											</li>
											<li>
												<a href="<?=site_url('/Hello')?>">
												<i class="fa fa-angle-right"></i>동문회 공지 </a>
											</li>
											<li>
												<a href="<?=site_url('/Hello')?>">
												<i class="fa fa-angle-right"></i>멘토링 </a>
											</li>
											<li>
												<a href="<?=site_url('/Hello')?>">
												<i class="fa fa-angle-right"></i>동문회에게 질문 </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;" class="dropdown-toggle" data-hover="megamenu-dropdown" data-close-others="true">
					<?=$member?>기 <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu" style="min-width: 400px;">
						<li>
							<!-- Content container to add padding -->
							<div class="mega-menu-content ">
								<div class="row">
									<div class="col-md-6">
										<ul class="mega-menu-submenu">
											<li>
												<h3>회원 소개</h3>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>회원 소개 </a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>회원 조직도 </a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>교육 일정</a>
											</li><br>
											<li>
												<h3>운영진 게시판</h3>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/edu_team?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>교육팀<span class="badge badge-roundless badge-warning">new</span></a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/management_team?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>경영총괄팀<span class="badge badge-roundless badge-warning">new</span></a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/promote_team?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>대외홍보팀</a>
											</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="mega-menu-submenu">
											<li>
												<h3>조별 게시판</h3>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/1?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>일일호프 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/2?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>투미닛 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/3?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>보람삼 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/4?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>사겨 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/5?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>오구오구 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/6?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>육감적인 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/7?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>두마리토끼를 잡 조</a>
											</li>
											<li>
												<a href="<?=site_url('/Members')?>/team_board/8?member=<?=$member?>">
												<i class="fa fa-angle-right"></i>팔루미 조</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="mega-menu-dropdown">
					<a data-toggle="dropdown" href="javascript:;" class="dropdown-toggle" data-hover="megamenu-dropdown" data-close-others="true">
					이전 기수 <i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<!-- Content container to add padding -->
							<div class="mega-menu-content ">
								<div class="row">
									<div class="col-md-12">
										<ul class="mega-menu-submenu">
											<li>
												<h3>이전 기수</h3>
											</li>
											<? for ($i=1; $i < $member ; $i++) { 
												# code...
											?>
											<li>
												<a href="<?=site_url('/Members')?>/member_intro?member=<?=$i?>">
												<i class="fa fa-angle-right"></i><?=$i?>기</a>
											</li>
											<?	}	?>
										</ul>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END HORIZANTAL MENU -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
		<form class="search-form" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<!-- BEGIN LOGIN FORM -->
			<ul class="nav navbar-nav pull-right">
			<?php 
			if ($this->session->userdata('is_login')) {	?>
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-bell"></i>
					<span class="badge badge-default">
					7 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3><span class="bold">12 pending</span> notifications</h3>
							<a href="extra_profile.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="time">just now</span>
									<span class="details">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
									New user registered. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">3 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Server #12 overloaded. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">10 mins</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Server #2 not responding. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">14 hrs</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									Application error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">2 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Database overloaded 68%. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">3 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									A user IP blocked. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">4 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
									Storage Server #4 not responding dfdfdfd. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">5 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
									System Error. </span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="time">9 days</span>
									<span class="details">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
									Storage server failed. </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-envelope-open"></i>
					<span class="badge badge-default">
					4 </span>
					</a>
					<ul class="dropdown-menu">
						<li class="external">
							<h3>You have <span class="bold">7 New</span> Messages</h3>
							<a href="page_inbox.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="<?=site_url('/static')?>/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">Just Now </span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="<?=site_url('/static')?>/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">16 mins </span>
									</span>
									<span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="<?=site_url('/static')?>/assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Bob Nilson </span>
									<span class="time">2 hrs </span>
									</span>
									<span class="message">
									Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="<?=site_url('/static')?>/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Lisa Wong </span>
									<span class="time">40 mins </span>
									</span>
									<span class="message">
									Vivamus sed auctor 40% nibh congue nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
									<span class="photo">
									<img src="<?=site_url('/static')?>/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
									</span>
									<span class="subject">
									<span class="from">
									Richard Doe </span>
									<span class="time">46 mins </span>
									</span>
									<span class="message">
									Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-calendar"></i>
					<span class="badge badge-default">
					3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="page_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New release v1.2 </span>
									<span class="percent">30%</span>
									</span>
									<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
									<span class="progress">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
									<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">10%</span>
									</span>
									<span class="progress">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Web server upgrade</span>
									<span class="percent">58%</span>
									</span>
									<span class="progress">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">85%</span>
									</span>
									<span class="progress">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New UI release</span>
									<span class="percent">38%</span>
									</span>
									<span class="progress progress-striped">
									<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
									</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<? echo site_url('/static/img/member').'/'.$this->session->userdata('userpic');?>"/>
					<span class="username username-hide-on-mobile">
					<?=$this->session->userdata('username')?> </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="<?=site_url('/')?>auth/logout">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			<?php
			} else {	?>
				<li class="classic-menu-dropdown">
					<a data-toggle="modal" href="#login_form">LOGIN</a>
					<div class="modal fade" id="login_form" role="dialog" aria-labelledby="login_title" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="modal-title" id="login_title">
										<h3>로그인</h3>
									</div>
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
										<form class="form-horizontal" method="post" action="<?=site_url('/')?>auth/authentication<?=empty($returnURL) ? '' : '?returnURL='.rawurlencode($returnURL) ?>">	
											<div class="form-group">
												<label class="control-label col-sm-2" for="inputEmail">아이디</label>
												<div class="col-sm-10">
													<input class="form-control" type="text" id="email" name="email" placeholder="이메일">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-sm-2" for="inputPassword">비밀번호</label>
												<div class="col-sm-10">
													<input class="form-control" type="password" id="password" name="password" placeholder="비밀번호">
												</div>
											</div>
										
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary">로그인</button>
											</div>
										</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
							
				</li>
				<li class="mega-menu-dropdown">
					<a href="<?=site_url('/Auth/register')?>">JOIN US</a>
				</li>
			<?php
			}
			?>
			<!-- END LOGIN FORM -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->

	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- BEGIN HORIZONTAL RESPONSIVE MENU -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<ul class="page-sidebar-menu" data-slide-speed="200" data-auto-scroll="true">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<!-- DOC: This is mobile version of the horizontal menu. The desktop version is defined(duplicated) in the header above -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn submit"><i class="icon-magnifier"></i></button>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="active">
					<a href="index.html">
					HOME <span class="selected">
					</span>
					</a>
				</li>
				<li>
					<a href="#">
					학회소개 <span class="arrow"></span></a>
					<ul class="sub-menu">
						<li>
							<a href="<?=site_url('/Hello/about/about')?>">
							소  개 <span class="arrow"></span></a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Hello/about/about')?>">
									학회소개 </a>
								</li>
								<li>
									<a href="<?=site_url('/Hello/about/organization')?>">
									조직도 </a>
								</li>
								<li>
									<a href="<?=site_url('/Hello/about/management')?>">
									운영진 소개 </a>
								</li>
								<li>
									<a href="<?=site_url('/Hello/about/history')?>">
									히스토리 </a>
								</li>
								<li>
									<a href="<?=site_url('/Hello/about/aoa')?>">
									정관 </a>
								</li>
								<li>
									<a href="<?=site_url('/Hello/about/ci')?>">
									학회 CI </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							공지사항 <span class="arrow"></span></a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Notice')?>/main_notice">
									전체 공지 </a>
								</li>
								<li>
									<a href="<?=site_url('/Notice')?>/kusitms_notice">
									학회 공지 </a>
								</li>
								<li>
									<a href="<?=site_url('/Notice')?>/edu_schedule">
									교육 일정 </a>
								</li>
								<li>
									<a href="<?=site_url('/Notice')?>/abroad_notice">
									언론보도 </a>
								</li>
								<li>
									<a href="<?=site_url('/Notice')?>/diary">
									활동일지 </a>
								</li>
								<li>
									<a href="<?=site_url('/Notice/add')?>">
									공지 작성 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							동문회(개발중) <span class="arrow"></span></a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Hello')?>/main_notice">
									동문회 소개 </a>
								</li>
								<li>
									<a href="#">
									동문회 조직도 </a>
								</li>
								<li>
									<a href="#">
									동문회 공지 </a>
								</li>
								<li>
									<a href="#">
									멘토링 </a>
								</li>
								<li>
									<a href="#">
									동문회에게 질문 </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
					11기 <span class="arrow"></span></a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							회원 소개 <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
									회원 소개 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
									회원 조직도 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/member_intro?member=<?=$member?>">
									교육 일정 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							운영진 게시판 <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Members')?>/edu_team?member=<?=$member?>">
									교육팀 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/management_team?member=<?=$member?>">
									경영총괄팀 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/promote_team?member=<?=$member?>">
									대외홍보팀 </a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
							조별 게시판 <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="<?=site_url('/Members')?>/team_board/1?member=<?=$member?>">
									일일호프 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/2?member=<?=$member?>">
									투미닛 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/3?member=<?=$member?>">
									보람삼 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/4?member=<?=$member?>">
									사겨 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/5?member=<?=$member?>">
									오구오구 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/6?member=<?=$member?>">
									육감적인 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/7?member=<?=$member?>">
									두마리토끼를 잡 조 </a>
								</li>
								<li>
									<a href="<?=site_url('/Members')?>/team_board/8?member=<?=$member?>">
									팔루미 조 </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a>
					이전 기수 <span class="arrow">
					</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							이전 기수 <span class="arrow">
							</span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#">
									1기 </a>
								</li>
								<li>
									<a href="index.html">
									2기 </a>
								</li>
								<li>
									<a href="index.html">
									3기 </a>
								</li>
								<li>
									<a href="index.html">
									4기 </a>
								</li>
								<li>
									<a href="index.html">
									5기 </a>
								</li>
								<li>
									<a href="index.html">
									6기 </a>
								</li>
								<li>
									<a href="index.html">
									7기 </a>
								</li>
								<li>
									<a href="index.html">
									8기 </a>
								</li>
								<li>
									<a href="index.html">
									9기 </a>
								</li>
								<li>
									<a href="index.html">
									10기 </a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END HORIZONTAL RESPONSIVE MENU -->
	</div>
	<!-- END SIDEBAR -->