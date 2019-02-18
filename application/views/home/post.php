<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>The Firm - One Page Scroller Template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url();?>asset/home/css/bootstrap.min.css" rel="stylesheet">
  
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url();?>asset/home/css/styles.css" rel="stylesheet">
	</head>
  
	<body>
<!-- Wrap all page content here -->
<div id="wrap">

 
<header class="masthead">
<img src="head.png" style="margin-left:500px;height:100px;width:300px;">
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
          <li><a href="<?php echo base_url();?>">Home</a></li>
          
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    <?php
    $id=$this->input->get('id');
          if(empty($id))
          {
            echo '<script>alert("Data tidak tersedia")</script>';
          }
          
          $sql=mysql_query("SELECT * FROM posting where idpost='$id'");
          $cek=mysql_fetch_array($sql);
          $id=$cek['idpost'];
          $sql2=mysql_query("SELECT * FROM file WHERE id_post='$id'");
          $img=mysql_fetch_assoc($sql2);
          echo '<h3>';
          print strtoupper($cek['judul']);
          echo '</h3>
            <ul class="list-inline"><li><a href="#">'.$cek['time'].'</a></li></ul>
                         
              <div class="row">
                <div class="col-xs-9">
                  <p>';
          echo'<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="'.$img['nm_file'].'" class="img-responsive"></a></div>
         
        </div><!--/panel-->';
          print $cek['isi'];
          echo '</div>
          </div>';
          ?>
      <div class="divider"></div>    
  </div>
</div>
    
<div class="divider"></div>
  

  
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
		<script type="text/javascript" src="<?php echo base_url();?>asset/home/js/jquery-1.11.1.min.js"></script>
		<script src="<?php echo base_url();?>asset/home/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>asset/home/js/scripts.js"></script>
	</body>
</html>