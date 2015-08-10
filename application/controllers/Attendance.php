<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Attendance extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		redirect(site_url('/KusitmsErrorPage'));
	}	

	// 출석 관리자
	public function admin() {
		if (!$this->session->userdata('is_login')) {
			$this->session->set_flashdata('message', '로그인이 필요한 서비스 입니다.');
			redirect($this->input->get('curl').'/#login_form');
		}

		$this->_header('main-header');

		$this->load->model('attendance_model');
		$this->load->model('users_model');
		$member = $this->users_model->get_man_member($this->session->userdata('userid')); // 로그인 한사람의 기수
		$attend_result = $this->attendance_model->getAll($member[0]->member); // 해당기수 출석부 보기
		
		// 출석부 보기
		$attendent = "";
		$attend = array_pop($attend_result);

		while (!empty($attend_result)) {
			for ($i=0; $i<13; $i++) {
				if ($i==0) {
					$attendent .= "<tr><td>".$this->users_model->get_name($attend->user_id)[0]->name."</td>"; 
				} else {
					if (empty($attend->week)) {
						$attendent .= "<td>x</td>";
					} else if ($attend->week != $i) {
						$attendent .= "<td>x</td>";
					} else {
						$attendent .= "<td>".$attend->check_in."</td>";
						$attend = array_pop($attend_result);
					}
				}

				if ($i == 12) {
					$attendent .= "</tr>";
				}
			}
		}

		$this->load->view('attendance_admin', array('attend_result'=>$attendent));
		
		$this->_footer('main-footer');
	}

	public function check() {
		redirect(site_url('/KusitmsErrorPage'));
	}
	public function test() {
		$this->load->model('users_model');
		$test = $this->users_model->get_last_id();
		echo $test[0]->last_id;

	}

	private function attend() {
		$this->load->model('attendance_model');
		$this->load->model('users_model');
		
		$member = $this->users_model->get_man_member($this->session->userdata('userid'));
		$result = $this->attendance_model->attend(
			$member, 
			$this->input->post('user_id'), 
			$this->input->post('week'),
			$this->input->post('check_in'));
		
		return $result;
	}
}
?>