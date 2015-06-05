	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			소 개 <small>학회 소개</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?=site_url('/Hello')?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Hello/about/about')?>">소 개</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?=site_url('/Hello/about/about')?>">학회 소개</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row margin-bottom-30">
				<div class="col-md-6">
					<h3>한국대학생IT경영학회 란?</h3>
					<p>
						여기다가는 대충 소개할 말을 쓸건데 무슨말을 써야할지 모르겠다. 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기 그래서 여기부턴 복사하기/붙여넣기
					</p>
					<!-- Blockquotes -->
					<blockquote class="hero">
						<p>
							 사람들이 좋다. 큐시즘이 좋다.
						</p>
						<small>큐시즘 구호</small>
					</blockquote>
				</div>
				<div class="col-md-6">
					<iframe src="http://serviceapi.nmv.naver.com/flash/convertIframeTag.nhn?vid=27830FEFAD6AF977AE2E26AE0E820EF3DC32&outKey=V12671a3d0995567d773ac97fa930623e65a0c6c2cf5cad3aaabdc97fa930623e65a0" style="width:100%; height:327px;border:0" frameborder="no" scrolling="no"></iframe>
				</div>
			</div>
			<!--/row-->
			<!-- Meer Our Team -->
			<div class="headline">
				<h3>임원진 소개</h3>
			</div>
			<div class="row thumbnails">
			<? foreach ($test_item as $each_item) {
				
				?>	
				<div class="col-md-3">
					<div class="meet-our-team">
						<h3><?=$each_item->name ?> <br>
							<small><? echo $each_item->class ." / ". $each_item->university ?> </small></h3>
						<img src="<? echo site_url('/static/img/member').'/'.$each_item->id ?>.jpg" alt="" class="img-responsive"/>
						<div class="team-info">
							<p>
								 <?=$each_item->ment ?>
							</p>
							<ul class="social-icons pull-right">
								<li>
									<a href="#" data-original-title="twitter" class="twitter">
									</a>
								</li>
								<li>
									<a href="<?=$each_item->email ?>" data-original-title="facebook" class="facebook">
									</a>
								</li>
								<li>
									<a href="#" data-original-title="linkedin" class="linkedin">
									</a>
								</li>
								<li>
									<a href="#" data-original-title="Goole Plus" class="googleplus">
									</a>
								</li>
								<li>
									<a href="#" data-original-title="skype" class="skype">
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<?
			} ?> 
			
				
			</div>
			<!--/thumbnails-->
			<!-- //End Meer Our Team -->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	