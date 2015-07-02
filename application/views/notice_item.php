<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			공지사항 <small><?=$category?></small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?=site_url('/Hello')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Notice/main-notice')?>">전체 공지</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<?=$_nav?>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Notice/notice_item')?>/<?=$notice_item->id?>">공지 보기</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 news-page blog-page">
					<div class="row">
						<div class="col-md-12 blog-tag-data">
							<h3><?=$notice_item->title?></h3>
							<!-- 포스터 쓸게있다면 이부분에
							<img src="../../assets/admin/pages/media/gallery/item_img1.jpg" class="img-responsive" alt="">
							-->
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6 blog-tag-data-inner">
									<ul class="list-inline">
										<li>
											<i class="fa fa-calendar"></i>
											<?=$notice_item->postDate?>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="#">
											38 Comments </a>
										</li>
									</ul>
								</div>
							</div>
							<hr>
							<div class="news-item-page">
								<?=$notice_item->content?>
							</div>
							<hr>
							<!-- BEGIN COMMENTS -->
							<div class="media">
								<h3>Comments</h3>
								<a href="#" class="pull-left">
								<img alt="" src="../../assets/admin/pages/media/blog/9.jpg" class="media-object">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Media heading <span>
									5 hours ago / <a href="#">
									Reply </a>
									</span>
									</h4>
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
									</p>
									<hr>
									<!-- Nested media object -->
									<div class="media">
										<a href="#" class="pull-left">
										<img alt="" src="../../assets/admin/pages/media/blog/5.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											17 hours ago / <a href="#">
											Reply </a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
										</div>
									</div>
									<!--end media-->
									<hr>
									<div class="media">
										<a href="#" class="pull-left">
										<img alt="" src="../../assets/admin/pages/media/blog/7.jpg" class="media-object">
										</a>
										<div class="media-body">
											<h4 class="media-heading">Media heading <span>
											2 days ago / <a href="#">
											Reply </a>
											</span>
											</h4>
											<p>
												 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
											</p>
										</div>
									</div>
									<!--end media-->
								</div>
							</div>
							<!--end media-->
							<hr>
							<!-- END COMMENTS -->
							<!-- BEGIN COMMENTS POST -->
							<div class="post-comment">
								<h3>Leave a Comment</h3>
								<form role="form" action="#">
									<div class="form-group">
										<label class="control-label">Name <span class="required">
										* </span>
										</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Email <span class="required">
										* </span>
										</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Message <span class="required">
										* </span>
										</label>
										<textarea class="col-md-10 form-control" rows="8"></textarea>
									</div>
									<button class="margin-top-20 btn blue" type="submit">Post a Comment</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->