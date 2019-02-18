<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uservalidation extends CI_Model 
{
	public function validation()
	{
		$session=$this->session->userdata('username');
		$stat=$this->session->userdata('status');
		$cookieuser=$this->input->cookie('username');
		$cookiestat=$this->input->cookie('status');
		if($stat=="Guru")
			{
				$query=mysql_query("select * from guru where email='$session' ");
				$user=mysql_fetch_assoc($query);
				$directory=$user['username'];
				$_SESSION["RF"]["subfolder"] ="source/guru/$directory/";
			}
			else if($stat=="siswa")
			{
			$query=mysql_query("select * from siswa where email_sis='$session'");
			$user=mysql_fetch_assoc($query);
			$directory=$user['username'];
			$_SESSION["RF"]["subfolder"] ="source/siswa/$directory/";
			}
		if(!empty($cookieuser))
		{
			$cookie=array(
				'username' => $cookieuser,
				'status' =>$cookiestat	
				);
			$this->session->set_userdata($cookie);
			$session=$this->session->userdata('username');
			$stat=$this->session->userdata('status');	
			if($stat=="Guru")
			{
				$query=mysql_query("select * from guru where email='$session' ");
				$user=mysql_fetch_assoc($query);
				$directory=$user['username'];
				$_SESSION["RF"]["subfolder"] ="source/guru/$directory/";
			}
			else if($stat=="siswa")
			{
			$query=mysql_query("select * from siswa where email_sis='$session'");
			$user=mysql_fetch_assoc($query);
			$directory=$user['username'];
			$_SESSION["RF"]["subfolder"] ="source/siswa/$directory/";
			}
		}
		else if(empty($session)||$session=='admin')
		{
			
			redirect(base_url());
		}
			return true;
	}

	public function home()
	{
		$session=$this->session->userdata('username');
		$cookieuser=$this->input->cookie('username');
		$cookiestat=$this->input->cookie('status');
		if(!empty($cookie))
		{
			$cookie=array(
				'username' => $cookieuser,
				'status' =>$cookiestat	
				);
			$this->session->set_userdata($cookie);

			return true;
		}
	}
}