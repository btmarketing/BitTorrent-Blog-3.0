<?php global $bt_options ?>


<?php 
if ($bt_options['modalTextColor'] == '') {
  $ctacolor = '#ffffff';
}
else {
  $ctacolor = $bt_options['modalTextColor'];
}
?>
  <!-- Modal -->
  <div class="modal fade bt-modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

          <div class="single-featured modal-cta" style="background-image: url('<?php echo $bt_options['modalImage']['url']; ?>'); color: <?php echo $ctacolor ?>">
            <h2><?php echo $bt_options['modalText'] ?></h2>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h4><?php echo $bt_options['modalTextSecond'] ?></h4>
              </div>
            </div>
            <?php if ($bt_options['modalBtn2'] != '') { ?>
            <div class="button row">
              <div class="col-md-5 col-md-offset-1">
                <a href="<?php echo $bt_options['modalBtn1url'] ?>" target="_blank"><button type="button" class="btn btn-bt one"><?php echo $bt_options['modalBtn1'] ?></button></a>
              </div>
              <div class="col-md-5">
                <a href="<?php echo $bt_options['modalBtn2url'] ?>" target="_blank"><button type="button" class="btn btn-bt3 singleta two"><?php echo $bt_options['modalBtn2'] ?></button></a>
                </div>
            </div>
            <?php } else { ?>
            <div class="button">
              <a href="<?php echo $bt_options['modalBtn1url'] ?>" target="_blank"><button type="button" class="btn btn-bt"><?php echo $bt_options['modalBtn1'] ?></button></a>
            </div>
            <?php } ?>
          </div>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript">
    jQuery.noConflict()(window).load(function(){
        jQuery.noConflict()('#myModal1').modal('show');
    });

</script>