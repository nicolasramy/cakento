<div class="row-fluid"><div class="span12">


	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Product Types'); ?></h2>

			<div class="btn-group">
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
				<li class="active"><?php echo __('Add'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo __('Add'); ?></h3>
			<?php echo $this->Form->create('ProductType'); ?>

			<div class="row-fluid">
				<div class="span6">
					<fieldset>
						<!--<legend><?php echo __('Add'); ?></legend>-->
					<?php
						echo $this->Form->input('name');
					?>
					</fieldset>
				</div>

				<div class="span6">
					<fieldset>
					<?php
						echo $this->Form->input('visible');
						echo $this->Form->input('searchable');
					?>
					</fieldset>
				</div>
			</div>

			<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn')); ?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
