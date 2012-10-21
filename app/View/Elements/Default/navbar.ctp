<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <?php echo $this->Html->link('Cakento', array('controller' => 'dashboard', 'action' => 'index'), array('class' => 'brand')); ?>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
        </ul>

        <ul class="nav pull-right">
            <li>
                <?php echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'login')); ?>
            </li>
        </ul>
    </div>
</div>
