<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Manager</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            File Siswa
                            <A href="#siswa" data-toggle="modal" style="margin-left:700px;"><BUTTON class="btn-success" >TAMBAH SISWA</BUTTON></A>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Kelas</th>
                                            <th>Email</th>
                                            
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    $query=mysql_query("select * from siswa");
                                    while($file=mysql_fetch_assoc($query))
                                    {
                                        echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$file['first_nm']."</td>
                                            <td>".$file['last_nm']."</td>
                                            <td>".$file['kls']."</td>
                                            <td>".$file['email_sis']."</td>

                                            <td><a class='btn btn-success' href='".base_url()."index.php/admin/usereditor/?target=siswa&&id=".$file['id_siswa']."'>UPDATE</a><strong>/</strong><a class='btn btn-danger' href='".base_url()."index.php/admin/deleteuser/?user=siswa&&id=".$file['id_siswa']."&&directory=".$file['username']."'>DELETE</a></td>
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
                    <br>
                    <br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            File Guru
                            <A href="#guru" data-toggle="modal" style="margin-left:700px;"><BUTTON class="btn-success" >TAMBAH GURU</BUTTON></A>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Tanggal Lahir</th>
                                            
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no=1;
                                    $query=mysql_query("select * from guru");
                                    while($file=mysql_fetch_assoc($query))
                                    {
                                        echo "<tr class='odd gradeX'>
                                            <td>".$no."</td>
                                            <td>".$file['first_name']."</td>
                                            <td>".$file['last_name']."</td>
                                            <td>".$file['ttl']."</td>
                                    
                                            <td>".$file['email']."</td>
                                            <td>".$file['username']."</td>
                                            <td><a class='btn btn-success' href='".base_url()."index.php/admin/usereditor/?target=guru&&id=".$file['id_guru']."'>UPDATE</a><strong>/</strong><a class='btn btn-danger' href='".base_url()."index.php/admin/deleteuser/?user=guru&&id=".$file['id_guru']."&&directory=".$file['username']."'>DELETE</a></td>
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
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
    </div>