<div class="row-fluid"><div class="span12">


	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Product Types'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn " type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'product_types', 'action' => 'delete', 'manager' => true),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $this->data['ProductType']['id'])
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
							array('controller' => 'product_types', 'action' => 'add', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/magnifier.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('View'))
							) . __('View'),
							array('controller' => 'product_types', 'action' => 'view', 'manager' => true, $this->data['ProductType']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'product_types', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Types'), array('controller' => 'product_types', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Edit # ') . $this->data['ProductType']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo __('Edit'); ?></h3>
			<?php echo $this->Form->create('ProductType'); ?>

			<div class="row-fluid">
				<div class="span6">
					<fieldset>
						<!--<legend><?php echo __('Edit'); ?></legend>-->
					<?php
						echo $this->Form->input('id');
						echo $this->Form->input('name');
					?>
					</fieldset>
				</div>

				<div class="span6">
					<fieldset>
					<?php
						echo $this->Form->input('visible');
						echo $this->Form->input('searchable');
					?>
					</fieldset>
				</div>
			</div>

			<?php
				echo $this->Form->button('Update', array('type' => 'submit', 'class' => 'btn'));
				echo $this->Form->end();
			?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductType.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Product Types'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
