<div class="attributes form">
<?php echo $this->Form->create('Attribute'); ?>
	<fieldset>
		<legend><?php echo __('Manager Add Attribute'); ?></legend>
	<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('searchable');
		echo $this->Form->input('name');
		echo $this->Form->input('deleted');
		echo $this->Form->input('Product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attributes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
