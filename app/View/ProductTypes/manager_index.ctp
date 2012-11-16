<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Product Types'); ?></h2>

			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'product_types', 'action' => 'add', 'manager' => true),
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
				<li class="active"><?php echo __('Types'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->create('ProductType'); ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-condensed">
			<thead>
				<tr>
				<th class="icon">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/ui-check-boxes.png',
								array(
									'alt' => 'Checkboxes',
									'class' => 'fugue-icon checkboxes',
									'id' => 'checkboxes-toggler'
								)
							),
							'#checkboxes-toggler',
							array('escape' => false)
						);
					?>
				</th>
					<th class="id"><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('name'); ?></th>
					<th class="icon"><?php echo $this->Paginator->sort('visible'); ?></th>
					<th class="icon"><?php echo $this->Paginator->sort('searchable'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($productTypes as $productType): ?>
				<tr>
					<td class="icon">
						<?php
							echo $this->Form->input('ProductType.id_' . $productType['ProductType']['id'],
								array('type' => 'checkbox', 'label' => '', 'value' => $productType['ProductType']['id'])
							);
						?>
					</td>
					<td class="id"><?php echo h($productType['ProductType']['id']); ?>&nbsp;</td>
					<td><?php echo h($productType['ProductType']['name']); ?>&nbsp;</td>
					<td class="icon">
						<?php
							echo $this->Html->image('fugue-icons/eye' . ($productType['ProductType']['visible'] ? '' : '-grayscale') . '.png',
								array('class' => 'fugue-icon', 'alt' => __('Visible'))
							);
						?>
					</td>
					<td class="icon">
						<?php
							echo $this->Html->image('fugue-icons/magnifier-zoom' . ($productType['ProductType']['searchable'] ? '' : '-grayscale') . '.png',
								array('class' => 'fugue-icon', 'alt' => __('Searchable'))
							);
						?>
					</td>
					<td class="actions">
						<?php
							echo $this->Html->link($this->Html->image('fugue-icons/document.png',
									array('class' => 'fugue-icon', 'alt' => __('View'))
								),
								array('controller' => 'product_types', 'action' => 'view', $productType['ProductType']['id']),
								array('escape' => false)
							);

							echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
									array('class' => 'fugue-icon fugue-icon-push-center', 'alt' => __('Edit'))
								),
								array('controller' => 'product_types', 'action' => 'edit', $productType['ProductType']['id']),
								array('escape' => false)
							);

							echo $this->Form->postLink($this->Html->image('fugue-icons/document--minus.png',
									array('class' => 'fugue-icon', 'alt' => __('Delete'))
								),
								array('controller' => 'product_types', 'action' => 'delete', $productType['ProductType']['id']),
								array('escape' => false),
								__('Are you sure you want to delete # %s?', $productType['ProductType']['id'])
							);
						?>
					</td>
				</tr>
			<?php endforeach; ?>
			<tbody>
			</table>

			<?php
				echo $this->Form->button('Update', array('type' => 'submit', 'class' => 'btn pull-right'));
				echo $this->Form->input('ProductType.action',
					array(
						'label' => '',
						'type' => 'select',
						'options' => array(
							'',
							__('Visibility') => array(
								'visible' => __('Visible'),
								'invisible' => __('Invisible')
							),
							__('Search') => array(
								'searchable' => __('Searchable'),
								'unsearchable' => __('Unsearchable')
							)
						)
					)
				);
				echo $this->Html->script('index-checkboxes');
				echo $this->Form->end();
			?>

			<?php echo $this->Html->script('index-checkboxes'); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<p>
				<?php echo $this->Paginator->counter(array('format' => __('{:page} / {:pages}'))); ?>
			</p>
		</div>
		<div class="span6">
			<p class="align-right">
				<?php echo $this->Paginator->counter(array('format' => __('{:end} items'))); ?>
			</p>
		</div>
	</div>

	<div class="row-fluid pagination">
		<div class="span12 align-center">
			<ul>
				<?php
					echo $this->Paginator->prev('«', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'number active'));
					echo $this->Paginator->next('»', array('tag' => 'li'), null, array('tag'=>'li', 'class' => 'next disabled'));
				?>
			</ul>
			<?php echo $this->Html->script('bootstrap-cake-pagination'); ?>
		</div>
	</div>

</div></div>
