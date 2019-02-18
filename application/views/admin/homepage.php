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
                
                
                    <form class="form-horizontal"  action="<?php echo base_url()?>index.php/admin/inserthomepage" method="post" enctype="multipart/form-data" name="form1" id="form1">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Posting</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" name="judul" placeholder="Judul Postingan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Image</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="text" id="image" name="image" placeholder="Image" required>
                                <a href="javascript:open_popup('<?php echo base_url()?>asset/plugin/filemanager/dialog.php?type=1&popup=1&field_id=image')" class="btn iframe-btn btn-success" type="button" name="select1">select</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Isi Postingan</label>
                            <div class="col-sm-10">
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
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

    </div>