<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <a class="brand" href="#"><?php echo Configure::read('App.name'); ?></a>
        <ul class="nav">
            <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        </ul>
    </div>
</div>