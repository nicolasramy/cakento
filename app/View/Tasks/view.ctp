<div class="tasks view">
<h2><?php  echo __('Task');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($task['Task']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Due'); ?></dt>
		<dd>
			<?php echo h($task['Task']['due']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($task['Task']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignation'); ?></dt>
		<dd>
			<?php echo h($task['Task']['assignation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Milestone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['Milestone']['name'], array('controller' => 'milestones', 'action' => 'view', $task['Milestone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($task['Task']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($task['Task']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestone'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tokens');?></h3>
	<?php if (!empty($task['Token'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Begin'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Task Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($task['Token'] as $token): ?>
		<tr>
			<td><?php echo $token['id'];?></td>
			<td><?php echo $token['name'];?></td>
			<td><?php echo $token['description'];?></td>
			<td><?php echo $token['begin'];?></td>
			<td><?php echo $token['end'];?></td>
			<td><?php echo $token['user_id'];?></td>
			<td><?php echo $token['project_id'];?></td>
			<td><?php echo $token['task_id'];?></td>
			<td><?php echo $token['created'];?></td>
			<td><?php echo $token['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tokens', 'action' => 'view', $token['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tokens', 'action' => 'edit', $token['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tokens', 'action' => 'delete', $token['id']), null, __('Are you sure you want to delete # %s?', $token['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
