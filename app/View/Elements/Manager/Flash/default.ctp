<div class="alert alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php
        echo $this->Html->image('fugue-icons/exclamation-diamond.png', array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => 'Information'));
        echo $message;
    ?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.alert.alert-block').delay(3000).slideUp(2000);
    });
</script>
