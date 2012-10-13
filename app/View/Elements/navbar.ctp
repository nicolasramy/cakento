<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <?php //echo $this->Html->link(Configure::read('App.name'), array('controller' => 'dashboard', 'action' => 'index'), array('class' => 'brand')); ?>
        <?php echo $this->Html->link(Configure::read('App.name'), '/', array('class' => 'brand')); ?>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Sales'), array('controller' => 'sales', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        </ul>
    </div>
</div>
