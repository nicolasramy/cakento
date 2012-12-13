<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('Zone'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'zones', 'action' => 'delete', 'manager' => true, $zone['Zone']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $zone['Zone']['id'])
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
							array('controller' => 'zones', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'zones', 'action' => 'edit', $zone['Zone']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'zones', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Zones'), array('controller' => 'zones', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $zone['Zone']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('Zone'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($zone['Zone']['id']); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($zone['Zone']['name']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($zone['Zone']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($zone['Zone']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit Zone'), array('controller' => 'zones', 'action' => 'edit', $zone['Zone']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Zone'), array('controller' => 'zones', 'action' => 'delete', $zone['Zone']['id']), null, __('Are you sure you want to delete # %s?', $zone['Zone']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
