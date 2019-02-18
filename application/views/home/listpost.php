
<div class="container">

        <div class="row">
        <div class="col-lg-8">

            <!-- Blog Post Content Column -->
            <div class="panel panel-default">
                    <strong><h1>POSTING LIST</h1></strong>
                            <div class="panel-heading">
                                TABLE POSTING
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php 
                                       $username = $this->session->userdata('username');
                                        $sql=mysql_query("select * from posting where author='$username' ") ?>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Judul</th>
                                                <th>Tgl dibuat/diubah</th>
                                                <th>Edit</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $j=1;
                                        while ($cetak = mysql_fetch_assoc($sql))

                                         {
                                            echo "<tr class='odd gradeX'>
                                                <td>".$j."</td>
                                                <td>".$cetak['judul']."</td>
                                                <td>".$cetak['time']."</td>
                                                <td>
                                                <a href='".base_url()."index.php/page/editposting/?id=".$cetak['idpost']."'>
                                                <span class='btn btn-primary' type='submit' name='save' id='save'>EDIT</span></a> <strong>/</strong>
                                                
                                                
                                                <button class='btn btn-danger' type='submit' onclick='myFunction(".$cetak['idpost'].")'>DELETE</button>
                                                </td>
                                                
                                            </tr>";
                                            $j=$j+1;
                                        } ?>
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
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