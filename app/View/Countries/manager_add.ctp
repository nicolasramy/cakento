<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Countries'); ?></h2>


			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'countries', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Localisation'), array('controller' => 'localisation', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Countries'), array('controller' => 'countries', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Add'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
		<?php echo $this->Form->create('Country'); ?>
		<?php
			echo $this->Form->input('zone_id');
			echo $this->Form->input('name');
			echo $this->Form->input('iso_code');
		?>

		<?php
			echo $this->Form->button('Add', array('type' => 'submit', 'class' => 'btn'));
			echo $this->Form->end();
		?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('List Countries'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>

</div></div>
