<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class page extends CI_Controller
 {
 	
 	public function index()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
	    $sesi_status = $this->session->userdata('status');
	    $sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/dashboard');
 		$this->load->view('home/footer');
 	}

 	public function editposting()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
 		$sesi_status = $this->session->userdata('status');
	 	$sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/editposting');
 		$this->load->view('home/footer');
 	}


 	public function editprofile()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
 		$sesi_status = $this->session->userdata('status');
	  	$sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/editprofile');
	    $this->load->model('changepass');
	    $this->changepass->pass();
 		$this->load->view('home/footer');
 	}

 	public function listpost()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
 		$sesi_status = $this->session->userdata('status');
	  	$sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/listpost');
 		$this->load->view('home/footer');
 	}

 	/*PROSES----------------------------------------------------------------------------------------------*/

 	public function posting()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
 		$sesi_status = $this->session->userdata('status');
	  	$sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/posting');
 		$this->load->view('home/footer');
 	}


 	public function search()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$this->load->view('home/header');
 		$sesi_status = $this->session->userdata('status');
	  	$sesi_user = $this->session->userdata('username');
 		$this->load->model('profile');
 		$this->profile->$sesi_status($sesi_user);
 		$this->load->view('home/search');
 		$this->load->view('home/footer');
 	}

 	public function logout()
 	{
 		$sesi=$this->session->userdata('username');
 		if(!empty($sesi))
 		{
 		$this->session->unset_userdata('username');
 		session_start();
		$_SESSION["RF"][$username] ="";
 		}
 		$coki=$this->input->cookie('username');
 		if(!empty($coki))
 		{
 		delete_cookie('username');
 		delete_cookie('status');
 		}
 		$url=base_url();
		redirect($url);
 	}

 	public function inputposting()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$username=$this->session->userdata('username');
 		/*file*/
		$file1=$this->input->post('file1');
		$file2=$this->input->post('file2');
		$file3=$this->input->post('file3');
		$file4=$this->input->post('file4');
		$file5=$this->input->post('file5');

		/*posting*/
		/*$cetak = mysql_query("select file from temp where author='$username' ");*/
		$judul=$this->input->post('judul');
		$mapel=strtoupper($this->input->post('mapel'));
		$kls=strtoupper($this->input->post('kls'));
		$isi=mysql_real_escape_string($this->input->post('area'));
		$sql= mysql_query("insert into posting (judul, kelas, kategori, author, isi) values ('$judul','$kls','$mapel','$username','$isi')")or die(mysql_error()); 
		$id=mysql_query("select idpost from posting where author='$username' and judul='$judul'");
		$no=mysql_fetch_assoc($id);
		$post=$no['idpost'];

		/*simpan file*/
		if(!empty($file1))
		{
			$save1=mysql_query("insert into file (id_post,nm_file) values ('$post','$file1')");
		}

		if(!empty($file2))
		{
			$save2=mysql_query("insert into file (id_post,nm_file) values ('$post','$file2')");
		}
		if(!empty($file3))
		{
			$save3=mysql_query("insert into file (id_post,nm_file) values ('$post','$file3')");
		}

		if(!empty($file4))
		{
			$save4=mysql_query("insert into file (id_post,nm_file) values ('$post','$file4')");
		}

		if(!empty($file5))
		{
			$save5=mysql_query("insert into file (id_post,nm_file) values ('$post','$file5')");
		}

		redirect($_SERVER['HTTP_REFERER']);
 	}

 	public function updatepost()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$id=$this->input->post('id');
		$judul=mysql_real_escape_string($this->input->post('judul'));
		$kelas=$this->input->post('kls');
		$kategori=$this->input->post('mapel');
		$isi=mysql_real_escape_string($this->input->post('area'));

		$save=mysql_query("update posting set judul='$judul', kelas=$kelas, kategori=$kategori, isi ='$isi' where idpost=$id  ") or die(mysql_error());

		$numbfile=1;
		$files=mysql_query("SELECT * FROM file where id_post=$id");
		while ($file=mysql_fetch_assoc($files)) 
		{
			$idfile=$file['id_file'];
			$data=$this->input->post('file'.$numbfile.'');
			$update=mysql_query("UPDATE file set nm_file='$data' where id_file=$idfile");
			$numbfile++;
		}

		while ($numbfile<=5) 
		{
			if(!is_null($this->input->post('file'.$numbfile.'')))
			{
				$img=$this->input->post('file'.$numbfile.'');
				$insert=mysql_query("insert into file (id_post,nm_file) values ('$id','$img')");
			}
			$numbfile++;
		}
		redirect($_SERVER['HTTP_REFERER']);

 	}

 	public function deletepost()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$id=$this->input->get('id');
		$sql=mysql_query("DELETE FROM posting WHERE idpost='$id' ");
		$sql2=mysql_query("DELETE FROM file WHERE id_post='$id' ");
		redirect($_SERVER['HTTP_REFERER']);
 	}

 	public function updateprofile()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$username = $this->session->userdata('username');
		$status = $this->session->userdata('status');
 		if($status=='siswa') 
 		{
        		$first = $this->input->post('firstname');
		        $last = $this->input->post('lastname');
		        $kls = $this->input->post('kls');
		        $email = $this->input->post('email');
		        $img = $this->input->post('image');
		        $syntax = mysql_query("update siswa set first_nm='$first', last_nm='$last', kls='$kls', email_sis='$email', img='$img' where email_sis='$username'");
				$data2=array(
				'username' => $email,
				'status' =>'siswa'				
				);
				$this->session->set_userdata($data2);
				redirect($_SERVER['HTTP_REFERER']);
				
		} 
		else {
		       
		        $first = $this->input->post('firstname');
		        $last = $this->input->post('lastname');
		        $ttl = $this->input->post('ttl');
		        $email = $this->input->post('email');
		        $img = $this->input->post('image');
		        $syntax = mysql_query(" UPDATE guru set first_name='$first', last_name='$last', ttl='$ttl', img='$img' where email='$username' ");
				redirect($_SERVER['HTTP_REFERER']);
			}
 	}

 	public function changepassword()
 	{
 		$this->load->model('uservalidation');
 		$this->uservalidation->validation();
 		$username = $this->session->userdata('username');
		$status = $this->session->userdata('status');
 		$passold = $this->input->post('passold');
	    $pass = $this->input->post('pass');
	    $pass2 = $this->input->post('pass2');
	    if($pass!=$pass2) {
		?>
	    	<script language="javascript">
	        alert('Password Konfirm Salah!!!');
	        document.location="<?php echo base_url();?>index.php/page/editprofile"
	    	</script>
		<?php
	    } 
	    else 
	    {
	        if($status=='siswa') {
	            $que=mysql_query("select * from siswa where email_sis='$username' and pass_sis='$passold'");
	            $cek = mysql_num_rows($que);
	            if($cek) {
	                $syntax = mysql_query("update siswa set pass_sis='$pass2' where email_sis='$username'");
				?>
	            <script language="javascript">
	                alert('SUKSES');
	                document.location="<?php echo base_url();?>index.php/page/editprofile"
	            </script>
				<?php
	            } 
	            else 
	            {
				?>
	            	<script language="javascript">
	                alert('Password lama salah!!!');
	                document.location="<?php echo base_url();?>index.php/page/editprofile"
	            	</script>
				<?php
	            }
	        } 
	        else {
		            $que2 = mysql_query("select * from guru where email='$username' and pass='$passold'");
		            $cek2 = mysql_num_rows($que2);
		            if($cek2) {
		                $syntax = mysql_query("update guru set pass='$pass2' where email='$username'");
					?>
		            	<script language="javascript">
		                alert('SUKSES');
		                document.location="<?php echo base_url();?>index.php/page/editprofile"
		            	</script>
					<?php
		            } 
		            else 
		            {
					?>
		            	<script language="javascript">
		                alert('Password lama salah!!!');
		                document.location="<?php echo base_url();?>index.php/page/editprofile"
		            	</script>
					<?php
		            }
	        }
	    }
	
 	}

 	public function profile()
 	{
 		$user=$this->input->get('email');
 		$simpan=mysql_query("SELECT * FROM  guru where email = '$user'");
                $hasil=mysql_fetch_assoc($simpan);
                echo '
                <h3>PROFILE</h3>
                <h1 class="page-title"> '.$hasil['first_name'].' '.$hasil['last_name'].'</h1>
                    <div class="panel-heading resume-heading">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="col-xs-12 col-sm-6">
                              <figure>
                                <img class="img-circle img-responsive" alt="" src="'.$hasil['img'].'">
                              </figure>
                            </div>

                            <div class="col-xs-12 col-sm-12">
                              <ul class="list-group">
                                <li class="list-group-item">'.$hasil['first_name'].' '.$hasil['last_name'].'</li>
                                <li class="list-group-item">guru</li>
                                <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                                <li class="list-group-item"><i class="fa fa-envelope"></i> '.$hasil['email'].'</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>';
 	}
 }