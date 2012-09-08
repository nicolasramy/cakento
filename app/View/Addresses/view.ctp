<div class="addresses">

	<header>
		<h1><?php echo __('Customers'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'addresses', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View') . ' #' . $address['Address']['entity_id']; ?></li>
	</ul>

	<div class="row-fluid">
		<h2><?php echo ucwords($address['Attribute']['firstname']) . ' ' . ucwords($address['Attribute']['lastname']); ?></h2>
		<h3><?php echo $address['Attribute']['city']; ?></h3>

		<div class="span12">
			<dl>
				<?php foreach ($address['Attribute'] as $label => $value) : ?>
				<dt><?php echo h($label); ?></dt>
				<dd>
					<?php echo h($value); ?>
				</dd>
				<?php endforeach; ?>
			</dl>
		</div>

	</div>
</div>