<link href="<?=site_url('/static')?>/assets/admin/pages/css/news.css" rel="stylesheet" type="text/css"/>

<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			공지사항 <small>학회 공지</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?=site_url('/Hello')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Notice')?>/main_notice">공지사항</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Notice')?>/main_notice">학회 공지</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12 news-page">
					<h1>학회 공지</h1>
					<div class="row">
						<!-- BEGIN CAROUSEL -->
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div id="myCarousel" class="carousel slide"  data-ride="carousel" data-pause="hover">
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="active item">
										<a href="#">
										<img src="<?=site_url('/static')?>/img/edu/학술제.png" class="img-responsive" alt="" href="#">
										</a>
									</div>
									<div class="item">
										<a href="#">
										<img src="<?=site_url('/static')?>/img/edu/150523교육커버최종.png" class="img-responsive" alt="">
										</a>
									</div>
									<div class="item">
										<a href="#">
										<img src="<?=site_url('/static')?>/img/edu/5주차교육커버(오투오).png" class="img-responsive" alt="">
										</a>
									</div>
									<div class="item">
										<a href="#">
										<img src="<?=site_url('/static')?>/img/edu/150502교육커버.png" class="img-responsive" alt="">
										</a>
									</div>
								</div>
								<!-- Carousel nav -->
								<a class="carousel-control left" href="#myCarousel" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control right" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								</ol>
							</div>
						</div>
						<div class="col-md-2"></div>
						<!-- END CAROUSEL -->
						<!-- begin col-md-4 -->
						<div class='col-md-4'>
							<div class='top-news margin-top-10'>
								<a href='<?=site_url('/Notice')?>/edu_schedule' class='btn blue'>
								<span>
								교육 일정 공지 </span>
								<em>
								<i class='fa fa-tags'></i>
								교육팀 주관 매주토요일 교육 </em>
								<i class='fa fa-calendar top-news-icon'></i>
								</a>
							</div>
							<? echo $_eduSchedule; ?>
							<a type="button" class="btn btn-primary" href="<?=site_url('/Notice')?>/edu_schedule">교육일정 보기</a>
						</div>
						<!--end col-md-4-->
						<div class="col-md-4">
							<div class="top-news margin-top-10">
								<a href="#" class="btn red">
								<span>
								멘토링 공지 </span>
								<em>
								<i class="fa fa-tags"></i>
								동문회 주관 멘토링 </em>
								<i class="fa fa-comment top-news-icon"></i>
								</a>
							</div>
							<? echo $_mento; ?>
							<a type="button" class="btn btn-primary" href="#">멘토링 전체 보기</a>

							<div class="top-news margin-top-10">
								<a href="#" class="btn green">
								<span>
								동문회 News </span>
								<em>
								<i class="fa fa-tags"></i>
								한국대학생IT경영학회 동문회 </em>
								<i class="fa fa-briefcase top-news-icon"></i>
								</a>
							</div>
							<? echo $_afterSociety; ?>
							<a type="button" class="btn btn-primary" href="#">동문회 공지 보기</a>
						</div>
						<!--end col-md-4-->
						<div class="col-md-4">
							<div class="top-news margin-top-10">
								<a href="<?=site_url('/Notice')?>/kusitms_notice" class="btn purple">
								<span>
								학회 공고 </span>
								<em>
								<i class="fa fa-tags"></i>
								한국대학생IT경영학회 공지사항 </em>
								<i class="fa fa-info top-news-icon"></i>
								</a>
							</div>
							<? echo $_notice; ?>
							<a type="button" class="btn btn-primary" href="<?=site_url('/Notice')?>/kusitms_notice">학회 공지 보기</a>

							<div class="top-news margin-top-10">
								<a href="<?=site_url('/Notice')?>/abroad_notice" class="btn yellow">
								<span>
								언론보도 </span>
								<em>
								<i class="fa fa-tags"></i>
								학회 외부 언론 보도자료 </em>
								<i class="fa fa-microphone top-news-icon"></i>
								</a>
							</div>
							<? echo $_extraBoard; ?>
							<a type="button" class="btn btn-primary" href="<?=site_url('/Notice')?>/abroad_notice">보도 자료 보기</a>
						</div>
						<!--end col-md-4-->
					</div>
					
					<div class="space20">
					</div>
					<h3>IT 관련 뉴스</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="news-blocks">
								<h3>
								<a href="page_news_item.html">
								Google Glass Technology.. </a>
								</h3>
								<div class="news-block-tags">
									<strong>LA, USA</strong>
									<em>2 hours ago</em>
								</div>
								<p>
									<img class="news-block-img pull-right" src="../../assets/admin/pages/media/gallery/image5.jpg" alt="">교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
								</p>
								<a href="page_news_item.html" class="news-block-btn">
								Read more <i class="m-icon-swapright m-icon-black"></i>
								</a>
							</div>
							<div class="news-blocks">
								<h3>
								<a href="page_news_item.html">
								Google Glass Technology.. </a>
								</h3>
								<div class="news-block-tags">
									<strong>Berlin, Germany</strong>
									<em>6 hours ago</em>
								</div>
								<p>
									 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
								</p>
								<a href="page_news_item.html" class="news-block-btn">
								Read more <i class="m-icon-swapright m-icon-black"></i>
								</a>
							</div>
						</div>
						<!--end col-md-3-->
						<div class="col-md-3">
							<div class="news-blocks">
								<h3>
								<a href="page_news_item.html">
								Google Glass Technology.. </a>
								</h3>
								<div class="news-block-tags">
									<strong>CA, USA</strong>
									<em>3 hours ago</em>
								</div>
								<p>
									<img class="news-block-img pull-right" src="../../assets/admin/pages/media/gallery/image3.jpg" alt="">교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
								</p>
								<a href="page_news_item.html" class="news-block-btn">
								Read more <i class="m-icon-swapright m-icon-black"></i>
								</a>
							</div>
							<div class="news-blocks">
								<h3>
								<a href="page_news_item.html">
								Google Glass Technology.. </a>
								</h3>
								<div class="news-block-tags">
									<strong>CA, USA</strong>
									<em>3 hours ago</em>
								</div>
								<p>
									 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
								</p>
								<a href="page_news_item.html" class="news-block-btn">
								Read more <i class="m-icon-swapright m-icon-black"></i>
								</a>
							</div>
						</div>
						<!--end col-md-3-->
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="news-blocks">
										<h3>
										<a href="page_news_item.html">
										Pusto odio dignissimos ducimus i quos dolores et qui blanditiis praesentium.. </a>
										</h3>
										<div class="news-block-tags">
											<strong>CA, USA</strong>
											<em>3 hours ago</em>
										</div>
										<p>
											<img class="news-block-img pull-right" src="../../assets/admin/pages/media/gallery/image2.jpg" alt="">교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
										</p>
										<a href="page_news_item.html" class="news-block-btn">
										Read more <i class="m-icon-swapright m-icon-black"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="news-blocks">
										<h3>
										<a href="page_news_item.html">
										Vero eos et accusamus et iusto od qui.. </a>
										</h3>
										<div class="news-block-tags">
											<strong>CA, USA</strong>
											<em>3 hours ago</em>
										</div>
										<p>
											 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
										</p>
										<a href="page_news_item.html" class="news-block-btn">
										Read more <i class="m-icon-swapright m-icon-black"></i>
										</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="news-blocks">
										<h3>
										<a href="page_news_item.html">
										Google Glass Technology.. </a>
										</h3>
										<div class="news-block-tags">
											<strong>CA, USA</strong>
											<em>3 hours ago</em>
										</div>
										<p>
											 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 교육 내용에 대한 자료 ~~~ 
										</p>
										<a href="page_news_item.html" class="news-block-btn">
										Read more <i class="m-icon-swapright m-icon-black"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!--end col-md-6-->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->