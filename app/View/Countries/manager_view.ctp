<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('Country'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'countries', 'action' => 'delete', 'manager' => true, $country['Country']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $country['Country']['id'])
						);
					?>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'countries', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'countries', 'action' => 'edit', $country['Country']['id']),
							array('escape' => false)
						);
					?>
				</button>
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
				<li class="active"><?php echo __('View # ') . $country['Country']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('Country'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($country['Country']['id']); ?>
				</dd>
				<dt><?php echo __('Zone'); ?></dt>
				<dd>
					<?php echo $this->Html->link($country['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $country['Zone']['id'])); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($country['Country']['name']); ?>
				</dd>
				<dt><?php echo __('Iso Code'); ?></dt>
				<dd>
					<?php echo h($country['Country']['iso_code']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($country['Country']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($country['Country']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit Country'), array('controller' => 'countries', 'action' => 'edit', $country['Country']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Country'), array('controller' => 'countries', 'action' => 'delete', $country['Country']['id']), null, __('Are you sure you want to delete # %s?', $country['Country']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
