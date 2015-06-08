<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth extends MY_Controller {
 	public function __construct()
    	{
        		parent::__construct();
    	}

	public function logout() {
		$this->session->sess_destroy();
                 $returnURL = $this->input->get('returnURL');
		redirect($returnURL ? $returnURL : site_url('/Hello'));
	}

    	public function register() {
                $this->_header('main-header');

                $this->load->library('form_validation');
 
                $this->form_validation->set_rules('name', '이름', 'required|min_length[2]|max_length[20]');
                $this->form_validation->set_rules('university', '학교');
                $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[user.email]');
                $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
                $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
                $this->form_validation->set_rules('phone', '전화번호');

                if($this->form_validation->run() === false){
                    $this->load->view('joinus');    
                } else {
                    if(function_exists('password_hash')) {
                        $this->load->helper('password');
                    }
                    $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

                    $this->load->model('member_model');
                    $this->user_model->add(array(
                        'email'=>$this->input->post('email'),
                        'password'=>$hash,
                        'nickname'=>$this->input->post('nickname')
                        ));
                    $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
                    redirect(site_url('/Hello'));
                }
         
             
                $this->_footer('main-footer');   
         }

    	public function authentication() {
    		$this->load->model('member_model');
                  $user = $this->member_model->getByEmail(array('email'=>$this->input->post('email')));
                  if(function_exists('password_hash')) {
                        $this->load->helper('password');
                    }
                    
    		if ( $this->input->post('email') == $user->email ) {
                          // 세션 정보 세팅
                          $this->session->set_userdata('is_login', true);
                          $this->session->set_userdata('username', $user->name);
                          $this->session->set_userdata('userpic', $user->picture);
                          if ($user->class === '학회장' || '부학회장' || '대외홍보팀장' || '대외홍보팀') {
                            $this->session->set_userdata('postAuth', true);
                          }

                          $returnURL = $this->input->get('returnURL');
                          log_message('info', $returnURL);
                          redirect($returnURL ? $returnURL : site_url('/Hello'));
                    
    		} else {
    			$this->session->set_flashdata('message', '로그인에 실패 했습니다.');
                          $returnURL = $this->input->get('returnURL');
    			redirect($returnURL ? $returnURL : site_url('/Hello'));
    		}
    	}

    }