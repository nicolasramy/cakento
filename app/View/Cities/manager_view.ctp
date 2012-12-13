<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('City'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'cities', 'action' => 'delete', 'manager' => true, $city['City']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $city['City']['id'])
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
							array('controller' => 'cities', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'cities', 'action' => 'edit', $city['City']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'cities', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Cities'), array('controller' => 'cities', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $city['City']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('City'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($city['City']['id']); ?>
				</dd>
				<dt><?php echo __('Country'); ?></dt>
				<dd>
					<?php echo $this->Html->link($city['Country']['name'], array('controller' => 'countries', 'action' => 'view', $city['Country']['id'])); ?>
				</dd>
				<dt><?php echo __('State'); ?></dt>
				<dd>
					<?php echo $this->Html->link($city['State']['name'], array('controller' => 'states', 'action' => 'view', $city['State']['id'])); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($city['City']['name']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($city['City']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($city['City']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit City'), array('controller' => 'cities', 'action' => 'edit', $city['City']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete City'), array('controller' => 'cities', 'action' => 'delete', $city['City']['id']), null, __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
