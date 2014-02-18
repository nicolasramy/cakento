<div class="row-fluid">
	<div class="span12">
		
		<div class="row-fluid header">
			<div class="span12">
				<h2><?php echo __('Categories'); ?></h2>

				<div class="btn-group">
					<button class="btn" type="button">
						<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
							array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
						array('controller' => 'categories', 'action' => 'add', 'manager' => true),
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
					<li>
						<?php echo $this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)) ?>
						<span class="divider">/</span>
					</li>
					<li>
						<?php echo $this->Html->link(__('Configuration'), array('controller' => 'dashboard', 'action' => 'configuration', 'manager' => true)) ?>
						<span class="divider">/</span>
					</li>
					<li class="active"><?php echo __('Categories') ?></li>
				</ul>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">	
				<?php echo $this->Tree->generate($categories, array('element' => 'Manager/categories_index'));  ?>
			</div>
		</div>

		

	</div>
</div>
