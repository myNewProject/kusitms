<link href="<?=site_url('/static')?>/assets/admin/pages/css/error.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			404 에러 <small>페이지를 찾을 수 없습니다.</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?=site_url('/Hello')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Extra</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">404 에러</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12 page-404">
					<div class="number">
						 404
					</div>
					<div class="details">
						<h3>Oops! 길을 잃으셨군요.</h3>
						<p>
							 당신이 검색한 페이지를 찾을 수 없습니다.<br/>
							<a href="<?=site_url('/Hello')?>">
							홈으로 </a>
							가거나 아래 검색창에서 찾아보세요.
						</p>
						<form action="#">
							<div class="input-group input-medium">
								<input type="text" class="form-control" placeholder="keyword...">
								<span class="input-group-btn">
								<button type="submit" class="btn blue"><i class="fa fa-search"></i></button>
								</span>
							</div>
							<!-- /input-group -->
						</form>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
		<!-- BEGIN CONTENT -->
	</div>
	<!-- END CONTENT -->
