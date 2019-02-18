<html>
<head>
<?php
$username = $this->session->userdata('username');
$status = $this->session->userdata('status');
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-LETRA</title>
    <link href="<?php echo base_url();?>asset/pages/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/pages/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/pages/css/blog-post.css" rel="stylesheet">
    <script type="text/javascript">

    var ajaxku;
    function profile(nama){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/page/profile/?email="+nama;
     ajaxku.onreadystatechange=file;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function buatajax(){ 
    if (window.XMLHttpRequest){ 
    return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
    return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
    } 

    function file(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200){
     data=ajaxku.responseText;
     if(data.length>0){
       document.getElementById("pro").innerHTML = data;
       }
       else
       {
       document.getElementById("pro").innerHTML = "<h4>Side Widget Well</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>";
       }
     }
    }
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/plugin/tinymce/tinymce.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/page/index"><strong>E-LETRA</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                if($status=="Guru")
                   {
                echo '     
                <ul class="nav navbar-nav">

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">POSTING<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                             <li><a href="'.base_url().'index.php/page/posting">POST</a></li>
                             <li><a href="'.base_url().'index.php/page/listpost">LIST POST</a></li>
                    
                        </ul>
                    </li>
                    
                </ul>';
                   } 
                ?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, <?php echo strtoupper($username);?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a data-toggle="modal" href="#profile">PROFILE</a></li>
                    <li><a href="<?php echo base_url();?>index.php/page/logout">LOGOUT</a></li>
                    
                </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>