<div class="row-fluid"><div class="span12">


	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Product Type'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'product_types', 'action' => 'delete', 'manager' => true),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $attribute['Attribute']['id'])
						);
					?>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('List'),
							array('controller' => 'product_types', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Types'), array('controller' => 'product_types', 'action' => 'index')); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $productType['ProductType']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo __('View'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['id']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['name']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Visible'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['visible']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Searchable'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['searchable']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['created']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['modified']); ?>
					&nbsp;
				</dd>
				<dt><?php echo __('Deleted'); ?></dt>
				<dd>
					<?php echo h($productType['ProductType']['deleted']); ?>
					&nbsp;
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
		<li><?php echo $this->Html->link(__('Edit Product Type'), array('action' => 'edit', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Type'), array('action' => 'delete', $productType['ProductType']['id']), null, __('Are you sure you want to delete # %s?', $productType['ProductType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
