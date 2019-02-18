	<script src="<?php echo base_url();?>asset/admin/js/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/admin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>asset/admin/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>asset/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>asset/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>asset/admin/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
        $('#dataTables-example2').dataTable();
				
    });
    </script>
    <script src="<?php echo base_url();?>asset/pages/js/jquery.fancybox.pack.js"></script>

    <script type="text/javascript">
            function open_popup(url) {
                var w = 880;
                var h = 600;
                var l = Math.floor((screen.width-w)/2);
                var t = Math.floor((screen.height-h)/2);
                var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
            }
    </script>

</body>

</html>
