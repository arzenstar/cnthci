<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>asset/admin/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>asset/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>asset/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?php echo base_url();?>asset/plugin/tinymce/tinymce.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>asset/home/js/home.js">  </script>-->

    

    <script type="text/javascript">
    var ajaxku;
    function mapel(id){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/admin/select/mapel/"+id;
     ajaxku.onreadystatechange=pelajaran;
     ajaxku.open("GET",url,true);
     ajaxku.send(null);
    }

    function kelas(id){
     ajaxku = buatajax();
     var url="<?php echo base_url();?>index.php/admin/select/kelas/"+id;
     ajaxku.onreadystatechange=idkelas;
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

    function pelajaran(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200){
     data=ajaxku.responseText;
     if(data.length>1){
       document.getElementById("class").innerHTML=data;
       
       
       }
       else
       {
       document.getElementById("class").innerHTML="";
       
       }
     }
    }
    
    function idkelas(){
    var data;
     if (ajaxku.readyState==4 && ajaxku.status==200){
     data=ajaxku.responseText;
     if(data.length>1){
       document.getElementById("class").innerHTML=data;
       
       
       }
       else
       {
       document.getElementById("class").innerHTML="";
       
       }
     }
 }
    </script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Admin</a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo base_url();?>index.php/admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/tableuser">Table User</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/tableposting">Table Posting</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/tablekelas">Table Kelas</a>

                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/tablemapel">Table Pelajaran</a>

                                </li>
                        
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/tablecontact">Table Pesan</a>

                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/homepage">Layout</a>
                                </li>
                               
                                <li>
                                    <a href="<?php echo base_url();?>index.php/admin/postinglist">List Posting</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>index.php/admin/logout"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            </nav>