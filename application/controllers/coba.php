<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class coba extends CI_Controller
 {
 	public function index()
 	{
 		$username=array(
				'name' => 'username',
				'value' => 'putra',
				'expire' => 10
				);
 		$status=array(
				'name' => 'status',
				'value' => 'putra',
				'expire' => 10
				);
 		
 		$this->input->set_cookie($username);
 		$this->input->set_cookie($status);
 	}
 	public function hasil()
 	{
 		echo "cookie : ".$this->input->cookie("username");
 		echo "cookie : ".$this->input->cookie("status");
 	}
 }