<div class="tasks form">
<?php echo $this->Form->create('Task');?>
	<fieldset>
		<legend><?php echo __('Add Task'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('due');
		echo $this->Form->input('description');
		echo $this->Form->input('assignation');
		echo $this->Form->input('milestone_id');
		echo $this->Form->input('modifed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Milestone'), array('controller' => 'milestones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Token'), array('controller' => 'tokens', 'action' => 'add')); ?> </li>
	</ul>
</div>
