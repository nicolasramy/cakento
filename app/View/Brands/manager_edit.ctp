<div class="row-fluid"><div class="span12">


	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Brands'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'brands', 'action' => 'delete', 'manager' => true, $this->data['Brand']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $this->data['Brand']['id'])
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
							array('controller' => 'brands', 'action' => 'add', 'manager' => true),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/magnifier.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('View'))
							) . __('View'),
							array('controller' => 'brands', 'action' => 'view', 'manager' => true, $this->data['Brand']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'brands', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Catalog'), array('controller' => 'configuration', 'action' => 'catalog', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Brands'), array('controller' => 'brands', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('Edit # ') . $this->request->data['Brand']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo __('Edit'); ?></h3>
			<?php echo $this->Form->create('Brand'); ?>

			<div class="row-fluid">
				<div class="span6">
					<fieldset>
						<?php
							echo $this->Form->input('id');
							echo $this->Form->input('store_id');
							echo $this->Form->input('name');
						?>
					</fieldset>
				</div>

				<div class="span6">
					<fieldset>
					<?php
						echo $this->Form->input('visible', array('checked' => true));
						echo $this->Form->input('searchable', array('checked' => true));
						echo $this->Form->input('short_description');
					?>
					</fieldset>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span12">
					<?php
						echo $this->Form->input('description');
					?>
					</fieldset>
				</div>
			</div>

			<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn')); ?>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Brand.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Brand.id'))); ?></li>
				<li><?php echo $this->Html->link(__('List Brands'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
