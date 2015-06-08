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
						<a href="<?=site_url('/Hello/notice')?>/main_notice">공지사항</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Hello/notice')?>/main_notice">학회 공지</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-30">
				<div class="col-md-1"></div>
					<form action="<?=site_url('/Hello')?>/add" method="post" id="addForm" name="addForm" class="form-horizontal col-md-10" enctype="multipart/form-data">
						<? echo validation_errors(); ?>
						<div class="form-group">
							<label for="category" class="col-sm-1 control-label">분류</label>
							<div class="col-sm-11">
								<select class="form-control" id="category" name="category">
									<optgroup  LABEL="─────────">
										<option value="1">교육일정</option>
										<option value="2">학회 공지</option>
										<option value="3">멘토링 공지</option>
										<option value="4">동문회 공지</option>
										<option value="5">언론 보도</option>
									</optgroup>
									<optgroup  LABEL="─────────">
										<option value="6">교육팀 공지</option>
										<option value="7">경영총괄팀 공지</option>
										<option value="8">대외홍보팀 공지</option>
										<option value="9">활동일지</option>
									</optgroup>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="title" class="col-sm-1 control-label">제목</label>
							<div class="col-sm-11">
								<input type="text" class="form-control" id="title" name="title" placeholder="제목"/>
							</div>
						</div>
						<div>
							<textarea id="contentArea" name="contentArea" placeholder="본문" class="form-control" rows="15"></textarea>
						</div>
						<div class="form-group" style="margin-top : 20px">
							<label for="attachment" class="col-sm-2 col-md-1 control-label">첨부 파일</label>
							<div class="col-sm-10 col-md-11">
								<input type="file" id="attachment" name="attachment"/>
								<p class="help-block"> 최대용량 : 100 mb</p>
							</div>
						</div>
						<button type="submit" class="btn btn-default">제출</button>
					</form>
				<div class="col-md-2"></div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

<script  src="<?=site_url('/static')?>/plugin/ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('contentArea', { 
		'filebrowserUploadUrl' : '/Kusitms/Hello/upload_form'
	});
</script>