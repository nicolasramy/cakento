<div class="row-fluid">
	<div class="span12">

		<div class="row-fluid header">
			<div class="span12">

				<h2><?php echo __('Products'); ?></h2>

				<button class="btn" type="button">
					<?php 
					echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
						array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add')) 
						) . __('Add'),
					array('controller' => 'products', 'action' => 'add', 'manager' => true),
					array('escape' => false)
					);
					?>
				</button>

			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<ul class="breadcrumb">
					<li>
						<?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)) ?>
						<span class="divider">/</span>
					</li>
					<li>
						<?php echo $this->Html->link(__('Catalog'), array('controller' => 'dashboard', 'action' => 'catalog', 'manager' => true)) ?>
						<span class="divider">/</span>
					</li>
					<li class="active"><?php echo __('Products') ?></li>
				</ul>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<table class="table table-striped table-hover table-condensed">
					<thead>
						<tr>
							<th class="icon">
								<?php 
								echo $this->Html->link($this->Html->image('fugue-icons/ui-check-boxes.png',
									array(
										'alt' 	=> 'Checkboxes',
										'class' => 'fugue-icon checkboxes',
										'id' 	=> 'checkboxes-toggler' 
										)
									),
								'#checkboxes-toggler',
								array('escape' => false)
								);
								?>
							</th>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('store_id'); ?></th>
							<th><?php echo $this->Paginator->sort('product_type_id'); ?></th>
							<th><?php echo $this->Paginator->sort('manufacturer_id'); ?></th>
							<th><?php echo $this->Paginator->sort('salable'); ?></th>
							<th class="icon"><?php echo $this->Paginator->sort('visible'); ?></th>
							<th class="icon"><?php echo $this->Paginator->sort('searchable'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('sku'); ?></th>
							<th><?php echo $this->Paginator->sort('price'); ?></th>
							<th><?php echo $this->Paginator->sort('weight'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th><?php echo $this->Paginator->sort('deleted'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product): ?>
							<tr>
								<td class="icon">
									<?php
									echo $this->Form->input('Product.id_' . $product['Product']['id'], array('type' => 'checkbox', 'label' => '', 'value' => $product['Product']['id']));
									?>
								</td>
								<td><?php echo h($product['Product']['id']); ?></td>
								<td>
									<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
								</td>
								<td>
									<?php echo $this->Html->link($product['ProductType']['name'], array('controller' => 'product_types', 'action' => 'view', $product['ProductType']['id'])); ?>
								</td>
								<td>
									<?php echo $this->Html->link($product['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $product['Manufacturer']['id'])); ?>
								</td>
								<td><?php echo h($product['Product']['salable']); ?></td>
								<td class="icon">
									<?php
									echo $this->Html->image('fugue-icons/eye' . ($brand['Brand']['visible'] ? '' : '-grayscale') . '.png',array('class' => 'fugue-icon', 'alt' => __('Visible')));
									?>
								</td>
								<td class="icon">
									<?php
									echo $this->Html->image('fugue-icons/magnifier-zoom' . ($brand['Brand']['searchable'] ? '' : '-grayscale') . '.png', array('class' => 'fugue-icon', 'alt' => __('Searchable')));
									?>
								</td>
								<td><?php echo h($product['Product']['name']); ?></td>
								<td><?php echo h($product['Product']['sku']); ?></td>
								<td><?php echo h($product['Product']['price']); ?></td>
								<td><?php echo h($product['Product']['weight']); ?></td>
								<td><?php echo h($product['Product']['created']); ?></td>
								<td><?php echo h($product['Product']['modified']); ?></td>
								<td><?php echo h($product['Product']['deleted']); ?></td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $product['Product']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $product['Product']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
								</td>
							</tr>
						<?php endforeach ?>

					</tbody>
				</table>
			</div>
		</div>

		<div class="row-fluid pagination">
			<div class="span12 align-center">

				<ul>
					<?php 
					echo $this->Paginator->prev('«', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'number active'));
					echo $this->Paginator->next('»', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'next disabled'));
					?>
				</ul>
				<?php echo $this->Html->script('bootstrap-cake-pagination'); ?>
			</div>

		</div>

	</div>
</div>