<div class="users view">

	<header>
		<h1><?php echo __('Products'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Products'), array('controller' => 'products', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View') . ' #' . $product['Product']['entity_id']; ?></li>
	</ul>

	<div class="row-fluid">
		<div class="span12">
			<h2><?php echo $product['Info']['name']; ?></h2>
			<h3><?php echo $product['Info']['sku']; ?></h3>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<?php if (isset($product['Info']['image'])): ?>
				<img src="<?php echo $media_url . 'catalog/product' . $product['Info']['image']; ?>" alt="<?php echo $product['Info']['name']; ?>" />
			<?php endif; ?>
		</div>
		<div class="span6">
			<dl>
				<?php foreach ($product['Info'] as $label => $value) : ?>
				<dt><?php echo h($label); ?></dt>
				<dd>
					<?php echo h($value); ?>
				</dd>
				<?php endforeach; ?>
			</dl>
		</div>
	</div>
</div>
