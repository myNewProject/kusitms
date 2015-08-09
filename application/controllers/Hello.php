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

	public function about($index) {		// 학회소개
		//GLOBAL $present_num;

		$this->_header('main-header');

		$this->load->model('users_model');
		switch ($index) {
			case 'about':	// 학회소개
				$cMember = $this->users_model->get_current_member();
				$member_item = $this->users_model->get_user($cMember->member);
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
				$member_item = $this->users_model->gets();
				$this->load->view('about', array('member_item'=>$member_item));
				break;
		}
		$this->_footer('main-footer');
	}

}
?>
