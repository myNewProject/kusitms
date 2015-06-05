
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=site_url('/static')?>/assets/global/plugins/respond.min.js"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?=site_url('/static')?>/assets/global/plugins/countdown/jquery.countdown.min.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=site_url('/static')?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?=site_url('/static')?>/assets/admin/pages/scripts/coming-soon.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
  ComingSoon.init();
  // init background slide images
    $.backstretch([
            "<?=site_url('/static')?>/assets/admin/pages/media/bg/1.jpg",
            "<?=site_url('/static')?>/assets/admin/pages/media/bg/2.jpg",
            "<?=site_url('/static')?>/assets/admin/pages/media/bg/3.jpg",
    "<?=site_url('/static')?>/assets/admin/pages/media/bg/4.jpg"
        ], {
        fade: 1000,
        duration: 10000
   });
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>