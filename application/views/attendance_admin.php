<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		출석부 <small>출석관리</small>
		</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?=site_url('/Hello')?>">Home</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=site_url('/Hello/attendance')?>">출석부</a>
					<i class="fa fa-angle-right"></i>
				</li>
				<li>
					<a href="<?=site_url('/Hello/attendance/admin')?>">출석관리</a>
				</li>
			</ul>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row margin-bottom-30">
			<table class="table table-striped">
 				<thead>
 					<tr>
 						<th>이름</th>
 						<th>1주차</th>
 						<th>2주차</th>
 						<th>3주차</th>
 						<th>4주차</th>
 						<th>5주차</th>
 						<th>6주차</th>
 						<th>7주차</th>
 						<th>8주차</th>
 						<th>9주차</th>
 						<th>10주차</th>
 						<th>11주차</th>
 						<th>12주차</th>
 					</tr>
 				</thead>
 				<tbody>
 					<!-- 출석 확인 -->
 					<?=$attend_result?>
 				</tbody>
			</table>
		</div>
		<!--/row-->
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->
