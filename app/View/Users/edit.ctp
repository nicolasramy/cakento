<div class="users form">

	<h2><?php echo __('Users'); ?></h2>

	<ul class="breadcrumb">
	  <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> <span class="divider">/</span></li>
	  <li class="active"><?php echo h('Index'); ?></li>
	</ul>

<?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
