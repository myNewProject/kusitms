<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		기수별 게시판 <small><?=$category?></small>
		</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?=site_url('/Hello')?>">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=site_url('/Board/member_intro')?>?member=<?=$member?>"><?=$member?>기</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<?=$_nav?>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=site_url('/Board/board_item')?>/<?=$board_item->id?>?member=<?=$member?>">게시글 보기</a>
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
						<h3><?=$board_item->title?></h3>
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
										<?=$board_item->postDate?>
									</li>
									<li>
										<i class="fa fa-comments"></i>
										<a href="#comm">
										<?=$reply_count?> Comments </a>
									</li>
								</ul>
							</div>
						</div>
						<hr>
						<div class="news-item-page">
							<?=$board_item->content?>
						</div>
						<hr>
						<h3 id="comm">Comments</h3>
						<!-- BEGIN COMMENTS AREA -->
						<div class="col-md-12">
							<?=$comments?>
							<!-- END COMMENTS -->
						</div>
						<!-- BEGIN COMMENTS POST -->
						<? if ($this->session->userdata('is_login')) {	?>
							<form action="<?=site_url('/Board/addComment')?>/<?=$board_item->id?>?returnURL=<?=current_url()?>" method="post">
							<div class="col-md-12 bg-info" style="margin-top:30px">
								<div class="form-group">
									<input type="hidden" class="form-control" id="nickname" name="nickname" value="<?=$this->session->userdata('username')?>" readonly></input>
								</div>
								<div class="form-group">
									<label for="comment"><span class="glyphicon glyphicon-comment"></span> comment</label>
									<textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">리뷰작성</button>
							</div>
							</form>
						<? } ?>
						<!-- END COMMENTS AREA -->
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->

<script type="text/javascript">
	// 댓글 좋아요
	function likeComment (id) {
		$.post("<?=site_url('/Board')?>/likeComment", 
			{ index: id }, 
			function(result) {
				alert("좋아요를 눌렀습니다..");
				$("#bu"+id).html(result);
		});
	}

	function test(){
		
		$.ajax({
			type: 'POST',
			url: "<?=site_url('/Board')?>/likeComment", 
			data: { index: id },
			cache: false,
			async: false
		})
		.done(function () {
			alert("좋아요를 눌렀습니다.");
		});
		/*$.ajax({
			url: "
			success: function(){ alert("좋아요를 눌렀습니다."); }
		});*/
	}
	function keepSays (id) {
		$.post("<?=site_url('/Collection')?>/keepSays", 
			{ coll_id: id }, 
			function(result) {
				alert("담았습니다.");
				$("#"+id).html(result);
		});
	}
</script>