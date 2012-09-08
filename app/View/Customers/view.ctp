<div class="customers view">

	<header>
		<h1><?php echo __('Customers'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View') . ' #' . $customer['Customer']['entity_id']; ?></li>
	</ul>

	<div class="row-fluid">
		<h2><?php echo ucwords($customer['Attribute']['firstname']) . ' ' . ucwords($customer['Attribute']['lastname']); ?></h2>
		<h3><?php echo $customer['Customer']['email']; ?></h3>

		<div class="span12">
			<dl>
				<?php foreach ($customer['Attribute'] as $label => $value) : ?>
				<dt><?php echo h($label); ?></dt>
				<dd>
					<?php echo h($value); ?>
				</dd>
				<?php endforeach; ?>
			</dl>
		</div>

	</div>
</div>