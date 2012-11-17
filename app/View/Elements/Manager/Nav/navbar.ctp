<div class="navbar navbar-static-top navbar-inverse">
    <div class="navbar-inner">
        <a class="brand" href="/manager"><?php echo ('Cakento'); ?></a>
        <ul class="nav">
            <li<?php if ($this->request->params['controller'] == 'dashboard') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li class="dropdown">
                <?php echo $this->Html->link(__('Catalog'), '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
                <ul class="dropdown-menu">
                    <li>
                        <?php
                            echo $this->Html->link(__('Brands'),
                                array('controller' => 'brands', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $this->Html->link(__('Products'),
                                array('controller' => 'products', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>

                </ul>
            </li>
            <li<?php if ($this->request->params['controller'] == 'carts') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Carts'), array('controller' => 'carts', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li<?php if ($this->request->params['controller'] == 'orders') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li<?php if ($this->request->params['controller'] == 'subscriptions') {echo ' class="active"';} ?>>
                <?php echo $this->Html->link(__('Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index', 'manager' => true)); ?>
            </li>
            <li class="dropdown">
                <?php echo $this->Html->link(__('CMS'), '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
                <ul class="dropdown-menu">
                    <li>
                        <?php
                            echo $this->Html->link(__('Websites'),
                                array('controller' => 'websites', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $this->Html->link(__('Pages'),
                                array('controller' => 'pages', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>
                    <li>
                        <?php
                            echo $this->Html->link(__('Themes'),
                                array('controller' => 'themes', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>

                </ul>
            </li>
            <li class="dropdown">
                <?php echo $this->Html->link(__('Configuration'), '#', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')); ?>
                <ul class="dropdown-menu">
                    <li>

                    </li>
                    <li class="dropdown-submenu">
                        <?php echo $this->Html->link(__('Catalog'), '#', array('tabindex' => '-1')); ?>
                        <ul class="dropdown-menu">
                            <li>
                                <?php
                                    echo $this->Html->link(__('Attributes'),
                                        array('controller' => 'attributes', 'action' => 'index', 'manager' => true),
                                        array('tabindex' => '-1')
                                    );
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo $this->Html->link(__('Categories'),
                                        array('controller' => 'categories', 'action' => 'index', 'manager' => true),
                                        array('tabindex' => '-1')
                                    );
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo $this->Html->link(__('Types'),
                                        array('controller' => 'product_types', 'action' => 'index', 'manager' => true),
                                        array('tabindex' => '-1')
                                    );
                                ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <?php
                            echo $this->Html->link(__('Stores'),
                                array('controller' => 'stores', 'action' => 'index', 'manager' => true),
                                array('tabindex' => '-1')
                            );
                        ?>
                    </li>
                </ul>
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
