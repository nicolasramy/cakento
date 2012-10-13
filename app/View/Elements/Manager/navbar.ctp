<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <?php echo $this->Html->link('Cakento', array('controller' => 'dashboard', 'action' => 'index'), array('class' => 'brand')); ?>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index', 'manager' => true)); ?> </li>
            <li><?php echo $this->Html->link(__('Addresses'), array('controller' => 'addresses', 'action' => 'index', 'manager' => true)); ?> </li>
            <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index', 'manager' => true)); ?> </li>
            <li><?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index', 'manager' => true)); ?> </li>
            <li><?php echo $this->Html->link(__('Invoices'), array('controller' => 'invoices', 'action' => 'index', 'manager' => true)); ?> </li>
        </ul>
    </div>
</div>
