<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller
 {
 	/*FORM*/

 	public function index()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->admin();
 		$username=$this->session->userdata('admin');
 		if(!empty($username))
 		{
 			$url=base_url("index.php/admin/dashboard");
 			
			redirect($url);
 		}
 		$this->load->view('admin/index');
 		
 	}

 	public function dashboard()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/dashboard');
 		$this->load->view('admin/footer');
 	}

 	public function editlayout()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/editlayout');
 		$this->load->view('admin/footer');
 	}
 	
 	public function homepage()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/homepage');
 		$this->load->view('admin/footer');
 	}
 	public function editpost()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/editpost');
 		$this->load->view('admin/footer');
 	}
 	public function posting()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/posting');
 		$this->load->view('admin/footer');
 	}
 	public function postinglist()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/postinglist');
 		$this->load->view('admin/footer');
 	}
 	public function tablecontact()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tablecontact');
 		$this->load->view('admin/footer');
 	}
 	public function tablekelas()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/kelascarousel');
 		$this->load->view('admin/tablekelas');
 		$this->load->view('admin/footer');
 	}
 	public function tablemapel()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/mapelcarousel');
 		$this->load->view('admin/tablemapel');
 		$this->load->view('admin/footer');
 	}
 	public function tableposting()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/tableposting');
 		$this->load->view('admin/footer');
 	}
 	public function tableuser()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/usercarousel');
 		$this->load->view('admin/tableuser');
 		$this->load->view('admin/footer');
 	}
 	public function usereditor()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$this->load->view('admin/header');
 		$this->load->view('admin/usereditor');
 		$this->load->view('admin/footer');
 	}
 	
 	/*PROSES===============================================================================================*/

 	public function login()
 	{
 		$username=$this->input->post('email');
		$password=$this->input->post('password');
		$remember=$this->input->post('remember');
		$sql=mysql_query("SELECT * FROM admin WHERE name_admin='$username' and passwd='$password' ");
		$cek=mysql_num_rows($sql);
		if($cek)
		{
			

			
		$this->session->set_userdata('admin',$username);
		if(!empty($remember))
		{
			$this->input->set_cookie('admin',$username , 600);
		}
		redirect('admin/dashboard');

		}
		else
		{
			echo'<script>alert("password/username salah");document.location="'.base_url().'index.php/admin/index"</script>';
		}

 	}

 	public function logout()
 	{
 		$sesi=$this->session->userdata('admin');
 		if(!empty($sesi))
 		{
 		$this->session->unset_userdata('admin');
 		}
 		$coki=$this->input->cookie('admin');
 		if(!empty($coki))
 		{
 		delete_cookie('admin');
 		}
 		$url=base_url("index.php/admin/index");
		redirect($url);
 	}

 	public function deleteuser()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$user=$this->input->get('user');
 		$id=$this->input->get('id');
		if (empty($id))
		{
			?><script language="javascript">alert('DATA TIDAK ADA');
			document.location='<?php echo base_url();?>index.php/admin/tableuser'</script><?php
		}
		else
		{
			
			if($user=='siswa')
			{
				$dir=$this->input->get('directory');
				/*$delete->deleteDir('../../uploads/source/siswa/'.$dir.'/');*/
				$sql=mysql_query("DELETE FROM siswa WHERE id_siswa='$id' ");
			?><script language="javascript">alert('DATA TELAH DIHAPUS');
				document.location='<?php echo base_url();?>index.php/admin/tableuser'</script><?php
			}
			else {
			$directory=$this->input->get('directory');
				/*$delete->deleteDir('../../uploads/source/guru/'.$directory.'/');*/
				
				$sql=mysql_query("DELETE FROM guru WHERE id_guru='$id' ");
			?><script language="javascript">alert('DATA TELAH DIHAPUS');
				document.location='<?php echo base_url();?>index.php/admin/tableuser'</script><?php
			}
		
		}
 	}

 	public function updateuser($stat)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if($stat=='siswa')
		{
			$first=$this->input->post('firstname');
			$last=$this->input->post('lastname');
			$kls=$this->input->post('kls');
			$email=$this->input->post('email');
			$pass=$this->input->post('password');
			$img=$this->input->post('image');
				$syntax=mysql_query("update siswa set first_nm='$first', last_nm='$last', kls='$kls', email_sis='$email', pass_sis='$pass', img='$img' where email_sis='$email' and pass_sis='$pass'");
				?><script language="javascript">alert('SUKSES');
			document.location='<?php echo base_url();?>index.php/admin/tableuser'</script><?php 
		}
		else
		{
			$first=$this->input->post('firstname');
			$last=$this->input->post('lastname');
			$ttl=$this->input->post('ttl');
			$mapel=$this->input->post('mapel');
			$email=$this->input->post('email');
			$pass=$this->input->post('password');
			$img=$this->input->post('image');
				$syntax=mysql_query(" UPDATE guru set first_name='$first', last_name='$last', ttl='$ttl', mapel='$mapel', email='$email', pass='$pass', img='$img' where email='$email' and pass='$pass' ");

			?><script language="javascript">alert('SUKSES');
			document.location='<?php echo base_url();?>index.php/admin/tableuser'</script><?php 		
		}

 	}

 	public function updatepost($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if(empty($id))
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tableposting'</script><?php 
 		}
 		else
 		{
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
			$newfile=$this->input->post('file'.$numbfile.'');
			if(!empty($newfile))
			{
				$img=$this->input->post('file'.$numbfile.'');
				$insert=mysql_query("insert into file (id_post,nm_file) values ('$id','$img')");
			}
			$numbfile++;
		}
		redirect($_SERVER['HTTP_REFERER']);
 		}
		
 	}

 	public function deletepost($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if (empty($id))
		{
			?><script language="javascript">alert('DATA TIDAK ADA');
			document.location='<?php echo base_url();?>index.php/admin/tableposting'</script><?php
		}
		else
		{
		$sql=mysql_query("DELETE FROM posting WHERE idpost='$id' ");
		?><script language="javascript">alert('DATA TELAH DIHAPUS');
			document.location='<?php echo base_url();?>index.php/admin/tableposting'</script><?php
		}
 	}

 	public function select($kat, $id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if($kat=='kelas')
		{
			
			$query=mysql_query("SELECT * FROM kelas WHERE id=$id");
			while ( $assoc=mysql_fetch_assoc($query)) {
			echo '						<div class="form-group">
		                                  <label class="col-sm-3 control-label">Nama Kelas Baru</label>
		                                  <div class="col-sm-6">
		                                    <input class="form-control" type="text" name="kelas" id="pass1" value="'.$assoc['kelas'].'"  required />
		                                    
		                                  </div>
		                                  <div id="passcount" class="col-sm-3"></div>
		                                </div>
		                                <input name="id" value="'.$assoc['id'].'" style="visibility:hidden;" >';
		                               
				
			}

		                                
		}

		if($kat=='mapel')
		{
		  
		  $query2=mysql_query("SELECT * FROM mapel WHERE id=$id");
		  while ( $assoc2=mysql_fetch_assoc($query2)) {
		  echo '            <div class="form-group">
		                                  <label class="col-sm-3 control-label">Nama mapel Baru</label>
		                                  <div class="col-sm-6">
		                                    <input class="form-control" type="text" name="mapel" id="pass1" value="'.$assoc2['mata_pelajaran'].'"  required />
		                                    
		                                  </div>
		                                  <div id="passcount" class="col-sm-3"></div>
		                                </div>
		                                <input name="id" value="'.$assoc2['id'].'" style="visibility:hidden;" >';
		                               
		    
		  }
		}
 	}
 	public function insertkelas()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$tambah=$this->input->post('tambah');
 		$kelas=$this->input->post('kelas');
 		if(!empty($kelas))
 		{
		$mysql=mysql_query("INSERT INTO kelas (kelas) values ('$kelas')");
		echo '<script language="javascript">alert("Data Telah Ditambahkan !");document.location="'.base_url().'index.php/admin/tablekelas"</script>';
 		}
 		else
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablekelas'</script><?php
 		}
 	}

 	public function updatekelas()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$kelas=$this->input->post('kelas');
		$id=$this->input->post('id');
		if(!empty($id))
		{
		$query=mysql_query("UPDATE kelas set kelas='$kelas' WHERE id='$id'");
		redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablekelas'</script><?php
		}
 	}

 	public function deletekelas($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if(!empty($id))
 		{
		$mysql=mysql_query("DELETE FROM kelas WHERE id='$id' ");
		?><script language="javascript">alert('id : <?php echo $id?> terhapus');
			document.location='<?php echo base_url();?>index.php/admin/tablekelas'</script><?php
 		}
 		else
		{
			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablekelas'</script><?php
		}
 	}

 	public function insertmapel()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$mapel=$this->input->post('mapel');
 		if(!empty($mapel))
 		{
		$mysql=mysql_query("INSERT INTO mapel (mata_pelajaran) values ('$mapel')");
		echo '<script language="javascript">alert("Data Telah Ditambahkan !");document.location="'.base_url().'index.php/admin/tablemapel"</script>';
 		}
 		else
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablemapel'</script><?php
 		}

 	}

 	public function updatemapel()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$mapel=$this->input->post('mapel');
 		$id=$this->input->post('id');
 		if(!empty($id))
 		{
		$query=mysql_query("UPDATE mapel set mata_pelajaran='$mapel' WHERE id='$id'");
		redirect($_SERVER['HTTP_REFERER']);
 		}
 		else
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablemapel'</script><?php
 		}

 	}

 	public function deletemapel($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if(!empty($id))
 		{
 		$mysql=mysql_query("DELETE FROM mapel WHERE id='$id' ");
 		?><script language="javascript">alert('id : <?php echo $id?> terhapus');
			document.location='<?php echo base_url();?>index.php/admin/tablemapel'</script><?php
 		}
 		else
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablemapel'</script><?php
 		}
		
 	}

 	public function deletecontact($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if(!empty($id))
 		{
 		$mysql=mysql_query("DELETE FROM contact WHERE id_contact='$id' ");
 		?><script language="javascript">alert('id : <?php echo $id?> terhapus');
			document.location='<?php echo base_url();?>index.php/admin/tablecontact'</script><?php
 		}
 		else
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tablecontact'</script><?php
 		}
 	}

 	public function inserthomepage()
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		$username=$this->session->userdata('admin');
 		$judul=$this->input->post('judul');
		$image=$this->input->post('image');
		$isi=mysql_real_escape_string($this->input->post('area'));
		$sql= mysql_query("insert into posting (judul, author, isi) values ('$judul','$username','$isi')")or die(mysql_error());
		$id=mysql_query("select idpost from posting where author='$username' and judul='$judul'");
		$no=mysql_fetch_assoc($id);
		$post=$no['idpost'];

		/*simpan file*/
		if(!is_null($image))
		{
			$save1=mysql_query("insert into file (id_post,nm_file) values ('$post','$image')");
		}
		redirect($_SERVER['HTTP_REFERER']);
 	}

 	public function updatehomepage($id)
 	{
 		$this->load->model('adminvalidation');
 		$this->adminvalidation->validation();
 		if(empty($id))
 		{
 			?><script language="javascript">alert('ERROR');
			document.location='<?php echo base_url();?>index.php/admin/tableposting'</script><?php 
 		}
 		else
 		{
		$judul=mysql_real_escape_string($this->input->post('judul'));
		$isi=mysql_real_escape_string($this->input->post('area'));

		$save=mysql_query("update posting set judul='$judul', isi ='$isi' where idpost=$id  ") or die(mysql_error());

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
			$newfile=$this->input->post('file'.$numbfile.'');
			if(!empty($newfile))
			{
				$img=$this->input->post('file'.$numbfile.'');
				$insert=mysql_query("insert into file (id_post,nm_file) values ('$id','$img')");
			}
			$numbfile++;
		}
		redirect($_SERVER['HTTP_REFERER']);
 		}
 	}
 }