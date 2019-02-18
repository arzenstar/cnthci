<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact Manager</h1>
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
                                            <th>Name</th>
                                            <th>Organisasi</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>isi</th>
                                            <th>date</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $no=1;
									$query=mysql_query("select * from contact ");
									while($file=mysql_fetch_assoc($query))
									{
                                        echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$file['name']."</td>
                                            <td>".$file['organisasi']."</td>
                                            <td>".$file['email']."</td>
                                            <td>".$file['phone']."</td>
                                            <td>".$file['isi']."</td>
                                            <td>".$file['date']."</td>
                                            <td><a class='btn btn-danger' href='".base_url()."index.php/admin/deletecontact/".$file['id_contact']."'>DELETE</a></td>
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