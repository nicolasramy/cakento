<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('User'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'users', 'action' => 'delete', 'manager' => true, $user['User']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $user['User']['id'])
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
							array('controller' => 'users', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'users', 'action' => 'edit', $user['User']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'users', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Dashboard'),array('controller' => 'dashboard', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Configuration'),array('controller' => 'configuration', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Core'),array('controller' => 'core', 'action' => 'index', 'manager' => true));?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $user['User']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('User'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($user['User']['id']); ?>
				</dd>
				<dt><?php echo __('User Group'); ?></dt>
				<dd>
					<?php echo $this->Html->link($user['UserGroup']['name'], array('controller' => 'user_groups', 'action' => 'view', $user['UserGroup']['id'])); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($user['User']['name']); ?>
				</dd>
				<dt><?php echo __('Password'); ?></dt>
				<dd>
					<?php echo h($user['User']['password']); ?>
				</dd>
				<dt><?php echo __('Firstname'); ?></dt>
				<dd>
					<?php echo h($user['User']['firstname']); ?>
				</dd>
				<dt><?php echo __('Lastname'); ?></dt>
				<dd>
					<?php echo h($user['User']['lastname']); ?>
				</dd>
				<dt><?php echo __('Email'); ?></dt>
				<dd>
					<?php echo h($user['User']['email']); ?>
				</dd>
				<dt><?php echo __('Archived'); ?></dt>
				<dd>
					<?php echo h($user['User']['archived']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($user['User']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($user['User']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit User'), array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete User'), array('controller' => 'users', 'action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List User Groups'), array('controller' => 'user_groups', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Group'), array('controller' => 'user_groups', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
