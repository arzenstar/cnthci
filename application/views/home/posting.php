<div class="container">

        <div class="row">
        <div class="col-lg-8">

            <!-- Blog Post Content Column -->
            <script>
                    tinymce.init({
                        selector: "textarea#editor",
                        theme: "modern",
                        width: 500,
                        height: 300,
                        plugins: [
                             "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                             "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                             "save table contextmenu directionality emoticons template paste textcolor jbimages responsivefilemanager"
                       ],
                       content_css: "css/content.css",
                       toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons responsivefilemanager", 
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
                    <form class="form-horizontal"  action="<?php echo base_url();?>index.php/page/inputposting" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Posting</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="judul" placeholder="Judul Postingan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pelajaran</label>
                            <div class="col-sm-9">
                                <select class="form-control" type="text" name="mapel" placeholder="Kategori Mata Pelajaran" required>
                                <option selected>--PILIH MAPEL--</option>
                                <?php 
                                    $sql=mysql_query("SELECT * FROM mapel");
                                    while ($mapel=mysql_fetch_assoc($sql)) 
                                    {
                                     echo"<option value=".$mapel['id'].">".$mapel['mata_pelajaran']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <select class="form-control" type="text" name="kls" placeholder="Masukkan Kelas" required />
                                    <option selected>--MASUKKAN KELAS--</option>';
                                    <?php
                                    $kls=mysql_query("SELECT * FROM kelas");
                                    while ($kelas=mysql_fetch_assoc($kls)) 
                                    {
                                     echo "<option value=".$kelas['id'].">".$kelas['kelas']."</option>";
                                    }
                                    ?>
                                  </select> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">file</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="file1" placeholder="pilih file" id="file1">
                                 <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file1')" class="btn iframe-btn btn-success" type="button" name="select1">select</a>
                                 <input class="form-control" type="text" name="file2" placeholder="pilih file" id="file2">
                                 <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file2')" class="btn iframe-btn btn-success" type="button" name="select2">select</a>
                                 <input class="form-control" type="text" name="file3" placeholder="pilih file" id="file3">
                                 <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file3')" class="btn iframe-btn btn-success" type="button" name="select3">select</a>
                                 <input class="form-control" type="text" name="file4" placeholder="pilih file" id="file4">
                                 <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file4')" class="btn iframe-btn btn-success" type="button" name="select4">select</a>
                                 <input class="form-control" type="text" name="file5" placeholder="pilih file" id="file5">
                                 <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=2&popup=1&field_id=file5')" class="btn iframe-btn btn-success" type="button" name="select5">select</a>
                                 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Isi Postingan</label>
                            <div class="col-lg-5">
                                <textarea id="editor" name="area"></textarea>
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
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <form method="get" action="<?php echo base_url();?>index.php/page/search/">
                        
                        <input type="text" name="judul" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php 
                        $nm_kls=1;
                        $nm_mapel=100;
                        $querry1=mysql_query("SELECT distinct a.* from kelas a, posting b WHERE a.id = b.kelas");
                        while ($kls=mysql_fetch_assoc($querry1)) {
                        ?>
                        <li><a href="#<?php echo $nm_kls?>" class="dropdown-toggle" data-toggle="collapse"><?php echo $kls['kelas']?></a>
                            <ul id="<?php echo $nm_kls?>" class="collapse">
                                <?php
                                $klas=$kls['id'];
                                $query2=mysql_query("SELECT distinct a.* from mapel a, posting b WHERE a.id = b.kategori and b.kelas=$klas");
                                 while ($mapel=mysql_fetch_assoc($query2)) {
                                  
                                 ?>
                                <li><a href="#<?php echo $nm_mapel?>"  class="dropdown-toggle" data-toggle="collapse"><?php echo $mapel['mata_pelajaran']?></a>
                                    <ul id="<?php echo $nm_mapel?>" class="collapse">
                                      <?php
                                      $pelajaran=$mapel['id'];
                                      $query3=mysql_query("SELECT distinct a.* from guru a, posting b WHERE a.email=b.author and b.kelas='$klas' and b.kategori=$pelajaran ");
                                      while ($guru=mysql_fetch_assoc($query3)) 
                                        {?>
                                        <li><a href="<?php echo base_url();?>index.php/page/search/?email=<?php echo $guru['email'];?>" ><?php echo $guru['first_name']; echo' '; echo $guru['last_name'];?></a></li>
                                        <?php 
                                      }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                                $nm_mapel++;
                                }?>
                            </ul>
                        </li>
                        <?php 
                        $nm_kls++;  
                        }
                        ?>
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>