<div class="subscriptions">

	<header>

		<div class="btn-group pull-right">
			<?php echo $this->Html->link(__('Add'), array('action' => 'add'), array('class' => 'btn')); ?>
		</div>

		<h2><?php echo __('Subscriptions'); ?></h2>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Subscriptions'), array('controller' => 'subscriptions', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

	<table class="table table-striped table-hover table-condensed">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<!--<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('password'); ?></th>
				<th><?php echo $this->Paginator->sort('email'); ?></th>-->
				<th><?php echo $this->Paginator->sort('duration'); ?></th>
				<th><?php echo $this->Paginator->sort('state'); ?></th>
				<th><?php echo $this->Paginator->sort('created_at'); ?></th>
				<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
				<!--<th class="actions"><?php echo __('Actions'); ?></th>-->
			</tr>
		</thead>
		<tbody>
			<?php foreach ($subscriptions as $subscription): ?>
				<tr>
					<td><?php echo h($subscription['Subscription']['subscription_id']); ?>&nbsp;</td>
					<!--<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['email']); ?>&nbsp;</td>-->
					<?php $duration = $subscription['Subscription']['duration'] > 0 ? $subscription['Subscription']['duration'] . ' ' . __('months') : __('recurring'); ?>
					<td><?php echo h($duration); ?>&nbsp;</td>
					<td><?php echo h($subscription['Subscription']['state']); ?>&nbsp;</td>
					<td><?php echo h($subscription['Subscription']['created_at']); ?>&nbsp;</td>
					<td><?php echo h($subscription['Subscription']['updated_at']); ?>&nbsp;</td>
					<!--<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					</td>-->
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
