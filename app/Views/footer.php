    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/mdb.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/general.js');?>"></script>

    <!-- Addition JS -->
    <?php if (isset($jsFooterFiles)) foreach ($jsFooterFiles as $url) echo '<script src="'.$url.'"></script>';?>

    <?php if (isset($jsFooterScripts)) {
      foreach ($jsFooterScripts as $scr) echo '<script>'.$scr.'</script>';
    }?>  
  </body>
</html>