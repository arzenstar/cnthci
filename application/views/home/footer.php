<script src="<?php echo base_url();?>asset/pages/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>asset/pages/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/pages/js/readmore.min.js"></script>
    <script type="text/javascript">$('article').readmore({
  speed: 75,
  lessLink: '<a href="#">Read less</a>'
});</script>
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
<script >

function myFunction(abc) {
  var elemen='<?php echo base_url();?>index.php/page/deletepost/?id='+abc;
    var r = confirm("ANDA YAKIN INGIN MENGHAPUS POSTING!");
    if (r == true) {
        document.location=elemen;
    } else {
       document.location='<?php $_SERVER['HTTP_REFERER'];?>';
    }
}
</script>
</body>

</html>