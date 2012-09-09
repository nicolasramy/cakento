<div class="invoices view">

	<header>
		<h1><?php echo __('Invoices'); ?></h1>
	</header>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li><?php echo $this->Html->link(__('Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('View') . ' #' . $invoice['Invoice']['entity_id']; ?></li>
	</ul>

	<div class="row-fluid">
		<div class="span12">
			<h2><?php echo ucwords($invoice['Invoice']['billing_name']); ?></h2>
			<h3><?php echo $invoice['Invoice']['state']; ?></h3>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<h4><?php echo __('Informations'); ?></h4>
				<?php var_dump($invoice); ?>
		</div>
	</div>
</div>