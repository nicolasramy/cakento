<header>
	<div id="breadcrumbs">
		<?php
			$this->Crumb->addElement('Dashboard', 'dashboard');
			$this->Crumb->addElement('Projects', 'projects');
			$this->Crumb->addElement('Milestone', 'milestones');
			$this->Crumb->addElement('List');
			echo $this->Crumb->getHtml();
		?>
	</div>
</header>

<article class="milestones index">
	<h2>
		<?php
			echo $this->Html->image('icons/32/bookmark.png', array('class' => 'icon', 'alt' => __('Milestones', true)));
			echo __('Milestones');
		?>
	</h2>

	<div class="toolbar">
		<ul class="buttons">
			<li>
			<?php echo $this->Html->link(
					$this->Html->image('icons/16/bookmark--plus.png', array('class' => 'icon', 'alt' => __('New Milestone', true))) . __('New Milestone', true),
					array('controller' => 'milestones', 'action' => 'add'),
					array('escape' => false));
				?>
			</li>
		</ul>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<td class="a-center">
				<?php
					echo $this->Html->image('icons/16/ui-check-boxes.png', array('class' => 'icon', 'alt' => h('Checkboxes', true)));
				?>
			</td>
			<td class="a-right"><?php echo $this->Paginator->sort('id');?></td>
			<td><?php echo $this->Paginator->sort('project_id');?></td>
			<td><?php echo $this->Paginator->sort('name');?></td>
			<td class="a-center"><?php echo $this->Paginator->sort('due');?></td>
			<td class="actions a-right"><?php echo __('Actions');?></td>
		</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($milestones as $milestone): ?>
		<tr>
			<td class="a-center"><?php echo $this->Form->checkbox('Milestone-'.$milestone['Milestone']['id']); ?>&nbsp;</td>
			<td class="a-right"><?php echo h($milestone['Milestone']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($milestone['Project']['name'], array('controller' => 'projects', 'action' => 'view', $milestone['Project']['id'])); ?>
			</td>
			<td><?php echo h($milestone['Milestone']['name']); ?>&nbsp;</td>
			<td class="a-center"><?php echo h($milestone['Milestone']['due']); ?>&nbsp;</td>

			<td class="actions a-right">
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document-search-result.png', array('class' => 'icon', 'alt' => h('View', true))),
					array('controller' => 'milestones', 'action' => 'view', $milestone['Milestone']['id']),
					array('escape' => false));
				?>
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document--pencil.png', array('class' => 'icon', 'alt' => h('Edit', true))),
					array('controller' => 'milestones', 'action' => 'edit', $milestone['Milestone']['id']),
					array('escape' => false));
				?>
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document--minus.png', array('class' => 'icon', 'alt' => h('Delete', true))),
					array('controller' => 'milestones', 'action' => 'delete', $milestone['Milestone']['id']),
					array('escape' => false),
					sprintf(h('Are you sure you want to delete # %s?', true), $milestone['Milestone']['id']));
				?>
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
		<li><?php echo $this->Html->link(__('New Milestone'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
	</ul>
</article>
