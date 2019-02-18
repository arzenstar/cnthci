<?php 

$username = $this->session->userdata('username');
$status = $this->session->userdata('status');
?>
<div class="container">

        <div class="row">
        <div class="col-lg-8">

            <!-- Blog Post Content Column -->
            <?php
    if($status=='siswa') {
        $sql=mysql_query("select * from siswa where email_sis='$username'");
        siswa($sql);
    } else {
        $sql=mysql_query("select * from guru where email='$username'");
        guru($sql);
    }

    function guru($data) {
        $cek=mysql_fetch_array($data);
?>
                            <form class='form-horizontal'  action='<?php echo base_url();?>index.php/page/updateprofile' method='post' enctype='multipart/form-data'>
                                <div class="form-group">
                                    <div class="col-sm-12" style="margin-left:180px">
                                        <a class="story-img" ><img src="<?php echo $cek['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>        
                                    </div>
                                </div>
                                <div class="form-group" style="margin-left:170px"> 
                                    <input id="icon" name="image" type="text" value="<?php echo $cek['img']?>">
                                    <a href="javascript:open_popup('<?php echo base_url();?>asset/plugin/filemanager/dialog.php?type=1&popup=1&field_id=icon')" class="btn iframe-btn btn-success" type="button" name="select1">select</a>    
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
                                    <label class='col-sm-2 control-label'>Password</label>
                                    <div class='col-sm-9'>
                                        <button class='btn btn-warning' type='button' name='pswd' data-toggle="modal" href="#pss">Change</button>
        <!--
                                        <input class='form-control' type='password' name='password' value="<?php // echo $cek['pass'-]?>">
        -->
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class='col-sm-offset-2 col-sm-10'>
                                        <button class='btn btn-primary' type='submit' name='save' id='save'>Submit</button>
                                    </div>
                                </div>
                            </form>
                        
<?php
    }

    function siswa($data) {
        $cek = mysql_fetch_assoc($data);
?>
                        <form class='form-horizontal'  action='<?php echo base_url();?>index.php/page/updateprofile' method='post' enctype='multipart/form-data' name='form1' id='form1'>
                            <div class='form-group'>
                                <div class='col-sm-12' style='margin-left:180px'>
                                    <a class='story-img'><img src="<?php echo $cek['img'] ?>" style='width:100px;height:100px' class='img-circle'></a>
                                </div>
                            </div>
                            <div class='form-group' style='margin-left:170px'> 
                                <input id='icon' name='image' type='text' value="<?php echo $cek['img'] ?>">
                                <a href="javascript:open_popup('<?php echo base_url();?>asset/plugin/filemanager/dialog.php?type=1&popup=1&field_id=icon')" class='btn iframe-btn btn-success' type='button' name='select1'>select</a>    
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
                                        $clas=mysql_query("SELECT * FROM kelas");
                                        while ($kelas=mysql_fetch_assoc($clas)) 
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
                                    <button class='btn btn-warning' type='button' name='pswd' data-toggle="modal" href="#pss">Change</button>
    <!--
                                    <input class='form-control' type='password' name='password' value="<?php // echo $cek['pass_sis'] ?>">
    -->
                                </div>
                            </div>
                            <div class='form-group'>
                                <div class='col-sm-offset-2 col-sm-10'>
                                    <button class='btn btn-primary' type='submit' name='save' id='save'>Save</button>
                                </div>
                            </div>
                        <br>
                        <br>
                        <br>
                        </form>
                    
<?php 
    }
?>
              </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <form method="get" action="<?php echo base_url();?>index.php/page/search/">
                        
                        <input type="text" name="judul" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php 
                        $nm_kls=1;
                        $nm_mapel=100;
                        $querry1=mysql_query("SELECT distinct a.* from kelas a, posting b WHERE a.id = b.kelas");
                        while ($kls=mysql_fetch_assoc($querry1)) {
                        ?>
                        <li><a href="#<?php echo $nm_kls?>" class="dropdown-toggle" data-toggle="collapse"><?php echo $kls['kelas']?></a>
                            <ul id="<?php echo $nm_kls?>" class="collapse">
                                <?php
                                $klas=$kls['id'];
                                $query2=mysql_query("SELECT distinct a.* from mapel a, posting b WHERE a.id = b.kategori and b.kelas=$klas");
                                 while ($mapel=mysql_fetch_assoc($query2)) {
                                  
                                 ?>
                                <li><a href="#<?php echo $nm_mapel?>"  class="dropdown-toggle" data-toggle="collapse"><?php echo $mapel['mata_pelajaran']?></a>
                                    <ul id="<?php echo $nm_mapel?>" class="collapse">
                                      <?php
                                      $pelajaran=$mapel['id'];
                                      $query3=mysql_query("SELECT distinct a.* from guru a, posting b WHERE a.email=b.author and b.kelas='$klas' and b.kategori=$pelajaran ");
                                      while ($guru=mysql_fetch_assoc($query3)) 
                                        {?>
                                        <li><a href="<?php echo base_url();?>index.php/page/search/?email=<?php echo $guru['email'];?>" ><?php echo $guru['first_name']; echo' '; echo $guru['last_name'];?></a></li>
                                        <?php 
                                      }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                                $nm_mapel++;
                                }?>
                            </ul>
                        </li>
                        <?php 
                        $nm_kls++;  
                        }
                        ?>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    
    <!-- /.container -->
    <div class="modal fade" id="tambah">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h3>TAMBAH MATA PELAJARAN</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="post" action="../proses/updatepass.php">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">MaPel Baru</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                                                <option selected>--MASUKKAN KELAS--</option>';
                                                <?php
                                                $kls=mysql_query("SELECT * FROM mapel");
                                                while ($kelas=mysql_fetch_assoc($kls)) 
                                                {
                                                 echo "<option>".$kelas['mata_pelajaran']."</option>";
                                                }
                                                ?>
                                              </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                    <button class="btn btn-success" type="submit" name="save">Save</button>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>