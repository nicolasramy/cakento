<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Attributes'); ?></h2>

			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'attributes', 'action' => 'add', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?php echo $this->Html->link(__('Configuration'), array('controller' => 'configuration', 'action' => 'index')); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Products'), array('controller' => 'configuration', 'action' => 'products')); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Attributes'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-condensed">
			<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('visible'); ?></th>
				<th><?php echo $this->Paginator->sort('searchable'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($attributes as $attribute): ?>
			<tr>
				<td><?php echo h($attribute['Attribute']['id']); ?>&nbsp;</td>
				<td><?php echo h($attribute['Attribute']['name']); ?>&nbsp;</td>
				<td><?php echo h($attribute['Attribute']['visible']); ?>&nbsp;</td>
				<td><?php echo h($attribute['Attribute']['searchable']); ?>&nbsp;</td>
				<td class="actions">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document.png',
								array('class' => 'fugue-icon', 'alt' => __('View'))
							),
							array('action' => 'view', $attribute['Attribute']['id']),
							array('escape' => false)
						);

						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-center', 'alt' => __('Edit'))
							),
							array('action' => 'edit', $attribute['Attribute']['id']),
							array('escape' => false)
						);

						echo $this->Html->link($this->Html->image('fugue-icons/document--minus.png',
								array('class' => 'fugue-icon', 'alt' => __('Delete'))
							),
							array('action' => 'delete', $attribute['Attribute']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $attribute['Attribute']['id'])
						);
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
		</div>
	</div>

</div></div>
