<div class="alert alert-block alert-error">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <?php
        echo $this->Html->image('fugue-icons/exclamation-red.png', array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => 'Information'));
        echo $message;
    ?>
</div>
