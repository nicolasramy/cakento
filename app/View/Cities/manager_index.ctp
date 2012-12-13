<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo __('Cities'); ?></h2>

			<div class="btn-group">
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => 'cities', 'action' => 'add', 'manager' => true),
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
				<li class="active"><?php echo __('Cities'); ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php echo $this->Form->create('City', array('class' => 'table')); ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-condensed">
			<thead>
			<tr>
				<th class="icon">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/ui-check-boxes.png',
								array(
									'alt' => 'Checkboxes',
									'class' => 'fugue-icon checkboxes',
									'id' => 'checkboxes-toggler'
								)
							),
							'#checkboxes-toggler',
							array('escape' => false)
						);
					?>
				</th>
				<th class="id"><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('country_id'); ?></th>
				<th><?php echo $this->Paginator->sort('state_id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($cities as $city): ?>
			<tr>
				<td class="icon">
					<?php
						echo $this->Form->input('City.id_' . $city['City']['id'],
							array('type' => 'checkbox', 'label' => '', 'value' => $city['City']['id'])
						);
					?>
				</td>
				<td class="id"><?php echo h($city['City']['id']); ?></td>
				<td>
					<?php echo $this->Html->link($city['Country']['name'], array('controller' => 'countries', 'action' => 'view', $city['Country']['id'])); ?>
					</td>
				<td>
					<?php echo $this->Html->link($city['State']['name'], array('controller' => 'states', 'action' => 'view', $city['State']['id'])); ?>
					</td>
				<td><?php echo h($city['City']['name']); ?></td>
				<td class="actions">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document.png',
								array('class' => 'fugue-icon', 'alt' => __('View'))
							),
							array('controller' => 'cities', 'action' => 'view', $city['City']['id']),
							array('escape' => false)
						);
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-center', 'alt' => __('Edit'))
							),
							array('controller' => 'cities', 'action' => 'edit', $city['City']['id']),
							array('escape' => false)
						);
						echo $this->Form->postLink($this->Html->image('fugue-icons/document--minus.png',
								array('class' => 'fugue-icon', 'alt' => __('Delete'))
							),
							array('controller' => 'cities', 'action' => 'delete', $city['City']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $city['City']['id'])
						);
					?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>

			<?php
				echo $this->Form->button('Update', array('type' => 'submit', 'class' => 'btn pull-right'));
				echo $this->Form->input('City.action',
					array(
						'label' => '',
						'type' => 'select',
						'options' => array(
							''
						)
					)
				);
				echo $this->Html->script('index-checkboxes');
				echo $this->Form->end();
			?>

			<?php echo $this->Html->script('index-checkboxes'); ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<?php echo $this->Paginator->counter(array('format' => __('{:page} / {:pages}'))); ?>
		</div>
		<div class="span6 align-right">
			<?php echo $this->Paginator->counter(array('format' => __('{:end} items'))); ?>
		</div>
	</div>

	<div class="row-fluid pagination">
		<div class="span12 align-center">
			<ul>
				<?php
					echo $this->Paginator->prev('«', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
					echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'number active'));
					echo $this->Paginator->next('»', array('tag' => 'li'), null, array('tag'=>'li', 'class' => 'next disabled'));
				?>
			</ul>
			<?php echo $this->Html->script('bootstrap-cake-pagination'); ?>
		</div>
	</div>

</div></div>
