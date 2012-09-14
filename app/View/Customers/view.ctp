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
					echo $this->element('addresses/customer');
				}
			?>
		</div>

	</div>



	<div class="row-fluid">
		<div class="span12">
			<h4><?php echo __('Orders'); ?></h4>

			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th><?php echo 'entity_id' ?></th>
						<th><?php echo 'state'; ?></th>
						<th><?php echo 'status'; ?></th>
						<th><?php echo 'Shipping Description'; ?></th>
						<th><?php echo 'created_at'; ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($orders as $order): ?>
						<tr>
							<td><?php echo h($order['Order']['entity_id']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['state']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['shipping_description']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['created_at']); ?>&nbsp;</td>
							<td class="actions">
								<i class="icon-shopping-cart"></i>
								<?php echo $this->Html->link(__('Cart'), array('controller' => 'orders', 'action' => 'view', $order['Order']['entity_id'])); ?>
								&nbsp;
								<i class="icon-file"></i>
								<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['Order']['entity_id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

</div>