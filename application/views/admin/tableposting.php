<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post Manager</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Post Summary
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Kelas</th>
                                            <th>author</th>
                                            <th>Date</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $no=1;
									$query=mysql_query("select * from posting where author !='ADMIN' ");
									while($file=mysql_fetch_assoc($query))
									{
                                        echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$file['judul']."</td>
                                            <td>".$file['kategori']."</td>
                                            <td>".$file['kelas']."</td>
                                            <td>".$file['author']."</td>
                                            <td>".$file['time']."</td>
                                            <td><a class='btn btn-success' href='".base_url()."index.php/admin/editpost/?update=".$file['idpost']."'>UPDATE</a>/<a class='btn btn-danger' href='".base_url()."index.php/admin/deletepost/".$file['idpost']."'>DELETE</a></td>
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
					
                    <!-- /.panel -->
                </div>	
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>