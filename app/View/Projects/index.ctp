<header>
	<div id="breadcrumbs">
		<?php
			$this->Crumb->addElement('Dashboard', 'dashboard');
			$this->Crumb->addElement('Projects', 'projects');
			$this->Crumb->addElement('List');
			echo $this->Crumb->getHtml();
		?>
	</div>
</header>

<article class="projects index">
	<h2><?php echo __('Projects');?></h2>

	<div class="toolbar">
		<ul class="buttons">
			<li>
			<?php echo $this->Html->link(
					$this->Html->image('icons/16/folder--plus.png', array('class' => 'icon', 'alt' => __('New Project', true))) . __('New Project', true),
					array('controller' => 'projects', 'action' => 'add'),
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
			<td class="a-center"><?php echo $this->Paginator->sort('status');?></td>
			<td class="a-center"><?php echo $this->Paginator->sort('reference');?></td>
			<td><?php echo $this->Paginator->sort('name');?></td>
			<td><?php echo $this->Paginator->sort('title');?></td>
			<td class="a-center"><?php echo $this->Paginator->sort('due');?></td>
			<td class="a-right"><?php echo $this->Paginator->sort('budget');?></td>
			<td class="a-right"><?php echo $this->Paginator->sort('estimation');?></td>
			<td class="actions a-right"><?php echo h('Actions');?></td>
		</tr>
	</thead>
	<tbody>
	<?php
	$i = 0;
	foreach ($projects as $project): ?>
		<tr>
			<td class="a-center"><?php echo $this->Form->checkbox('Project-'.$project['Project']['id']); ?>&nbsp;</td>
			<td class="a-right"><?php echo h($project['Project']['id']); ?>&nbsp;</td>
			<td class="a-center">
				<?php
					if ($project['Project']['status'] == 0)
					{
						$_status = 'bookmark';
					}
					else if ($project['Project']['status'] == 1)
					{
						$_status = 'open-document';
					}
					else if ($project['Project']['status'] == 2)
					{
						$_status = 'stamp';
					}
					else if ($project['Project']['status'] == 3)
					{
						$_status = 'zipper';
					}

					echo $this->Html->link(
					$this->Html->image('icons/16/folder-' . $_status . '.png', array('class' => 'icon', 'alt' => h('View', true))),
					array('controller' => 'projects', 'action' => 'changeStatus', $project['Project']['id']),
					array('escape' => false));
				?>
			</td>
			<td class="a-center"><?php echo h($project['Project']['reference']); ?>&nbsp;</td>
			<td><?php echo h($project['Project']['name']); ?>&nbsp;</td>
			<td><?php echo h($project['Project']['title']); ?>&nbsp;</td>
			<td class="a-center"><?php echo h($project['Project']['due']); ?>&nbsp;</td>
			<td class="a-right"><?php echo h($project['Project']['budget']); ?>&nbsp;H</td>
			<td class="a-right"><?php echo h(round(($project['Project']['budget'] * 24.99 * 1.196), 2)); ?>&nbsp;€</td>
			<td class="actions a-right">
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document-search-result.png', array('class' => 'icon', 'alt' => h('View', true))),
					array('controller' => 'projects', 'action' => 'view', $project['Project']['id']),
					array('escape' => false));
				?>
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document--pencil.png', array('class' => 'icon', 'alt' => h('Edit', true))),
					array('controller' => 'projects', 'action' => 'edit', $project['Project']['id']),
					array('escape' => false));
				?>
				<?php echo $this->Html->link(
					$this->Html->image('icons/16/document--minus.png', array('class' => 'icon', 'alt' => h('Delete', true))),
					array('controller' => 'projects', 'action' => 'delete', $project['Project']['id']),
					array('escape' => false),
					sprintf(h('Are you sure you want to delete # %s?', true), $project['Project']['id']));
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	<tbody>

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
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</article>
