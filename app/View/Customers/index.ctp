<div class="subscriptions">

	<header>

		<div class="btn-group pull-right">
			<?php echo $this->Html->link(__('Add'), array('action' => 'add'), array('class' => 'btn')); ?>
		</div>
		<h1><?php echo __('Customers'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Customers'), array('controller' => 'customers', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('entity_id'); ?></th>
				<th><?php echo $this->Paginator->sort('firstname'); ?></th>
				<th><?php echo $this->Paginator->sort('lastname'); ?></th>
				<th><?php echo $this->Paginator->sort('email'); ?></th>
				<th><?php echo $this->Paginator->sort('created_at'); ?></th>
				<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customers as $customer): ?>
				<tr>
					<td><?php echo h($customer['Customer']['entity_id']); ?>&nbsp;</td>
					<td><?php echo h($customer['Attribute']['firstname']); ?>&nbsp;</td>
					<td><?php echo h($customer['Attribute']['lastname']); ?>&nbsp;</td>
					<td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
					<td><?php echo h($customer['Customer']['created_at']); ?>&nbsp;</td>
					<td><?php echo h($customer['Customer']['updated_at']); ?>&nbsp;</td>
					<td class="actions">
						<i class="icon-file"></i>
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['entity_id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['entity_id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['entity_id']), null, __('Are you sure you want to delete # %s?', $customer['Customer']['entity_id'])); ?>
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
