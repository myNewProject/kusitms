<link href="<?=site_url('/static')?>/assets/admin/pages/css/about-us.css" rel="stylesheet" type="text/css"/>

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
						한국대학생IT경영학회(KUSITMS)는 순수 대한민국 대학생들이 자발적으로 모여 2009년 12월 7일에 설립한 대학생 학회로 'IT', '경영', 'IT+경영'을 공부하고 연구하는 곳입니다.
						또한 다양한 네트워크를 형성하여 대한민국의 'IT'와 '경영'이 한층 더 발전할 수 있도록 이바지 하는 것을 목표로 하고 있습니다.
					</p>
					<!-- Blockquotes -->
					<blockquote class="hero">
						<p>
							 사람들이 좋다. 큐시즘이 좋다.
						</p>
						<small>큐시즘 구호</small>
					</blockquote>
					<p>
						저희 학회는 국내 유일의 IT와 경영을 융합시킨 대학 연합 학회로 IT 강국인 대한민국의 미래를 밝히고자 매 기수당 50~70명의 대학생들이 자발적으로 모여 참여하고 있습니다.
						IT, 경영 관련 세미나를 개최하고 있으며 학술적인 부분 외에도 청춘에 대한 고민을 함께하며 관련 강연회를 기획 및 대최하고 있습니다.
						또한 자기계발포럼, 초대형 리더십 강연회의 독자적인 브랜드를 보유하고 있습니다.
					</p>
				</div>
				<div class="col-md-6">
					<iframe src="http://serviceapi.nmv.naver.com/flash/convertIframeTag.nhn?vid=27830FEFAD6AF977AE2E26AE0E820EF3DC32&outKey=V12671a3d0995567d773ac97fa930623e65a0c6c2cf5cad3aaabdc97fa930623e65a0" style="width:100%; height:327px;border:0" frameborder="no" scrolling="no"></iframe>
				</div>
				<div class="col-md-12" align="center">
					<h3>10기 학교현황</h3>
					<p>
						University of Wellington, 가톨릭대, 가천대, 건국대, 경희대, 국민대, 남서울대, 단국대, 동국대, 동덕여대, 상명대, 서경대, 서울과기대, 서울시립대, 서울여대, 성균관대, 성신여대, 세종대, 숙명여대, 숭실대, 연세대, 인천대, 중앙대, 한국외대, 한성대, 한신대, 한양대, 한양여대, 홍익대 총 29개 학교
					</p><br>
					<h3>10기 회원 현황</h3>
					<p>
						총 55명 (운영진 17명, 회원 38명)
					</p>
				</div>
			</div>
			<!--/row-->
			<!-- Meer Our Team -->
			<div class="headline">
				<h3>임원진 소개</h3>
			</div>
			<div class="row thumbnails">
			<? foreach ($member_item as $each_item) {
				
				?>	
				<div class="col-md-3">
					<div class="meet-our-team">
						<h3><?=$each_item->name ?> <br>
							<small><? echo $each_item->class ." / ". $each_item->university ?> </small></h3>
						<? if ($each_item->picture != null) { ?>
							<img src="<? echo site_url('/static/img/member').'/'.$each_item->id ?>.jpg" alt="회원 사진" class="img-responsive"/>
						<? } else { ?>
							<img src="<?=site_url('/static/img/member')?>/nofile.png" alt="사진없음" class="img-responsive"/>
						<? } ?>
						<div class="team-info">
							<p>
								 <?=$each_item->ment ?>
							</p>
							<span class="pull-right">
									<a href="<?=$each_item->email ?>"><button class="btn btn-info"><span class="glyphicon glyphicon-envelope"></span></button></a>
									<a href="<?=$each_item->phone ?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-phone"></span></button></a>
							</span>
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
