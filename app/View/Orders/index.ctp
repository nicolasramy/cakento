<div class="orders">

	<header>
		<h1><?php echo __('Orders'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('entity_id'); ?></th>
				<th><?php echo $this->Paginator->sort('state'); ?></th>
				<th><?php echo $this->Paginator->sort('status'); ?></th>
				<th><?php echo $this->Paginator->sort('customer_name'); ?></th>
				<th><?php echo $this->Paginator->sort('shipping_description'); ?></th>
				<th><?php echo $this->Paginator->sort('created_at'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($orders as $order): ?>
				<tr>
					<td><?php echo h($order['Order']['entity_id']); ?>&nbsp;</td>
					<td><?php echo h($order['Order']['state']); ?>&nbsp;</td>
					<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
					<td>
						<?php echo $this->Html->link(ucwords($order['Order']['customer_firstname'] . ' ' . $order['Order']['customer_lastname']),
							array(
								'controller' => 'customers',
								'action' => 'view',
								$order['Order']['customer_id']
							)
						); ?>
					</td>
					<td><?php echo h($order['Order']['shipping_description']); ?>&nbsp;</td>
					<td><?php echo h($order['Order']['created_at']); ?>&nbsp;</td>
					<td class="actions">
						<i class="icon-shopping-cart"></i>
						<?php echo $this->Html->link(__('Cart'), array('action' => 'view', $order['Order']['entity_id'])); ?>
						&nbsp;
						<i class="icon-file"></i>
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['entity_id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
