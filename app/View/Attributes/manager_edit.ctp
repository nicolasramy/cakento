<div class="attributes form">
<?php echo $this->Form->create('Attribute'); ?>
	<fieldset>
		<legend><?php echo __('Manager Edit Attribute'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
