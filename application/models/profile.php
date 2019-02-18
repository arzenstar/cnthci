<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Model 
{
	public function siswa($user)
	{
		$simpan=mysql_query("SELECT * FROM  siswa where email_sis = '$user'");
		$hasil=mysql_fetch_assoc($simpan);
	echo '
		<div class="modal fade" id="profile">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
					<div class="modal-header">
						<a class="close" data-dismiss="modal">&times;</a>
						<h1 class="page-title">'.$hasil['first_nm'].' '.$hasil['last_nm'].'</h1>
			   			<small> <i class="fa fa-clock-o"></i> Last Updated on: <time>Sunday, October 05, 2014</time></small>
					</div>
					<div class="modal-body">
						<div class="panel-heading resume-heading">
					        <div class="row">
					          <div class="col-lg-12">
					            <div class="col-xs-12 col-sm-6">
					              <figure>
					                <img class="img-circle img-responsive" alt="" src="'.$hasil['img'].'">
					              </figure>
					            </div>

					            <div class="col-xs-12 col-sm-8">
					              <ul class="list-group">
					                <li class="list-group-item">'.$hasil['first_nm'].' '.$hasil['last_nm'].'</li>
					                <li class="list-group-item">siswa</li>
					                <li class="list-group-item">'.$hasil['kls'].'</li>
					                <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
					                <li class="list-group-item"><i class="fa fa-envelope"></i> '.$hasil['email_sis'].'</li>
					              </ul>
					            </div>
					          </div>
					        </div>
					      </div>
					      
					</div>
					<div class="modal-footer">
							<a href="'.base_url().'index.php/page/editprofile/?id='.$hasil['id_siswa'].'">
							<button class="btn btn-primary" type="submit" name="login">change</button>
							</a>
					</div>
				</div>
		    </div>
		</div>
				';
	}


	public function Guru($user)
	{
		$simpan2=mysql_query("SELECT * FROM  guru where email = '$user'");
		$hasil2=mysql_fetch_array($simpan2);
	echo '
		<div class="modal fade" id="profile">
	    	<div class="modal-dialog">
	    		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">&times;</a>
				<h1 class="page-title">'.$hasil2['first_name'].' '.$hasil2['last_name'].'</h1>
	   			<small> <i class="fa fa-clock-o"></i> Last Updated on: <time>Sunday, October 05, 2014</time></small>
			</div>
			<div class="modal-body">
				<div class="panel-heading resume-heading">
			        <div class="row">
			          <div class="col-lg-12">
			            <div class="col-xs-12 col-sm-4">
			              <figure>
			                <img class="img-circle img-responsive" alt="" src="'.$hasil2['img'].'">
			              </figure>
			              
			             
			              
			            </div>

			            <div class="col-xs-12 col-sm-8">
			              <ul class="list-group">
			                <li class="list-group-item">'.$hasil2['first_name'].' '.$hasil2['last_name'].'</li>
			                <li class="list-group-item">guru</li>';
			                 $id=$hasil2['id_guru'];
			                    
			                    
			                 echo '
			                <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
			                <li class="list-group-item"><i class="fa fa-envelope"></i> '.$hasil2['email'].'</li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			      
			</div>
			<div class="modal-footer">
					<a href="'.base_url().'index.php/page/editprofile/">
					<button class="btn btn-primary" type="submit" name="lgin">change</button>
					<a>
			</div>
			 </div>
		    </div>
		</div>
				';
	}
}