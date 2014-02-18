<div class="row-fluid"><div class="span12">


	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Attributes'); ?></h2>

			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'attributes', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Configuration'), array('controller' => 'configuration', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Products'), array('controller' => 'configuration', 'action' => 'products', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Attributes'), array('controller' => 'attributes', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Add'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo __('Add'); ?></h3>
			<?php echo $this->Form->create('Attribute'); ?>

			<div class="row-fluid">
				<div class="span6">
					<fieldset>
						<?php
							echo $this->Form->input('type', array('type' => 'select', 'options' => $types));
							echo $this->Form->input('name');
						?>
					</fieldset>
				</div>

				<div class="span6">
					<fieldset>
					<?php
						echo $this->Form->input('visible', array('checked' => true));
						echo $this->Form->input('searchable', array('checked' => true));
					?>
					</fieldset>
				</div>
			</div>

			<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn')); ?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('List Attributes'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
