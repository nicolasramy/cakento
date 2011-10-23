<header>
	<div id="breadcrumbs">
		<?php
			$this->Crumb->addElement('Dashboard', 'dashboard');
			$this->Crumb->addElement('Projects', 'projects');
			$this->Crumb->addElement('Milestone', 'milestones');
			$this->Crumb->addElement('Tasks', 'tasks');
			$this->Crumb->addElement('List');
			echo $this->Crumb->getHtml();
		?>
	</div>
</header>

<article class="tasks index">
	<h2><?php echo __('Tasks');?></h2>

	<div class="toolbar">
		<ul class="buttons">
			<li>
			<?php echo $this->Html->link(
					$this->Html->image('icons/16/hammer--plus.png', array('class' => 'icon', 'alt' => __('New Task', true))) . __('New Task', true),
					array('controller' => 'tasks', 'action' => 'add'),
					array('escape' => false));
				?>
			</li>
		</ul>
	</div>

	<?php var_dump($tasks);?>

	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td class="a-center">
				<?php
					echo $this->Html->image('icons/16/ui-check-boxes.png', array('class' => 'icon', 'alt' => h('Checkboxes', true)));
				?>
			</td>
			<td><?php echo $this->Paginator->sort('id');?></td>
			<td class="a-center"><?php echo $this->Paginator->sort('due');?></td>
			<td><?php echo $this->Paginator->sort('milestone_id');?></td>
			<td><?php echo $this->Paginator->sort('name');?></td>
			<td><?php echo $this->Paginator->sort('assignation');?></td>
			<td class="actions a-right"><?php echo __('Actions');?></td>
		</tr>
	</thead>

	<tbody>
	<?php
	$i = 0;
	foreach ($tasks as $task): ?>
		<tr>
			<td class="a-center"><?php echo $this->Form->checkbox('Task-'.$task['Task']['id']); ?>&nbsp;</td>
			<td><?php echo h($task['Task']['id']); ?>&nbsp;</td>
			<td class="a-center"><?php echo h($task['Task']['due']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($task['Milestone']['name'], array('controller' => 'milestones', 'action' => 'view', $task['Milestone']['id'])); ?>
			</td>
			<td><?php echo h($task['Task']['name']); ?>&nbsp;</td>
			<td><?php echo h($task['Task']['assignation']); ?>&nbsp;</td>
			<td class="actions a-right">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $task['Task']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $task['Task']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?>
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
</article>
<article class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestone'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</article>
