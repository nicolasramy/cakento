<div class="tokens index">
	<h2><?php echo __('Tokens');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('begin');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('task_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tokens as $token): ?>
	<tr>
		<td><?php echo h($token['Token']['id']); ?>&nbsp;</td>
		<td><?php echo h($token['Token']['name']); ?>&nbsp;</td>
		<td><?php echo h($token['Token']['description']); ?>&nbsp;</td>
		<td><?php echo h($token['Token']['begin']); ?>&nbsp;</td>
		<td><?php echo h($token['Token']['end']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($token['User']['name'], array('controller' => 'users', 'action' => 'view', $token['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($token['Project']['name'], array('controller' => 'projects', 'action' => 'view', $token['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($token['Task']['name'], array('controller' => 'tasks', 'action' => 'view', $token['Task']['id'])); ?>
		</td>
		<td><?php echo h($token['Token']['created']); ?>&nbsp;</td>
		<td><?php echo h($token['Token']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $token['Token']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $token['Token']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $token['Token']['id']), null, __('Are you sure you want to delete # %s?', $token['Token']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Token'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</div>
