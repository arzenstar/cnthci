<?php
$username = $this->session->userdata('admin');
?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
									$sql=mysql_query("select * from posting");
									$sum=mysql_num_rows($sql);
									echo $sum;
									?>
									</div>
                                    <div>Posting</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/admin/tableposting">
                            <div class="panel-footer">
                                <span class="pull-left">Cek Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php
									$sql=mysql_query("select * from guru");
									$sum=mysql_num_rows($sql);
									$sql2=mysql_query("select * from siswa");
									$sum1=mysql_num_rows($sql2);
									echo $sum + $sum1;
									?>
									</div>
                                    <div>User Terdaftar</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/admin/tableuser">
                            <div class="panel-footer">
                                <span class="pull-left">Cek Detail</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php
                                    $sql=mysql_query("select * from contact");
                                    $sum=mysql_num_rows($sql);
                                    echo $sum ;
                                    ?>
                                    </div>
                                    <div>Pesan Contact</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/admin/tablecontact">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                      
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">

                    <!-- /.panel -->

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->

                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->