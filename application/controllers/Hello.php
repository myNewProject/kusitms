<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hello extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->_header('index');

		$this->load->view('front');

		$this->_footer('index');
	}	

	public function about($index) {
		$this->_header('main-header');

		if ($index === null) {
			$index = 'about';
		}

		$this->load->model('test_model');

		switch ($index) {
			case 'about':
				$test_item = $this->test_model->gets();
				$this->load->view('about', array('test_item'=>$test_item));
				break;
			
			case 'organization':
				$this->load->view('organization');
				break;

			case 'management':
				$this->load->view('management');
				break;

			case 'aoa':
				$this->load->view('aoa');
				break;

			case 'ci':
				$this->load->view('ci');
				break;

			default:
				$this->load->view('about');
				break;
		}
		$this->_footer('main-footer');
	}

	public function _header($index) {
		
		switch ($index) {
			case 'main-header':
				$this->load->view('main-head');
				$this->load->view('main-header');
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
?>
