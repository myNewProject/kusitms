<link rel="stylesheet" type="text/css" href="<?=site_url('/static')?>/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=site_url('/static')?>/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		검색 결과
		</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?=site_url('/Hello')?>">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=site_url('/SearchEngine')?>">검색</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=$_SERVER['PHP_SELF']?>">검색결과</a>
					<i class="fa fa-angle-right"></i>
				</li>
			</ul>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12 news-page">
				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-comments"></i><?=$category?>
						</div>
						<div class="tools">
							<a href="javascript:;" class="reload"><!--구현하고싶다-->
							</a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-scrollable">
							<table class="table table-striped table-bordered table advance table-hover col-xs-12">
							<thead>
								<tr>
									<th><i class="fa fa-tag"></i> 위치</th>
									<th><i class="fa fa-file-text"></i> 제목</th>
									<th><i class="fa fa-user"></i> 작성자</th>
									<th><i class="fa fa-calendar"></i> 작성일</th>
									<th><i class="fa fa-eye"></i> 조회수</th>
								</tr>
							</thead>
							<tbody>
							<?=$_board?>
							</tbody>
							</table>
							<?=$_footer?>
						</div>
					</div>
				</div>
				<!-- END SAMPLE TABLE PORTLET-->
			</div>
		</div>
	</div>
</div>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=site_url('/static')?>/assets/admin/pages/scripts/table-managed.js"></script>
