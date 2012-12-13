<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Warehouses'); ?></h2>


			<div class="btn-group">
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
				<li class="active"><?php echo __('Add'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
		<?php echo $this->Form->create('Warehouse'); ?>
		<?php
			echo $this->Form->input('store_id');
			echo $this->Form->input('name');
		?>

		<?php
			echo $this->Form->button('Add', array('type' => 'submit', 'class' => 'btn'));
			echo $this->Form->end();
		?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('List Warehouses'), array('action' => 'index')); ?></li>
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
