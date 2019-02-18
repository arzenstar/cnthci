<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>The Firm - One Page Scroller Template</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url();?>asset/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/home/css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/home/css/font-awesome.min.css" />
      <script type="text/javascript" src="<?php echo base_url();?>asset/home/js/home.js">  </script>
      
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="<?php echo base_url();?>asset/home/css/styles.css" rel="stylesheet">
    

    

    
    
  </head>
<body>
<!-- Wrap all page content here -->
<div class="modal fade" id="email">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal">&times;</a>
                    <h1 class="page-title">Email</h1>
                    
                </div>
                    <form class="form-horizontal" role="form" action="<?php echo base_url();?>index.php/home/emailrequest" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="email" placeholder="Masukkan Email" required />
                      </div>
                    </div>
                  
                      
                </div>
                <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" id="insert1" name="insertsiswa">Send</button>
                </div>
                    </form>
            </div>
        </div>
    </div>
<div id="wrap">

 
<header class="masthead">
<img src="<?php echo base_url();?>asset/head2.png" style="margin-left:500px;height:100px;width:300px;">
  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
      <?php 
      
      $mysql=mysql_query("SELECT a.* FROM file a, posting b  where a.id_post = b.idpost and b.author = 'admin' ORDER BY a.id_file DESC LIMIT 5");
      $no = 1;
      while($img=mysql_fetch_assoc($mysql))
      {
      $post=$img['id_post'];
      $posting=mysql_query("SELECT * FROM posting WHERE idpost='$post' ");
      $pilih=mysql_fetch_assoc($posting);
        if($no==1)
        {
          echo'
          <div class="item active">
            <img src="'.$img['nm_file'].'">
              <div class="container">
                <div class="carousel-caption">
                <a href="'.base_url().'index.php/home/post/?id='.$img['id_post'].'"><h2>'.strtoupper($pilih['judul']).'</h2></a>
                <p></p>
              </div>
            </div>
          </div>';
          
        }
        else
        {
          echo'
          <div class="item">
            <img src="'.$img['nm_file'].'">
              <div class="container">
                <div class="carousel-caption">
                <a href="'.base_url().'index.php/home/post/?id='.$img['id_post'].'"><h2>'.strtoupper($pilih['judul']).'</h2></a>
                <p></p>
              </div>
            </div>
          </div>';
        
        }
        ++$no;
      }
      ?>
      
           
      </div><!-- /.carousel-inner -->
      <div class="logo"></div> 
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>  
    </div>
    <!-- /.carousel -->
  
</header>
  
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
          <li><a href="#section1">Home</a></li>
          <li><a href="#section2">login</a></li>
          <li><a href="#section3">register</a></li>
          <li><a href="#section4">Location</a></li>
          <li><a href="#section5">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
    

    <?php
                /*select table*/
                $result = mysql_query("SELECT * FROM posting WHERE author <> 'ADMIN' ORDER BY idpost DESC LIMIT 5");
                /*cetak table*/
                while ($list = mysql_fetch_assoc($result)) {
                  
              ?>
              <section class="bg-1">
              <div class="container ">
               <div class="col-sm-10 col-sm-offset-1 " style="background-color:rgba(5,5,5,.8);">      
              <div class="row">    
                    <br>
                    <div class="col-md-2 col-sm-3 text-center">
                      <a class="story-img" href="viewprofile.php?e=<?php echo $list['author']?>"><img src="<?php 
                        $img=mysql_query("SELECT img FROM guru where email= '$list[author]' ");
                $rsimg= mysql_fetch_array($img);

                      echo $rsimg['img'] ?>" style="width:100px;height:100px" class="img-circle"></a>
                    </div>
                    <div class="col-md-10 col-sm-9" >
                      <a ><h3 ><?php print ($list['judul']);?></h3></a>
                      <?php 
                      $idpost=$list['idpost'];
                      $fl=mysql_query("SELECT * FROM file where id_post = '$idpost' ");
                      $no=1;

                      while ($flp=mysql_fetch_assoc($fl)) {
                      if(strlen($flp['nm_file'])>1)
                      {
                        echo '<span class="btn btn-default btn-xs" ><a href="'.$flp['nm_file'].'">file '.$no.'</a></span>';
                        $no=$no+1;
                      }
                      }
                      ?>
                      <div class="row">
                        <div class="col-xs-9 " >
                          <article><p><?php
                      print ($list['isi']);
                    ?></p></article>
                          
                          <p class="pull-right"><span class="label label-default"><?php $kat=$list['kategori']; $mapel=mysql_query("select * from mapel where id = '$kat'"); $kategory=mysql_fetch_assoc($mapel); echo $kategory['mata_pelajaran'];?></span> <span class="label label-default"><?php $kls= $list['kelas']; $query=mysql_query("select * from kelas where id = '$kls'");$kelas = mysql_fetch_assoc($query); echo $kelas['kelas'];?></span> </p>
                          <!-- <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 4 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 34 Shares</a></li></ul> -->
                          </div>
                        <div class="col-xs-3"></div>
                      </div>
                      
                    </div>
                    <br><br>
                  </div>
                  </div>
                  </div>
                  </section>
                  <?php
                  
                } // end while
              ?>
  
    
    <div class="divider"></div>
    
  </div>
