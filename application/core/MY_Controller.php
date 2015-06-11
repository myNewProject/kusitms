<?php
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if (!$this->input->is_cli_request()) {
			$this->load->library('session');
		}
	}

	public function _header($index) {
		$this->load->model('member_model');
		$cMember = $this->member_model->get_current_member();
		switch ($index) {
			case 'main-header':
				$this->load->view('main-head');
				$this->load->view('main-header', array('member'=>$cMember[0]->member));
				break;
			
			default:
				$this->load->view('header');
				break;
		}
	}

	public function _footer($index) {
		switch ($index) {
			case 'main-footer':
				$this->load->view('main-footer');
				break;
			
			default:
				$this->load->view('footer');
				break;
		}
	}
}