<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller
 {
 	public function index()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->home();
 		$username=$this->session->userdata('username');
 		if(!empty($username))
 		{
 			$url=base_url("index.php/page/index");
 			
			redirect($url);
 		}
 		$this->load->view('home/index');
 		
 	}

 	public function post()
 	{
 		$this->load->view('home/post');
 	}

 	public function contact()
 	{
 		$name=$this->input->post('name');
		$organisasi=$this->input->post('organization');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$isi=$this->input->post('isi');

		$mysql=mysql_query("INSERT INTO contact (name, organisasi, phone, email, isi) values ('$name', '$organisasi', '$phone', '$email', '$isi')")or die(mysql_error());

		echo '<script language="javascript">alert("Pesan anda terkirim");document.location="'.base_url().'"</script>';
 	}
 	public function username($stat, $user)
 	{
 		
 		if($stat=="siswa")
 		{
 			if(preg_match("/^[_\.a-zA-Z-]/", $user))
			{
				$mysql=mysql_query("SELECT * from siswa where username LIKE '$user%'");
				while($x=mysql_fetch_assoc($mysql))
				{
					echo "ada";
				}
			}
			else
			{
				echo'salah';		
			}
 		}

 		if($stat=="guru")
 		{
 			if(preg_match("/^[_\.a-zA-Z-]/", $user))
			{
				$mysql=mysql_query("SELECT * from guru where username LIKE '$user%'");
				while($x=mysql_fetch_assoc($mysql))
				{
					echo "ada";
				}
			}
			else
			{
				echo'salah';		
			}
 		}

 	}

 	public function email($stat)
 	{
 		$user=$this->input->get('email');
 		if($stat=="siswa")
 		{
 			if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $user))
			{	
				$mysql=mysql_query("SELECT * from siswa where email_sis LIKE '$user%'");
				while($x=mysql_fetch_assoc($mysql))
				{
					echo "ada";
				}
			}
			else
			{
				echo "salah";	
			}
 		}
 		if($stat=="guru")
 		{
 			if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $user))
			{

				$mysql2=mysql_query("SELECT * from guru where email LIKE '$user%' ");
				while($d=mysql_fetch_assoc($mysql2))
				{
					echo "ada";
				}
			}
			else
			{
				echo "salah";
			}
 		}

 	}

 	public function login()
 	{
 		$username=$this->input->post('userid'); 
		$password=$this->input->post('pass');
		$query=mysql_query("select * from guru where email='$username' and pass='$password'"); 
		$cek=mysql_num_rows($query); 
		$user=mysql_fetch_assoc($query);
		$directory=$user['username'];
		$remember=$this->input->post('remember');
		if($cek)
		{	

		if(!empty($remember))
		{
			$username=array(
				'name' => 'username',
				'value' => $username,
				'expire' => 86400
				);
			$status=array(
				'name' => 'status',
				'value' => 'Guru',
				'expire' => 86400
				);
			$this->input->set_cookie($username);
			$this->input->set_cookie($status);
		
			
		}
		$data=array(
				'username' => $username,
				'status' =>'Guru'				
			);
		$this->session->set_userdata($data);
		session_start();
		$_SESSION["RF"]["subfolder"] ="source/guru/$directory/";
		echo '<script language="javascript">alert("Selamat Datang !");document.location="'.base_url().'index.php/page/index"</script>';
		}
		else
		{
		$query2=mysql_query("select * from siswa where email_sis='$username' and pass_sis='$password'");
		$cek2=mysql_num_rows($query2);
		$user2=mysql_fetch_assoc($query2);
		$directory2=$user2['username'];
			if($cek2)
			{
			if(!empty($remember))
			{
				
			$username=array(
				'name' => 'username',
				'value' => $username,
				'expire' => 86400
				);
			$status=array(
				'name' => 'status',
				'value' => 'siswa',
				'expire' => 86400
				);
			$this->input->set_cookie($username);
			$this->input->set_cookie($status);
		
			}
			$data2=array(
				'username' => $username,
				'status' =>'siswa'				
			);
			$this->session->set_userdata($data2);
			session_start();
			$_SESSION["RF"]["subfolder"] ="source/siswa/$directory2/";
			echo '<script language="javascript">alert("Selamat Datang !");document.location="'.base_url().'index.php/page/index"</script>';
			}
			else
			{
			 echo '<script language="javascript">alert("username / password salah");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';	
			}
		}

 	}

 	public function register($user)
 	{

 		if($user=="guru")
 		{
 			$firstnm =$this->input->post('firstnm');
	    	$lastnm =$this->input->post('lastnm');
	    	$ttl = $this->input->post('ttl');
	    	$mapel = $this->input->post('mapel');
	        $username2=$this->input->post('usernm');
	        echo $username2;
	    	$email = $this->input->post('email');
	    	$pass = $this->input->post('pass');
	    	$img ='http://placehold.it/300x300';
			if(!preg_match("/^[_\.a-zA-Z-]/", $username2))
			{
			 echo '<script language="javascript">alert("Salah Username!!!");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';	
			}
	        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	        {
	            echo '<script language="javascript">alert("Bukan Format Email!!!");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	    	} 
	        else 
	        {
	            $que2 = mysql_query("select * from guru where username='$username2' ");
	            $count2 = mysql_num_rows($que2);
	            if ($count2 > 0 ) 
	            {
	                echo '<script language="javascript">alert("Maaf, username (guru) anda sudah terdaftar!");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	            } else 
	            {
	                $query=mysql_query("INSERT INTO guru (first_name, last_name, ttl, mapel, username, email, pass, img)  values('$firstnm','$lastnm','$ttl','$mapel','$username2','$email','$pass','$img')");
	                mkdir("asset/uploads/source/guru/$username2",0755);
	                echo '<script language="javascript">alert("Registrasi guru berhasil.");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	            }
	        }
 		}
 		if($user=="siswa")
 		{
 			$firstnm=$this->input->post('firstnm');
			$lastnm=$this->input->post('lastnm');
			$kls=$this->input->post('kls');
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
		    $username=$this->input->post('username');
		    echo $username;
			$img='http://placehold.it/300x300';
			if(!preg_match("/^[_\.a-zA-Z-]/", $username))
			{
			 echo '<script language="javascript">alert("Salah Username!!!");document.location="'.$_SERVER['HTTP_REFERER'] .'"</script>';	
			}

		    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		        echo '<script language="javascript">alert("Bukan Format Email!!!");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
			} else {
		        $que = mysql_query("select id_siswa, email_sis from siswa where email_sis='$email' or username ='$username'");
		        $count = mysql_num_rows($que);
		        if ($count > 0) {
		            echo '<script language="javascript">alert("Maaf, email atau username anda sudah terdaftar!");document.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
		        } else {
		            $query=mysql_query("INSERT INTO siswa (first_nm, last_nm, kls, username, email_sis, pass_sis, img) values ('$firstnm','$lastnm',  '$kls', '$username','$email','$pass', '$img')");
		            mkdir("asset/uploads/source/siswa/$username",0755);
		            echo '<script language="javascript">alert("Registrasi siswa berhasil.");document.location="'.$_SERVER['HTTP_REFERER'] .'"</script>';
		            /*redirect("home/index");*/
		        }
			}

 		}
 	}

 	public function emailrequest()
 	{
 		$email=$this->input->post('email');
 		$cek=mysql_query("SELECT * FROM guru where email='$email' ");
 		$hasil=mysql_fetch_assoc($cek);
 		$row=mysql_num_rows($cek);
 		if($row)
 		{
 			$to = $hasil['email'];
			$subject = "Request Password";
			$txt = "password anda adalah ".$hasil['pass'];
			$headers = "From: sman4.byethost7.com";
			

			mail($to,$subject,$txt,$headers);
			echo '<script language="javascript">alert("Email terkirim.");document.location="'.base_url().'"</script>';
 		}
 		else
 		{
 			/*edit php.ini [mail function]*/
 			$email=$this->input->post('email');
	 		$cek=mysql_query("SELECT * FROM siswa where email_sis='$email' ");
	 		$hasil=mysql_fetch_assoc($cek);
	 		$row=mysql_num_rows($cek);
	 		if($row)
	 		{
	 			$to = $hasil['email_sis'];
				$subject = "Request Password";
				$txt = "password anda adalah ".$hasil['pass_sis'];
				$headers = "From: sman4.byethost7.com";
				

				mail($to,$subject,$txt,$headers);
				echo '<script language="javascript">alert("Email terkirim.");document.location="'.base_url().'"</script>';
	 		}
	 		else
	 		{
	 			echo '<script language="javascript">alert("Email tidak terdaftar.");document.location="'.base_url().'"</script>';
	 		}	
 		}
 	}

 }