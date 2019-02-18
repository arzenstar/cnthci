<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminvalidation extends CI_Model 
{
	public function validation()
	{
		$session=$this->session->userdata('admin');
		$cookie=$this->input->cookie('admin');
		session_start();
		$_SESSION["RF"]["subfolder"] ="";
		if(!empty($cookie))
		{
			$this->session->set_userdata('admin',$cookie);
			return true;
		}
		else if(empty($session)||$session!='admin')
		{
			$url=base_url("index.php/admin/index");
			redirect($url);
		}
		
	}
	public function admin()
	{
		$session=$this->session->userdata('admin');
		$cookie=$this->input->cookie('admin');
		if(!empty($cookie))
		{
			$this->session->set_userdata('admin',$cookie);
			return true;
		}
	}
}