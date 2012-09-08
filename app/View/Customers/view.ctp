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
		<div class="span12">
			<h2><?php echo ucwords($customer['Attribute']['firstname']) . ' ' . ucwords($customer['Attribute']['lastname']); ?></h2>
			<h3><?php echo $customer['Customer']['email']; ?></h3>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<h4><?php echo __('Informations'); ?></h4>
			<dl>
				<?php foreach ($customer['Attribute'] as $label => $value) : ?>
				<dt><?php echo h($label); ?></dt>
				<dd>
					<?php echo h($value); ?>
				</dd>
				<?php endforeach; ?>
			</dl>
		</div>

		<div class="span6">
			<h4><?php echo __('Addresses'); ?></h4>
			<?php
				if (count($addresses)) {
					echo '<dl>';
					foreach ($addresses as $address) {
						echo '<h5>' . $address['Address']['entity_id'] . '</h5>';
						foreach ($address['Attribute'] as $key => $value) {
							echo '<dt>' . $key . '</dt>';
							echo '<dd>' . $value . '</dd>';
						}
					}
					echo '</dl>';
				}
			?>
		</div>

	</div>
</div>