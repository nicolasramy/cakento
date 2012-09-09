<div class="orders view">

	<header>
		<h1><?php echo __('Orders'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Orders'), array('controller' => 'orders', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View') . ' #' . $order['Order']['entity_id']; ?></li>
	</ul>

	<div class="row-fluid">
		<div class="span12">
			<h2><?php echo ucwords($order['Order']['billing_name']) ; ?></h2>
			<h3><?php echo $order['Order']['customer_email']; ?></h3>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<h4><?php echo __('Informations'); ?></h4>
			<?php var_dump($order); ?>

		</div>

	</div>
</div>