<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class SearchEngine extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		redirect('/SearchEngine/all_search');
	}	

	public function all_search() {		// 모두 검색
		$this->_header('main-header');

		$this->load->model('Board_model');
		$result = $this->Board_model->searchAll();

		$this->load->view('search', array('category'=>$_category, '_header'=>$result['_header'], '_board'=>$result['_board'], '_footer'=>$result['_footer']));

		$this->_footer('main-footer');
	}  
}
?>
