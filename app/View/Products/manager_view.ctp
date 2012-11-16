<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Store']['name'], array('controller' => 'stores', 'action' => 'view', $product['Store']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['ProductType']['name'], array('controller' => 'product_types', 'action' => 'view', $product['ProductType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manufacturer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $product['Manufacturer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salable'); ?></dt>
		<dd>
			<?php echo h($product['Product']['salable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($product['Product']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Searchable'); ?></dt>
		<dd>
			<?php echo h($product['Product']['searchable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($product['Product']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('controller' => 'product_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('controller' => 'product_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Manufacturers'), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manufacturer'), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Categories'), array('controller' => 'product_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category'), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Product Categories'); ?></h3>
	<?php if (!empty($product['ProductCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['ProductCategory'] as $productCategory): ?>
		<tr>
			<td><?php echo $productCategory['id']; ?></td>
			<td><?php echo $productCategory['category_id']; ?></td>
			<td><?php echo $productCategory['product_id']; ?></td>
			<td><?php echo $productCategory['created']; ?></td>
			<td><?php echo $productCategory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'product_categories', 'action' => 'view', $productCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'product_categories', 'action' => 'edit', $productCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'product_categories', 'action' => 'delete', $productCategory['id']), null, __('Are you sure you want to delete # %s?', $productCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Category'), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
