<?php

    $target=$this->input->get('target');
    $id=$this->input->get('id'); 

?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">	
			
					<h3>PROFILE USER</h3>
				
				<div class="">
					<?php
                if($target=='siswa')
                {
                    $sql=mysql_query("select * from siswa where id_siswa='$id'");
                    siswa($sql);
                }
                else if($target=='guru')
                {
                    $sql=mysql_query("select * from guru where id_guru='$id'");

                    guru($sql);
                }

                else
                {
                    echo "<script language='javascript'>alert('data tidak ada');</script>";
                }

                function guru($data)
                {
                    $cek=mysql_fetch_assoc($data);
                    ?>
                    <form class='form-horizontal'  action='<?php echo base_url();?>index.php/admin/updateuser/guru' method='post' enctype='multipart/form-data'>
                        <div class="form-group">
                            <div class="col-sm-12" style="margin-left:180px">
                            <a class="story-img"><img src="<?php echo $cek['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>        
                            </div>
                        </div>
                    
                            <div class="form-group" style="margin-left:170px"> 
                                <input id="icon" name="image" type="text" value="<?php echo $cek['img']?>">
                                <a href="javascript:open_popup('../plugin/filemanager/dialog.php?type=1&popup=1&field_id=icon')" class="btn iframe-btn btn-success" type="button" name="select1">select</a>    
                            </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Nama Depan</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='firstname' value="<?php echo $cek['first_name']?>" >
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Nama Belakang</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='lastname' value="<?php echo $cek['last_name']?>">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Tanggal Lahir</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='ttl' value="<?php echo $cek['ttl']?>">
                            </div>
                        </div>
                        
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Email</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='email' value="<?php echo $cek['email'] ?>">
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Password</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='password' name='password' value="<?php echo $cek['pass']?>">
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-sm-offset-2 col-sm-10'>
                                <button class='btn btn-primary' type='submit' name='save' id='save'>Submit</button>
                            </div>
                        </div>
                        </form>
                         
                        </div><?php
                }

                function siswa($data)
                {
                    $cek=mysql_fetch_assoc($data);
                    ?><form class='form-horizontal'  action='<?php echo base_url();?>index.php/admin/updateuser/siswa' method='post' enctype='multipart/form-data' name='form1' id='form1'>
                        <div class='form-group'>
                            <div class='col-sm-12' style='margin-left:180px'>
                            <a class='story-img'><img src="<?php echo $cek['img'] ?>" style='width:100px;height:100px' class='img-circle'></a>        
                            </div>
                        </div>
                    
                            <div class='form-group' style='margin-left:170px'> 
                                <input id='icon' name='image' type='text' value="<?php echo $cek['img'] ?>">
                                <a href="javascript:open_popup('../plugin/filemanager/dialog.php?type=1&popup=1&field_id=icon')" class='btn iframe-btn btn-success' type='button' name='select1'>select</a>    
                            </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Nama Depan</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='firstname' value="<?php echo $cek['first_nm'] ?>" >
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Nama Belakang</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='lastname' value="<?php echo $cek['last_nm'] ?>">
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Kelas</label>
                            <div class='col-sm-9'>
                                <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                                    <option>--MASUKKAN KELAS--</option>';
                                    <?php
                                    $kls=mysql_query("SELECT * FROM kelas");
                                    while ($kelas=mysql_fetch_assoc($kls)) 
                                    {
                                        if($kelas['kelas']==$cek['kls'])
                                        {
                                            echo "<option selected>".$kelas['kelas']."</option>";
                                        }
                                        else
                                        {

                                     echo "<option>".$kelas['kelas']."</option>";
                                        }
                                    }
                                    ?>
                                </select> 

                                <!-- <input class='form-control' type='text' name='kls' value="<?php echo $cek['kls'] ?>"> -->
                            </div>
                        </div>
                
                        
                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Email</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='text' name='email' value="<?php echo $cek['email_sis'] ?>">
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class='col-sm-2 control-label'>Password</label>
                            <div class='col-sm-9'>
                                <input class='form-control' type='password' name='password' value="<?php echo $cek['pass_sis'] ?>">
                            </div>
                        </div>

                        <div class='form-group'>
                            <div class='col-sm-offset-2 col-sm-10'>
                                <button class='btn btn-primary' type='submit' name='save' id='save'>Publish</button>
                            </div>
                        </div>
                        </form>
                         
                        </div><?php 
                }
                 ?>
                
                        <!-- content -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>