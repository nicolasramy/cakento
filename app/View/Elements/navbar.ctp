<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <?php echo $this->Html->link('Cakento', array('controller' => 'dashboard', 'action' => 'index'), array('class' => 'brand')); ?>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
        </ul>
    </div>
</div>
