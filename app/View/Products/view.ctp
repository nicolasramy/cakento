<div class="users view">


	<h2><?php echo __('Product'); ?></h2>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View'); ?></li>
	</ul>

	<dl>
		<?php foreach ($product['Info'] as $label => $value) : ?>
		<dt><?php echo h($label); ?></dt>
		<dd>
			<?php echo h($value); ?>
			&nbsp;
		</dd>
		<?php endforeach; ?>
	</dl>
</div>
