<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('Warehouse'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'warehouses', 'action' => 'delete', 'manager' => true, $warehouse['Warehouse']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])
						);
					?>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'warehouses', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'warehouses', 'action' => 'edit', $warehouse['Warehouse']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'warehouses', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?php echo $this->Html->link(__('Dashboard'),array('controller' => 'dashboard', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Configuration'),array('controller' => 'configuration', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Warehouses'), array('controller' => 'warehouses', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $warehouse['Warehouse']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('Warehouse'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($warehouse['Warehouse']['id']); ?>
				</dd>
				<dt><?php echo __('Store'); ?></dt>
				<dd>
					<?php echo $this->Html->link($warehouse['Store']['name'], array('controller' => 'stores', 'action' => 'view', $warehouse['Store']['id'])); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($warehouse['Warehouse']['name']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($warehouse['Warehouse']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($warehouse['Warehouse']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit Warehouse'), array('controller' => 'warehouses', 'action' => 'edit', $warehouse['Warehouse']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Warehouse'), array('controller' => 'warehouses', 'action' => 'delete', $warehouse['Warehouse']['id']), null, __('Are you sure you want to delete # %s?', $warehouse['Warehouse']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Warehouses'), array('controller' => 'warehouses', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Warehouse'), array('controller' => 'warehouses', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Warehouse Items'), array('controller' => 'warehouse_items', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Warehouse Item'), array('controller' => 'warehouse_items', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Warehouse Trackings'), array('controller' => 'warehouse_trackings', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Warehouse Tracking'), array('controller' => 'warehouse_trackings', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