</div>
    
<div class="divider"></div>
  


<div class="divider" ></div>
  
<section class="bg-2">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">LOGIN</h2></div>
</section>
  
<div class="divider" id="section2"></div>
  
<div class="bg-4">
  <div class="container">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      <form class="form-horizontal" role="form" method="post" action="index.php/home/login">
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" name="userid" placeholder="Username or email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
            <input class="form-control" type="password" name="pass" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="checkbox">
              <label>
                  <input name="remember" type="checkbox" value="1">Remember Me
              </label>
          </div>
        </div>
        <!-- <div class="form-group">
          <a href="#email" data-toggle="modal">lupa password</a>
        </div> -->
        <button class="btn btn-primary" type="submit" name="lgin">Login</button>
    
      </form>
         
      </div><!--/col-->
      
      
            
	</div><!--/row-->
  </div><!--/container-->
</div>

<div class="divider"></div>
  
<section class="bg-3">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">REGISTER</h2></div>
</section>


<div class="divider" id="section3"></div>
  
<div class="bg-4">
  <div class="container">
  <div class="row">
     <div class="col-sm-8 col-xs-9">
      
      <ul class="nav nav-tabs" role="tablist" >
        <li role="presentation" class="active"><a data-toggle="tab" href="#siswa">Siswa</a></li>
        <li role="presentation" ><a data-toggle="tab" href="#guru">Guru</a></li>
      </ul>
      <div class="tab-content">
           <div class="tab-pane active" id="siswa">
          <form class="form-horizontal" role="form" action="index.php/home/register/siswa" method="POST">
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Depan</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="firstnm" placeholder="Masukkan Nama Depan" required />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Belakang</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="lastnm" placeholder="Masukkan Nama Belakang" required />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Kelas</label>
              <div class="col-sm-9">
                <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                <option selected>--MASUKKAN KELAS--</option>';
                <?php
                $kls=mysql_query("SELECT * FROM kelas");
                while ($kelas=mysql_fetch_assoc($kls)) 
                {
                 echo "<option>".$kelas['kelas']."</option>";
                }
                ?>
              </select>  
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Username</label>
              <div class="col-sm-6">
                
                <input class="form-control" type="text" id="usersiswa" name="username" placeholder="Masukkan username" onkeyup="usernamesiswa(this.value)" required />
                
              </div>
              <div class="col-sm-2">
                <span id="sis1" class="btn btn-danger" style="visibility:hidden;"><i class="glyphicon glyphicon-stop" ></i></span>
                <span id="sis2" class="btn btn-success" style="visibility:hidden;"><i class="glyphicon glyphicon-ok" ></i></span>
                <div id="usename"class="col-sm-3"></div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat E-Mail</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="email" placeholder="Masukkan Alamat E-Mail"  type="email" onkeyup="emailsiswa(this.value)" autofocus />
                
              </div>
              <div id="mailsis" class="col-sm-3">
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass" id="pass1" placeholder="Masukkan Password" onkeyup="passc(this.value)" required />
                
              </div>
              <div id="passcount" class="col-sm-3"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Re-type Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass2" placeholder="Masukkan Password"  onkeyup="passck(this.value)" required />
                
              </div>
              <div id="passceck"class="col-sm-3"></div>
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" type="submit" id="insert1" name="insertsiswa">Register</button>
            </div>
          </form>
        </div>
        
           <div class="tab-pane" id="guru">
                    <form class="form-horizontal" role="form" action="index.php/home/register/guru" method="POST">
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Depan</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="firstnm" placeholder="Masukkan Nama Depan"   required />
                
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Nama Belakang</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="lastnm" placeholder="Masukkan Nama Belakang" required />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Tanggal Lahir</label>
              <div class="col-sm-9">
                <input class="form-control date-picker" type="text" name="ttl" placeholder="Masukkan Tanggal Lahir (1999-12-01)" id="date-picker" data-date-format="yyyy-mm-dd">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Mata Pelajaran</label>
              <div class="col-sm-9">
                <select class="form-control" type="text" name="mapel" placeholder="Mata Pelajaran yang diajar" required />
                <option selected>MASUKKAN MAPEL-</option>
                <?php 
                $sql=mysql_query("SELECT * FROM mapel");
                while ($kls=mysql_fetch_assoc($sql)) 
                {
                 echo"<option>".$kls['mata_pelajaran']."</option>";
                }
                ?>
                 </select>             
              </div>
            </div>
             <div class="form-group">
              <label class="col-sm-3 control-label">Username</label>
              <div class="col-sm-6">
                
              <input class="form-control" type="text" id="userguru" name="usernm" placeholder="Username" onkeyup="usernameguru(this.value)"  required/>
              </div>
              <div class="col-sm-2">
                
              <span id="gur1" class="btn btn-danger" style="visibility:hidden;"><i class="glyphicon glyphicon-stop" ></i></span>
              <span id="gur2" class="btn btn-success" style="visibility:hidden;"><i class="glyphicon glyphicon-ok" ></i></span>
              </div>
              <div class="col-sm-12">
              <label>tidak diawali dengan angka "1234567890", tidak menggunakan selain huruf "!@##$%^**()"</label> 
              </div>
              </div>
            
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat E-Mail</label>
              <div class="col-sm-6">
                <input class="form-control" type="text" name="email" placeholder="Masukkan Alamat E-Mail" type="email" onkeyup="emailguru(this.value)" required />
                 
              </div>
              <div id="mail" class="col-sm-3"></div> 
              
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass" id="passguru" placeholder="Masukkan Password" onkeyup="passcgr(this.value)" required />
              </div>
                <div id="passcountgr" class="col-sm-3"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Re-type Password</label>
              <div class="col-sm-6">
                <input class="form-control" type="password" name="pass2" placeholder="Masukkan Password"  onkeyup="passckgr(this.value)" required />
              </div>
                <div id="passceckgr" class="col-sm-3"></div>
            </div>  
            <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="sub1()"  id="insert2" name="insertguru">Register</button>
            </div>
          </form>
        </div>
      </div>
      
         
      </div><!--/col-->
      
      
            
  </div><!--/row-->
  </div><!--/container-->
