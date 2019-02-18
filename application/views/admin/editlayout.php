<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <h1><strong>LAYOUT</strong></h1>
                    <br>
                    <br>
                    <h3>Slide Show</h3>
                        <?php
                        $sql=mysql_query("select isi from atribut where nm_attrib='carousel'");
                        $car=mysql_fetch_assoc($sql);
                        $img=unserialize($car['isi']);
                        ?>
                        <div class="input-append">
                        <form class="form-horizontal" action="proses/layout.php" method="post">
                        <div class="form-group">    
                            <label>Image 1</label>
                            <input id="file1" name="img1" type="text" value="<?php echo $img[0] ?>">
                            <a href="../plugin/filemanager/dialog.php?type=2&field_id=file1" class="btn iframe-btn btn-success" type="button" name="select1">select</a>
                        </div>
                        <div class="form-group"> 
                        <label>Image 2</label>
                        <input id="file2" name="img2" type="text" value="<?php echo $img[1] ?>">
                        <a href="../plugin/filemanager/dialog.php?type=2&field_id=file2" class="btn iframe-btn btn-success" type="button" name="select1">select</a>
                        </div>
                        <div class="form-group"> 
                        <label>Image 3</label>
                        <input id="file3" name="img3" type="text" value="<?php echo $img[2] ?>">
                        <a href="../plugin/filemanager/dialog.php?type=2&field_id=file3" class="btn iframe-btn btn-success" type="button" name="select1">select</a>    
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary" type="submit" name="carousel" id="save">save</button>
                            </div>
                        </div>
                        </form>

                        <h3>ICON</h3>
                        <form class="form-horizontal" action="proses/layout.php" method="POST">
                            
                            <div class="form-group"> 
                            <label>Icon</label>
                            <?php 
                            $sql=mysql_query("SELECT isi FROM atribut WHERE nm_attrib='icon'");
                            $icon=mysql_fetch_assoc($sql);
                            ?>
                            <input id="icon" name="img" type="text" value="<?php echo $icon['isi'];?>">
                            <a href="../plugin/filemanager/dialog.php?type=2&field_id=icon" class="btn iframe-btn btn-success" type="button" name="select1">select</a>    
                            </div>
                            <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary" type="submit" name="icon" id="save">save</button>
                            </div>
                        </div>
                        </form>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>