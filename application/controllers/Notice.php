<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Notice extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		redirect(site_url('/Notice/main_notice'));
	}	

	public function main_notice() {		// 공지사항
		$this->_header('main-header');

		$this->load->model('notice_model');
		
		// 교육일정
		$_eduSchedule="";
		if(!$all_result = $this->notice_model->gets(1)) {
			$_eduSchedule = "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						교육일정이 없습니다. </a>
						</h3>
					</div>";
			
		} else {
			foreach ($all_result as $result) {
				$id = $result->id;
				$writer = $result->writer;
				$title = $result->title;
				$content = $result->content;
				$postDate = $result->postDate;
				$_eduSchedule .= "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						".$title." </a>
						</h3>
						<div class='news-block-tags'>
							<strong>".$writer."</strong>
							<em>".$postDate."</em>
						</div>
						".$content."
						<a href='page_news_item.html' class='news-block-btn'>
						Read more <i class='m-icon-swapright m-icon-black'></i>
						</a>
					</div>";
			}	
		}

		// 멘토링 공지
		if(!$all_result = $this->notice_model->gets(2)) {
			$_mento = "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						멘토링 공지가 없습니다. </a>
						</h3>
					</div>";
			
		} else {
			foreach ($all_result as $result) {
				$id = $result->id;
				$writer = $result->writer;
				$title = $result->title;
				$content = $result->content;
				$postDate = $result->postDate;
				$_mento .= "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						".$title." </a>
						</h3>
						<div class='news-block-tags'>
							<strong>".$writer."</strong>
							<em>".$postDate."</em>
						</div>
						".$content."
						<a href='page_news_item.html' class='news-block-btn'>
						Read more <i class='m-icon-swapright m-icon-black'></i>
						</a>
					</div>";
			}	
		}

		// 동문회 공지
		if(!$all_result = $this->notice_model->gets(3)) {
			$_afterSociety = "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						동문회 공지가 없습니다. </a>
						</h3>
					</div>";
			
		} else {
			foreach ($all_result as $result) {
				$id = $result->id;
				$writer = $result->writer;
				$title = $result->title;
				$content = $result->content;
				$postDate = $result->postDate;
				$_afterSociety .= "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						".$title." </a>
						</h3>
						<div class='news-block-tags'>
							<strong>".$writer."</strong>
							<em>".$postDate."</em>
						</div>
						".$content."
						<a href='page_news_item.html' class='news-block-btn'>
						Read more <i class='m-icon-swapright m-icon-black'></i>
						</a>
					</div>";
			}	
		}

		// 학회 공지사항
		if(!$all_result = $this->notice_model->gets(4)) {
			$_notice = "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						공지사항이 없습니다. </a>
						</h3>
					</div>";
			
		} else {
			foreach ($all_result as $result) {
				$id = $result->id;
				$writer = $result->writer;
				$title = $result->title;
				$content = $result->content;
				$postDate = $result->postDate;
				$_notice .= "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						".$title." </a>
						</h3>
						<div class='news-block-tags'>
							<strong>".$writer."</strong>
							<em>".$postDate."</em>
						</div>
						".$content."
						<a href='page_news_item.html' class='news-block-btn'>
						Read more <i class='m-icon-swapright m-icon-black'></i>
						</a>
					</div>";
			}	
		}

		// 언론보도
		if(!$all_result = $this->notice_model->gets(5)) {
			$_extraBoard = "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						보도된 자료가 없습니다. </a>
						</h3>
					</div>";
			
		} else {
			foreach ($all_result as $result) {
				$id = $result->id;
				$writer = $result->writer;
				$title = $result->title;
				$content = $result->content;
				$postDate = $result->postDate;
				$_extraBoard .= "
					<div class='news-blocks'>
						<h3>
						<a href='page_news_item.html'>
						".$title." </a>
						</h3>
						<div class='news-block-tags'>
							<strong>".$writer."</strong>
							<em>".$postDate."</em>
						</div>
						".$content."
						<a href='page_news_item.html' class='news-block-btn'>
						Read more <i class='m-icon-swapright m-icon-black'></i>
						</a>
					</div>";
			}	
		}
		$this->load->view('main_notice', array('_eduSchedule'=>$_eduSchedule, '_mento'=>$_mento, '_afterSociety'=>$_afterSociety, '_notice'=>$_notice, '_extraBoard'=>$_extraBoard));
				
		$this->_footer('main-footer');
	}

	public function kusitms_notice() {
		$this->_header('main-header');

		$this->load->model('notice_model');  // Model 가져오기

		$_nav = "<a href='".site_url('/Notice')."/kusitms_notice'>학회 공지</a>";
		$_category = "학회공지";

		// 교육일정 가져오기
		$all_result = $this->notice_model->getBoard(1);
		$result = $this->make_board($all_result);

		$this->load->view('notice_board', array('_nav'=>$_nav, 'category'=>$_category, '_header'=>$result['_header'], '_board'=>$result['_board'], '_footer'=>$result['_footer']));

		$this->_footer('main-footer');
	}

	public function edu_schedule() {
		$this->_header('main-header');

		$this->load->model('notice_model');  // Model 가져오기

		$_nav = "<a href='".site_url('/Notice')."/edu_schedule'>교육 일정</a>";
		$_category = "교육일정";

		// 교육일정 가져오기
		$all_result = $this->notice_model->getBoard(2);
		$result = $this->make_board($all_result);

		$this->load->view('notice_board', array('_nav'=>$_nav, 'category'=>$_category, '_header'=>$result['_header'], '_board'=>$result['_board'], '_footer'=>$result['_footer']));

		$this->_footer('main-footer');
	}

	public function abroad_notice() {
		$this->_header('main-header');

		$this->load->model('notice_model');  // Model 가져오기

		$_nav = "<a href='".site_url('/Notice')."/abroad_notice'>언론보도</a>";
		$_category = "언론보도";

		// 언론 보도 자료 가져오기
		$all_result = $this->notice_model->getBoard(3);
		$result = $this->make_board($all_result);

		$this->load->view('notice_board', array('_nav'=>$_nav, 'category'=>$_category, '_header'=>$result['_header'], '_board'=>$result['_board'], '_footer'=>$result['_footer']));

		$this->_footer('main-footer');
	} 

	public function diary() {
		$this->_header('main-header');

		$this->load->model('notice_model');  // Model 가져오기

		$_nav = "<a href='".site_url('/Notice')."/diary'>활동일지</a>";
		$_category = "활동일지";

		// 언론 보도 자료 가져오기
		$all_result = $this->notice_model->getBoard(4);
		$result = $this->make_board($all_result);

		$this->load->view('notice_board', array('_nav'=>$_nav, 'category'=>$_category, '_header'=>$result['_header'], '_board'=>$result['_board'], '_footer'=>$result['_footer']));

		$this->_footer('main-footer');
	} 

	public function add() {
		if (!$this->session->userdata('is_login')) {
			$this->session->set_flashdata('message', '로그인이 필요한 서비스 입니다.');
			redirect('/Auth/login?returnURL='.rawurlencode(site_url('/Hello/add')));
		}

		if (!$this->session->userdata('postAuth')) {
			$this->session->set_flashdata('message', '권한이 없습니다');
			redirect($_SERVER['HTTP_REFERER']);
		}

		$this->_header('main-header');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('title', '제목', 'required');
		$this->form_validation->set_rules('contentArea', '본문', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('addNotice');
		} else {
			$this->load->model('notice_model');

			if (! $file = $this->upload_receive('attachment')) { // 첨부파일이 없을경우
				$this->notice_model->add($this->input->post('category'), $this->input->post('title'), $this->input->post('contentArea'), $this->session->userdata('userid'));
			} else {
				$this->notice_model->addFile($this->input->post('category'), $this->input->post('title'), $this->input->post('contentArea'), $this->session->userdata('userid'), $file['orig_name'], $file['file_name']);
			}
			$this->session->set_flashdata('message', '게시글 작성 성공');

			redirect(site_url('/Notice/main_notice'));
		}

		$this->_footer('main-footer');
	}

	public function upload_form() {
		// 사용자가 업로드 한 파일을 /static/img/addNotice 디렉토리에 저장한다.
		$config['upload_path'] = './static/img/addNotice';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if(! $this->upload->do_upload("upload")) {
			echo $this->upload->display_errors();
			echo "<script>alert('업로드에 실패 했습니다. ".$this->upload->display_errors('','')."')</script>";
		} else {
			$CKEditorFuncNum = $this->input->get('CKEditorFuncNum');
		
			$data = $this->upload->data();
			$filename = $data['file_name'];

			$url = site_url('/static').'/img/addNotice/'.$filename;
			iconv("UTF-8","EUC-KR",$url);
			
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CKEditorFuncNum."', '".$url."', '전송이 성공 했습니다.')</script>";
		}
	}

	public function upload_receive($file_name) {
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './static/user';
		// 허용되는 파일의 최대 사이즈 (100MB)
		$config['max_size'] = '102400';
		// 허용되는 파일 종류 All
		$config['allowed_types'] = '*';
		// 파일명 암호화 True
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);

		if(! $this->upload->do_upload($file_name)) {
			
		} else {
			$data = $this->upload->data();
		}
		
		return $data;
	}

	public function make_board($all_result) {
		$_header = "<tr>
					<th>
						 분류
					</th>
					<th>
						 제목
					</th>
					<th>
						 작성자
					</th>
					<th>
						 작성일
					</th>
					<th>
						 조회수
					</th>
				</tr>";

		if(!$all_result) {
			$_board = "
					<tr>
						<td colspan=5 align=center> 게시글이 없습니다.</td>
					</tr>";
			$_footer = "";
			
		} else {
			$cpage = $this->input->get('cpage');
			$cblock = $this->input->get('cblock');

			$_board="";
			$total = count($all_result);
			if ($cpage == '') 
				$cpage = 1;
			$pagesize = 5;
			
			$totalpage = (int)($total/$pagesize);
			if (($total % $pagesize) != 0) 
				$totalpage = $totalpage + 1;
			
			$counter = 0;

			while ($counter < $pagesize) :
				$newcounter = ($cpage - 1)*$pagesize + $counter;
				if ($newcounter == $total) 
					break;

				$result = $all_result[$newcounter];  // 각 게시글 하나씩 가져오기
				
				$id = $result->id;
				$category = $result->category;
				$writer = $result->writer;
				$title = $result->title;
				$postDate = $result->postDate;
				$click = $result->click;
				$_board .= "
					<tr>
						<td>
							 ".$category."
						</td>
						<td>
							 ".$title."
						</td>
						<td>
							 ".$writer."
						</td>
						<td>
							 ".$postDate."
						</td>
						<td>
							".$click."
						</td>
					</tr>
					";

				$counter = $counter + 1;
			endwhile;

			if ($cblock == '') 
				$cblock = 1;
			$blocksize = 5;
			
			$pblock = $cblock - 1;
			$nblock = $cblock + 1;
			
			$startpage = ($cblock - 1) * $blocksize + 1;
			
			$pstartpage = $startpage - 1;
			$nstartpage = $startpage + $blocksize;
			
			$_footer = "<ul class='pagination col-xs-12'>";
			if ($pblock > 0) {
				$_footer .= "<li><a href=".site_url('/Notice')."/edu_notice?cblock=".$pblock."&cpage=".$pstartpage." aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>";
			} else { 
				$_footer .= "<li class='disabled'><span><span aria-hidden='true'>&laquo;</span></span></li>";
			}
					
			$i = $startpage;
			while ($i < $nstartpage) :
				if ($i > $totalpage)
					break;
				if ($i == $cpage) 
					$_footer .= "<li class='active'><a href=".site_url('/Notice')."/edu_notice?cblock=".$cblock."&cpage=".$i.">".$i."</a></li>" ;
				else 
					$_footer .= "<li><a href=".site_url('/Notice')."/edu_notice?cblock=".$cblock."&cpage=".$i.">".$i."</a></li> ";
				$i = $i + 1;
			endwhile;
			
			if ($nstartpage <= $totalpage) {
				$_footer .= "<li><a href=".site_url('/Notice')."/edu_notice?cblock=".$nblock."&cpage=".$nstartpage." aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li></ul> ";
			} else {
				$_footer .= "<li class='disabled'><span><span aria-hidden='true'>&raquo;</span></span></li></ul> ";
			}
		}
		$return = array('_header'=>$_header, '_board'=>$_board, '_footer'=>$_footer);
		return $return;
	}
}
?>
