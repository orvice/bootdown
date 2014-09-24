<div class="footer">
    <div class="container">
        <p class="text-muted">Copyright © <?php echo date(Y); ?> <a href="#"><?php  echo $site_name; ?></a> Power by <a href="#">BootDown</a> <?php echo $version; ?>.</>
    </div>
</div>



<!-- Load JS here for greater good =============================-->
<script src="/<?php echo BD_PATH; ?>js/jquery-1.8.3.min.js"></script>
<script src="/<?php echo BD_PATH; ?>js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/<?php echo BD_PATH; ?>js/jquery.ui.touch-punch.min.js"></script>
<script src="/<?php echo BD_PATH; ?>js/bootstrap.min.js"></script>
<script src="/<?php echo BD_PATH; ?>js/bootstrap-select.js"></script>
<script src="/<?php echo BD_PATH; ?>js/bootstrap-switch.js"></script>
<script src="/<?php echo BD_PATH; ?>js/flatui-checkbox.js"></script>
<script src="/<?php echo BD_PATH; ?>js/flatui-radio.js"></script>
<script src="/<?php echo BD_PATH; ?>js/jquery.tagsinput.js"></script>
<script src="/<?php echo BD_PATH; ?>js/jquery.placeholder.js"></script>
<script src="/<?php echo BD_PATH; ?>js/bootstrap-select.js"></script>
<script src="/<?php echo BD_PATH; ?>js/custom_checkbox_and_radio.js"></script>

<script type="text/javascript">
    $(window).on('load', function () {

        $('.selectpicker').selectpicker({
            'selectedText': 'cat'
        });

        // $('.selectpicker').selectpicker('hide');
    });
</script>