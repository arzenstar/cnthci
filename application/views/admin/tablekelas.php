<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Class Manager</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DAFTAR KELAS
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>KELAS</th>
					    <th>EDIT</th>
                                       </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $no=1;
									$query=mysql_query("select * from kelas");
									while($kelas=mysql_fetch_assoc($query))
									{
                                        echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$kelas['kelas']."</td>
                                            <td><button class='btn btn-success' href='#kelas' data-toggle='modal' value='".$kelas['id']."' onclick='kelas(this.value)'>UPDATE</button>/<a class='btn btn-danger' href='".base_url()."index.php/admin/deletekelas/".$kelas['id']."'>DELETE</a></td>
                                        </tr>";
                                        
									$no++;
                                    }

									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
		    <div class="panel-body">
		   <form action="<?php echo base_url();?>index.php/admin/insertkelas" method="post">
		   <lable><strong>TAMBAH KELAS</strong></lable>
		   <input type="text" name="kelas">
		   <button class="btn btn-success" name="tambah" type="submit">ADD</button>
		   </form>
		    </div>			
                    <!-- /.panel -->
                </div>	
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>