<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hello extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->_header('index');

		$this->load->view('front');

		$this->_footer('index');
	}	

	/*public function setPresent_num($num) {	// 현재기수 설정
		GLOBAL $present_num;
		$present_num = $num;
		$this->session->set_flashdata('message', '현재 기수 변경에 성공했습니다.');
	}*/

	public function about($index) {		// 학회소개
		//GLOBAL $present_num;

		$this->_header('main-header');

		$this->load->model('member_model');
		switch ($index) {
			case 'about':	// 학회소개
				$member_item = $this->member_model->get_member(11);
				$this->load->view('about', array('member_item'=>$member_item));
				break;
			
			case 'organization':	// 조직도
				$this->load->view('organization');
				break;

			case 'management':	//운영진 구성
				$this->load->view('management');
				break;

			case 'aoa':		// 정관
				$this->load->view('aoa');
				break;

			case 'ci':	// CI
				$this->load->view('ci');
				break;

			default:
				$member_item = $this->member_model->gets();
				$this->load->view('about', array('member_item'=>$member_item));
				break;
		}
		$this->_footer('main-footer');
	}

	public function notice($index) {		// 공지사항
		$this->_header('main-header');

		$this->load->model('notice_model');
		switch ($index) {
			case 'main_notice':	// 학회 공지
				//$result = $this->notice_model->gets(1);
				//$total = mysql_num_rows($result);

				/*if(!$total) {
					
					
				} else {
					if ($cpage == '') 
						$cpage = 1;
					$pagesize = 5;
					
					$totalpage = (int)($total/$pagesize);
					if (($total % $pagesize) != 0) $totalpage = $totalpage + 1;
					
					$counter = 0;
					
					while ($counter < $pagesize) :
						$newcounter = ($cpage - 1)*$pagesize + $counter;
						if ($newcounter == $total) 
							break;
						
						$id = mysql_result($result, $newcounter, "id");
						$writer = mysql_result($result, $newcounter, "writer");
						$topic = mysql_result($result, $newcounter, "topic");
						$hit = mysql_result($result, $newcounter, "hit");
						$wdate = mysql_result($result, $newcounter, "wdate");
						$space = mysql_result($result, $newcounter, "space");
						
						$t = "";
						if ($space > 0) {
							for ($i=0; $i<$space; $i++)
								$t = $t."[Re]";
						}
						
						echo "
							<tr>
								<td align=center>"; echo $id; echo "</td>
								<td align=center>"; echo $writer; echo "</td>
								<td align=left>
									<a href=content.php?board="; echo $board; echo "&id="; echo $id; echo ">"; echo $t.$topic; echo "</a></td>
								<td align=center>"; echo $wdate; echo "</td>
								<td align=center>"; echo $hit; echo "</td>
							</tr> ";
						
						$counter = $counter + 1;
					endwhile;
					
					echo "</tbody></table>";
					
					echo "<table border=0><tr><td width=100>";
						
					if ($cblock == '') 
						$cblock = 1;
					$blocksize = 5;
					
					$pblock = $cblock - 1;
					$nblock = $cblock + 1;
					
					$startpage = ($cblock - 1) * $blocksize + 1;
					
					$pstartpage = $startpage - 1;
					$nstartpage = $startpage + $blocksize;
					
					if ($pblock > 0) {
						echo "<ul class=pager>
							<li class=previous><a href=show.php?board=".$board."&cblock=".$pblock."&cpage=".$pstartpage.">이전블록</a></li>
							</ul> ";
					}
					echo "</td><td width=200><ul class=pagination> ";
					
					
					$i = $startpage;
					while ($i < $nstartpage) :
						if ($i > $totalpage)
							break;
						if ($i == $cpage) 
							echo "<li class=active><a href=show.php?board=".$board."&cblock=".$cblock."&cpage=".$i.">".$i."</a></li>" ;
						else 
							echo "<li><a href=show.php?board=".$board."&cblock=".$cblock."&cpage=".$i.">".$i."</a></li> ";
						$i = $i + 1;
					endwhile;
					
					 "</ul></td>
						<td width=100>";
					if ($nstartpage <= $totalpage)
						echo "<ul class=pager>
							<li class=next><a href=show.php?board=".$board."&cblock=".$nblock."&cpage=".$nstartpage.">다음블록</a></li></ul> ";
					echo "</td></tr></table> ";
				}*/

				$this->load->view('main_notice');
				break;
			
			case 'edu_notice':		// 교육팀 공지
				$this->load->view('organization');
				break;

			case 'manage_notice':		//경영총괄팀 공지
				$this->load->view('management');
				break;

			case 'promote_notice':	// 대외홍보팀 공지
				$this->load->view('aoa');
				break;

			case 'diary':	// 활동일지
				$this->load->view('ci');
				break;

			default:
				$test_item = $this->test_model->gets();
				$this->load->view('about', array('test_item'=>$test_item));
				break;
		}
		$this->_footer('main-footer');
	}

	public function pMember($index) {
		GLOBAL $present_num;

		$this->load->model('test_model');
		$this->_header('main-header');

		$this->load->model('test_model');
		switch ($index) {
			case 'mem_about':	// 회원소개
				$test_item = $this->test_model->get_member($present_num);
				$this->load->view('about', array('test_item'=>$test_item));
				break;
			
			case 'mem_organization':	// 조직도
				$this->load->view('organization');
				break;

			case 'schedule':		// 교육일정
				$this->load->view('management');
				break;

			default:
				$test_item = $this->test_model->gets();
				$this->load->view('about', array('test_item'=>$test_item));
				break;
		}
		$this->_footer('main-footer');
	}

	public function pManager($index) {
		GLOBAL $present_num;

		$this->load->model('test_model');
		$this->_header('main-header');

		$this->load->model('test_model');
		switch ($index) {
			case 'officer':	// 운영진 소개
				$test_item = $this->test_model->get_member($present_num);
				$this->load->view('about', array('test_item'=>$test_item));
				break;
			
			case 'edu':			// 교육팀
				$this->load->view('organization');
				break;

			case 'manage':		// 경영총괄팀
				$this->load->view('management');
				break;

			case 'promote':		// 대외홍보팀
				$this->load->view('management');
				break;

			default:
				$test_item = $this->test_model->gets();
				$this->load->view('about', array('test_item'=>$test_item));
				break;
		}
		$this->_footer('main-footer');
	}

	public function board($index) {
		GLOBAL $present_num;

		$this->load->model('');
		$this->_header('main-header');

		$this->load->model('test_model');
		switch ($index) {
			case 1:	// 회원소개
				$this->load->view('about');
				break;
			
			case 2:	// 조직도
				$this->load->view('organization');
				break;

			case 3:		// 교육일정
				$this->load->view('management');
				break;

			case 4:		// 교육일정
				$this->load->view('management');
				break;

			case 5:		// 교육일정
				$this->load->view('management');
				break;

			case 6:		// 교육일정
				$this->load->view('management');
				break;

			case 7:		// 교육일정
				$this->load->view('management');
				break;

			case 8:		// 교육일정
				$this->load->view('management');
				break;

			default:
				$test_item = $this->test_model->gets();
				$this->load->view('about', array('test_item'=>$test_item));
				break;
		}
		$this->_footer('main-footer');
	}
}
?>
