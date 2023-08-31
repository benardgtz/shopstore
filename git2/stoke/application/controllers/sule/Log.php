<?php
class Log extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('sule/Sulemode');
	}
	public function index(){
		//$this->session->set_userdata('username','ben');
		
		$this->load->view('sule/log');
	}
	public function auth(){
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false){
			$this->load->view('sule/log');
		}else{

		$username=$this->input->post('email',TRUE);
		$password=$this->input->post('password',TRUE);
		$result=$this->Sulemode->check_user($username,$password);
		if($result->num_rows()>0)
		{
			$data=$result->row_array();
			$name=$data['email'];
			$email=$data['name'];
			$level=$data['level'];
			
			$sesdata=array(
				'name' => $name,
				'email' => $email,
				'level' => $level, 
				'logged_in'=>TRUE,
				'can_access'=>1
			);
			$this->session->set_flashdata('status','login');
			$this->session->set_userdata($sesdata);//SET SESSION
			if($level==='0'){
				$this->session->set_flashdata('success','Logged in successfully..!');
				redirect('sule/sule/stoke');
			}elseif($level==='2'){
				$this->session->set_flashdata('success','Logged in successfully..!');
				redirect('sule/sule/stoke');
			}
		}else{
			"<script>alert('access denied')</script>";
		}
		$this->session->set_flashdata('error','wrong username or password,check and login again!');

		redirect('sule/Log');
		
	}
		}
		
}
?>