</div>

<div class="divider" id="section4"></div>

<div class="row">
  <div class="col-md-8 col-md-offset-1">
  </div>
</div>
  
<div class="row">
  
  <div class="col-sm-10 col-sm-offset-1">
      <h1>Location</h1>
  </div>   
       
  <div id="map-canvas"></div>
  
  <hr>
  
  <div class="col-sm-8"></div>
  <div class="col-sm-3 pull-right">

      <address>
        Alamat:<br>
        <span id="map-input">
        SMA Negeri 4 Surabaya <br>
        Pacar Keling, Jawa Timur</span><br>
        P: (413) 700-5999
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>          
  </div>
  
</div><!--/row-->
  
<div class="divider" id="section5"></div>  

<div class="row">
  
  <hr>
  
  <div class="col-sm-9 col-sm-offset-1">
      <form action="<?php echo base_url();?>index.php/home/contact" method="post">
        
      <div class="row form-group">
        <div class="col-md-12">
        <h1>Contact Us</h1>        
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="firstName" name="name" placeholder="Your Name" required>
        </div>
        <div class="col-xs-6">
          <input type="text" class="form-control" id="organization" name="organization" placeholder="Company or Organization">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="text" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="col-xs-5">
          <input type="text" class="form-control" name="phone" placeholder="Phone" >
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <textarea class="form-control" name="isi" placeholder="Comments" required></textarea>
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Contact Us</button>
          </div>
      </div>
    
      </form>
  </div>
  
</div><!--/row-->
  
<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">

      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/bootply"><img src="/assets/example/soc_fb.png"></a></li>
        <li><a href="http://twitter.com/bootply"><img src="/assets/example/soc_tw.png"></a></li>
        <li><a href="http://google.com/+bootply"><img src="/assets/example/soc_gplus.png"></a></li>
        <li><a href="http://pinterest.com/in1"><img src="/assets/example/soc_pin.png"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright ©2014 ACME, Inc.</p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
 
          <div class="carousel-inner">
           
          </div>
          
          <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
          
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>


	<!-- script references -->
		<script type="text/javascript" src="<?php echo base_url();?>asset/home/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>asset/home/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/home/js/bootstrap-datepicker.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
    <script src="<?php echo base_url();?>asset/home/js/scripts.js"></script>
     <script src="<?php echo base_url();?>asset/home/js/readmore.min.js"></script>
    <script type="text/javascript">$('article').readmore({
  speed: 75,
  lessLink: '<a href="#">Read less</a>'
});</script>
    <script type="text/javascript">$('.date-picker').datepicker();</script>
	</body>
</html>