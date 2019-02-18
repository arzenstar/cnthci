 <div class="container">

        <div class="row">
        <div class="col-lg-8">
         <?php
         $title=$this->input->get('judul');
         $mapel=$this->input->get('mapel');
         $kelas=$this->input->get('kelas');
         $searchauthor=$this->input->get('email');
                if(!empty($title))
                {
                    $judul=mysql_real_escape_string($this->input->get('judul'));
                    
                    $sql=mysql_query("SELECT * FROM posting WHERE judul LIKE '%{$judul}%'  ");
                    while ($list = mysql_fetch_assoc($sql)) {
                                // echo data
                        ?>
                          <!--/stories-->
                  <div class="row">    
                    <br>
                    <div class="col-md-2 col-sm-3 text-center">
                      <a class="story-img" href="viewprofile.php?e=<?php echo $list['author']?>"><img src="<?php $img=mysql_query("SELECT img FROM guru where email= '$list[author]' "); $rsimg= mysql_fetch_array($img);

                          echo $rsimg['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>
                          <button type="button"  value="<?php echo $list['author']?>" onclick="profile(this.value)">profile</button>
                    </div>
                    <div class="col-md-10 col-sm-9">
                      <h3><?php
                                    print ($list['judul']);
                                ?></h3>
                      <div class="row">
                        <div class="col-xs-9">
                         <article><p><?php
                                    print ($list['isi']);
                                ?></p></article>
                          <p class="lead">
                            
                            <a href="view.php? id=<?php echo $list['idpost']?>">
                                
                            </a>
                          </p>
                          <p class="pull-right"><a href="<?php echo base_url();?>index.php/page/search/?mapel=<?php echo $list['kategori'];?>"> <span class="label label-default" ><?php $kat=$list['kategori']; $mapel=mysql_query("select * from mapel where id = '$kat'"); $kategory=mysql_fetch_assoc($mapel); echo $kategory['mata_pelajaran'];?></span></a> <a href="<?php echo base_url();?>index.php/page/search/?kelas=<?php echo $list['kelas'];?>"><span class="label label-default"> <?php $kls= $list['kelas']; $query=mysql_query("select * from kelas where id = '$kls'");$kelas = mysql_fetch_assoc($query); echo $kelas['kelas'];?></span></a> </p>
                          <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
                          </div>
                        <div class="col-xs-3"></div>
                      </div>
                      <br><br>
                    </div>
                  </div>
                         <?php 
                         }
                       }
                       /*end search judul*/

                /*search kelas*/
                
                else if(!empty($kelas))
                {
                    
                    echo "<strong>".$kelas."</strong>";
                    $sql1=mysql_query("SELECT * FROM posting WHERE kelas like '%$kelas%'");
                    while ($list = mysql_fetch_assoc($sql1)) {
                                // echo data
                        ?>
                          <!--/stories-->
                  <div class="row">    
                    <br>
                    <div class="col-md-2 col-sm-3 text-center">
                      <a class="story-img" href="viewprofile.php?e=<?php echo $list['author']?>"><img src="<?php $img=mysql_query("SELECT img FROM guru where email= '$list[author]' "); $rsimg= mysql_fetch_array($img);

                          echo $rsimg['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>
                          <button type="button"  value="<?php echo $list['author']?>" onclick="profile(this.value)">profile</button>
                    </div>
                    <div class="col-md-10 col-sm-9">
                      <h3><?php
                                    print ($list['judul']);
                                ?></h3>
                      <div class="row">
                        <div class="col-xs-9">
                          <article><p><?php
                                    print ($list['isi']);
                                ?></p></article>
                          <p class="lead">
                            
                            <a href="view.php? id=<?php echo $list['idpost']?>">
                                
                            </a>
                          </p>
                          
                          <p class="pull-right"><a href="<?php echo base_url();?>index.php/page/search/?mapel=<?php echo $list['kategori'];?>"> <span class="label label-default" ><?php $kat=$list['kategori']; $mapel=mysql_query("select * from mapel where id = '$kat'"); $kategory=mysql_fetch_assoc($mapel); echo $kategory['mata_pelajaran'];?></span></a> <a href="<?php echo base_url();?>index.php/page/search/?kelas=<?php echo $list['kelas'];?>"><span class="label label-default"> <?php $kls= $list['kelas']; $query=mysql_query("select * from kelas where id = '$kls'");$kelas = mysql_fetch_assoc($query); echo $kelas['kelas'];?></span></a> </p>
                          <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
                          </div>
                        <div class="col-xs-3"></div>
                      </div>
                      <br><br>
                    </div>
                  </div>
                         <?php 
                         }
                       }
                       /*end search kelas*/

                   /*search mata pelajaran*/    
                    
                 else if(!empty($mapel))
                {
                   
                    
                    $sql2=mysql_query("SELECT * FROM posting WHERE kategori like'%$mapel%'");
                    while ($list = mysql_fetch_assoc($sql2)) {
                                // echo data
                        ?>
                          <!--/stories-->
                  <div class="row">    
                    <br>
                    <div class="col-md-2 col-sm-3 text-center">
                      <a class="story-img" href="viewprofile.php?e=<?php echo $list['author']?>"><img src="<?php $img=mysql_query("SELECT img FROM guru where email= '$list[author]' "); $rsimg= mysql_fetch_array($img);

                          echo $rsimg['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>
                          <button type="button"  value="<?php echo $list['author']?>" onclick="profile(this.value)">profile</button>
                    </div>
                    <div class="col-md-10 col-sm-9">
                      <h3><?php
                                    print ($list['judul']);
                                ?></h3>
                      <div class="row">
                        <div class="col-xs-9">
                          <article><p><?php
                                    print ($list['isi']);
                                ?></p></article>
                          <p class="lead">
                            
                            <a href="view.php? id=<?php echo $list['idpost']?>">
                                
                            </a>
                          </p>
                          <p class="pull-right"><a href="<?php echo base_url();?>index.php/page/search/?mapel=<?php echo $list['kategori'];?>"> <span class="label label-default" ><?php $kat=$list['kategori']; $mapel=mysql_query("select * from mapel where id = '$kat'"); $kategory=mysql_fetch_assoc($mapel); echo $kategory['mata_pelajaran'];?></span></a> <a href="<?php echo base_url();?>index.php/page/search/?kelas=<?php echo $list['kelas'];?>"><span class="label label-default"> <?php $kls= $list['kelas']; $query=mysql_query("select * from kelas where id = '$kls'");$kelas = mysql_fetch_assoc($query); echo $kelas['kelas'];?></span></a> </p>
                          <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
                          </div>
                        <div class="col-xs-3"></div>
                      </div>
                      <br><br>
                    </div>
                  </div>
                         <?php 
                         }
                       }
                       /*end search mata pelajaran*/

                      /* search author*/
                      

                    else  if(!empty($searchauthor))
                {
                    $author=$this->input->get('email');
                    
                    $sql=mysql_query("SELECT * FROM posting WHERE author like '%$author%'  ");
                    while ($list = mysql_fetch_assoc($sql)) {
                                // echo data
                        ?>
                          <!--/stories-->
                  <div class="row">    
                    <br>
                    <div class="col-md-2 col-sm-3 text-center">
                      <a class="story-img" href="viewprofile.php?e=<?php echo $list['author']?>"><img src="<?php $img=mysql_query("SELECT img FROM guru where email= '$list[author]' "); $rsimg= mysql_fetch_array($img);

                          echo $rsimg['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>
                          <button type="button"  value="<?php echo $list['author']?>" onclick="profile(this.value)">profile</button>
                    </div>
                    <div class="col-md-10 col-sm-9">
                      <h3><?php
                                    print ($list['judul']);
                                ?></h3>
                      <div class="row">
                        <div class="col-xs-9">
                          <article><p><?php
                                    print ($list['isi']);
                                ?></p></article>
                          <p class="lead">
                            
                            <a href="view.php? id=<?php echo $list['idpost']?>">
                                
                            </a>
                          </p>
                          <p class="pull-right"><a href="<?php echo base_url();?>index.php/page/search/?mapel=<?php echo $list['kategori'];?>"> <span class="label label-default" ><?php $kat=$list['kategori']; $mapel=mysql_query("select * from mapel where id = '$kat'"); $kategory=mysql_fetch_assoc($mapel); echo $kategory['mata_pelajaran'];?></span></a> <a href="<?php echo base_url();?>index.php/page/search/?kelas=<?php echo $list['kelas'];?>"><span class="label label-default"> <?php $kls= $list['kelas']; $query=mysql_query("select * from kelas where id = '$kls'");$kelas = mysql_fetch_assoc($query); echo $kelas['kelas'];?></span></a> </p>
                          <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
                          </div>
                        <div class="col-xs-3"></div>
                      </div>
                      <br><br>
                    </div>
                  </div>
                         <?php 
                         }
                       }
                         ?>

        </div>
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                    <form method="get" action="<?php echo base_url();?>index.php/page/search">
                        
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
                <div id="pro" class="well">
                


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