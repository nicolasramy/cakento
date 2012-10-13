<div class="navbar navbar-static-top navbar-inverse">
    <div class="navbar-inner">
        <a class="brand" href="/manager"><?php echo ('Cakento'); ?></a>
        <ul class="nav">
            <li<?php if ($this->request->params['controller'] == 'dashboard') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li<?php if ($this->request->params['controller'] == 'providers') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Providers'), array('controller' => 'providers', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li<?php if ($this->request->params['controller'] == 'countries') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Countries'), array('controller' => 'countries', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li<?php if ($this->request->params['controller'] == 'brands') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Brands'), array('controller' => 'brands', 'action' => 'index', 'manager' => true)); ?>
            </li>
        </ul>

        <ul class="nav pull-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo __('Settings'); ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <?php echo $this->Html->link(__('My profile'), array('controller' => 'users', 'action' => 'view')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>