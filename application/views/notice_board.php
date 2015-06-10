<link rel="stylesheet" type="text/css" href="<?=site_url('/static')?>/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=site_url('/static')?>/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

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
					<a href="<?=site_url('/Notice')?>/main_notice">공지사항</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<?=$_nav?>
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
							<table class="table table-hover col-xs-12">
							<thead>
							<?=$_header?>
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
