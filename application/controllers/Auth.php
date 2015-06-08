<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
  }

  public function logout() {
    $this->session->sess_destroy();
    $returnURL = $this->input->get('returnURL');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function register() {
    $this->_header('main-header');

    $this->load->library('form_validation');

    $this->form_validation->set_rules('name', '이름', 'required|min_length[2]|max_length[20]');
    $this->form_validation->set_rules('university', '학교');
    $this->form_validation->set_rules('email', '이메일 주소', 'required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', '비밀번호', 'required|min_length[6]|max_length[30]|matches[re_password]');
    $this->form_validation->set_rules('re_password', '비밀번호 확인', 'required');
    $this->form_validation->set_rules('phone', '전화번호');

    if($this->form_validation->run() === false){
      $this->load->view('register');    
    } else {
      // 프사 업로드
      $file = $this->upload_receive('picture');
     
     // 비밀번호 보안
      if(function_exists('password_hash')) {
        $this->load->helper('password');
      }
      $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT);

      // 데이터베이스 업로드
      $this->load->model('member_model');
      $this->member_model->add(array(
        'name'=>$this->input->post('name'),
        'university'=>$this->input->post('university'),
        'email'=>$this->input->post('email'),
        'password'=>$hash,
        'phone'=>$this->input->post('phone'),
        'class'=>$this->input->post('class'),
        'ment'=>$this->input->post('ment'),
        'member'=>$this->input->post('member'),
        'picture'=>$file['file_name'],
        'age'=>$this->input->post('age')
        ));
      $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
      redirect($_SERVER['HTTP_REFERER']);
    }


    $this->_footer('main-footer');
  }

  public function authentication() {  // 로그인
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
      if ($user->class === '학회장' || 
        $user->class === '부학회장' ||
        $user->class === '대외홍보팀장' ||
        $user->class === '대외홍보팀') {
        $this->session->set_userdata('postAuth', true);
      }

      $returnURL = $this->input->get('returnURL');
      log_message('info', $returnURL);
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->session->set_flashdata('message', '로그인에 실패 했습니다.');
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  public function upload_receive($file_name) {
    // 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
    $config['upload_path'] = './static/img/member';
    // 허용되는 파일의 최대 사이즈 (100MB)
    $config['max_size'] = '102400';
    // 허용되는 파일 종류 All
    $config['allowed_types'] = 'gif|jpg|png';
    // 파일명 암호화 True
    $config['encrypt_name'] = TRUE;
    
    $this->load->library('upload', $config);

    if(! $this->upload->do_upload($file_name)) {
      
    } else {
      $data = $this->upload->data();
    }
    
    return $data;
  }

}