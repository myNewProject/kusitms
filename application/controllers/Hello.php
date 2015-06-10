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

			case 'history':		// 정관
				$this->load->view('history');
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
