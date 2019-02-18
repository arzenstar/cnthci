<?php
                        $update=$this->input->get('update');
                        $sql=mysql_query("SELECT * FROM posting where idpost=$update");
                        $item=mysql_fetch_assoc($sql);
                ?>
                <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <script>
                    tinymce.init({
                        selector: "textarea#editor",
                        theme: "modern",
                        width: 700,
                        height: 300,
                        plugins: [
                             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                             "save table contextmenu directionality emoticons template paste textcolor jbimages responsivefilemanager"
                       ],
                       content_css: "css/content.css",
                       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons responsivefilemanager", 
                       style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ],

                            external_filemanager_path:"<?php echo base_url();?>asset/plugin/filemanager/",
                            filemanager_title:"Responsive Filemanager" ,
                            external_plugins: { "filemanager" : "<?php echo base_url();?>asset/plugin/filemanager/plugin.min.js"}
                     }); 
                    </script>
                    <h3>POSTING</h3>
                <div class="">
                
                
                    <form class="form-horizontal"  action="<?php echo base_url();?>index.php/admin/updatepost/<?php echo $item['idpost']?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Posting</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="judul" placeholder="Judul Postingan" value="<?php echo $item['judul']?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pelajaran</label>
                            <div class="col-sm-9">
                            
                                <select class="form-control" type="text" name="mapel" placeholder="Kategori Mata Pelajaran" required>
                                        <option >--PILIH MAPEL--</option>
                            
                                <?php 
                                    $dbmpl=$item['kategori'];
                                    $sql=mysql_query("SELECT * FROM mapel");
                                    while ($mpl=mysql_fetch_assoc($sql)) 
                                    {
                                        $mapel=$mpl['id'];
                                        $dbmpl=$item['kategori'];
                                        if($dbmpl == $mapel)
                                        {
                                            echo"<option selected value='".$mpl['id']."'>".$mpl['mata_pelajaran']."</option>";
                                        }
                                        else
                                        {

                                     echo"<option value='".$mpl['id']."'>".$mpl['mata_pelajaran']."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-9">
                            
                                <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                                    <option >--MASUKKAN KELAS--</option>;
                                    
                                    <?php
                                    
                                    $kls=mysql_query("SELECT * FROM kelas");
                                    while ($kelas=mysql_fetch_assoc($kls)) 
                                    {
                                        $klas=$kelas['id'];
                                        $dbkls=$item['kelas'];

                                        if ($dbkls==$klas) 
                                        {
                                               echo "<option selected value='".$kelas['id']."'>".$kelas['kelas']."</option>";
                                        }
                                        else
                                        {
                                     echo "<option value='".$kelas['id']."'>".$kelas['kelas']."</option>";
                                        }
                                    }
                                    ?>
                                  </select> 
                            </div>
                        </div>
                        <?php 
                        $idpost=$item['idpost'];
                        $files=mysql_query("SELECT * FROM file WHERE id_post=$idpost");
                        $file=mysql_fetch_assoc($files);
                        ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">File</label>
                            <div class="col-sm-8">
                                 <?php
                                $numrow=1; 
                                $id=$update;
                                $files=mysql_query("select nm_file from file where id_post=$id");
                                while($file=mysql_fetch_assoc($files))
                                {
                                    ?><input class="form-control" type="text" name="file<?php echo $numrow ?>" placeholder="pilih file" id="file<?php echo $numrow ?>" value="<?php echo $file['nm_file'] ?>">
                                          <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file<?php echo $numrow ?>')" class="btn iframe-btn btn-success" type="button" name="select<?php echo $numrow ?>">select</a><?php    
                                $numrow++;
                                }
                                while($numrow<=5)
                                {
                                    ?><input class="form-control" type="text" name="file<?php echo $numrow ?>" placeholder="pilih file" id="file<?php echo $numrow ?>">
                                          <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file<?php echo $numrow ?>')" class="btn iframe-btn btn-success" type="button" name="select<?php echo $numrow ?>">select</a><?php 
                                $numrow++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Isi Postingan</label>
                            <div class="col-sm-10">
                                <textarea id="editor" name="area" ><?php echo $item['isi']?></textarea>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button class="btn btn-primary" type="submit" name="save" id="save">Publish</button>
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