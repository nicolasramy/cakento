<div class="row-fluid">
	<div class="span12">

		<div class="row-fluid header">
			<div class="span12">

				<h2><?php echo __('Stores'); ?></h2>

				<button class="btn" type="button">
					<?php 
					echo $this->Html->link($this->Html->image('fugue-icons/plus-button.png',
						array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add')) 
						) . __('Add'),
					array('controller' => 'stores', 'action' => 'add', 'manager' => true),
					array('escape' => false)
					);
					?>
				</button>

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
					<li class="active"><?php echo __('Stores') ?></li>
				</ul>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span12">
				<table class="table table-striped table-hover table-condensed">
					<thead>
						<tr>
							<th class="icon">
								<?php 
								echo $this->Html->link($this->Html->image('fugue-icons/ui-check-boxes.png',
									array(
										'alt' 	=> 'Checkboxes',
										'class' => 'fugue-icon checkboxes',
										'id' 	=> 'checkboxes-toggler' 
										)
									),
								'#checkboxes-toggler',
								array('escape' => false)
								);
								?>
							</th>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('zone_id'); ?></th>
							<th><?php echo $this->Paginator->sort('country_id'); ?></th>
							<th><?php echo $this->Paginator->sort('state_id'); ?></th>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('status'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($stores as $store): ?>
							<tr>
								<td class="icon">
									<?php
									echo $this->Form->input('Store.id_' . $store['Store']['id'], array('type' => 'checkbox', 'label' => '', 'value' => $store['Store']['id']));
									?>
								</td>
								<td><?php echo h($store['Store']['id']); ?></td>
								<td>
									<?php echo $this->Html->link($store['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $store['Zone']['id'])); ?>
								</td>
								<td><?php echo h($store['Country']['name']); ?></td>
								<td><?php echo h($store['State']['name']); ?></td>
								<td><?php echo h($store['Store']['name']); ?></td>
								<td><?php echo h($store['Store']['status']); ?></td>
								<td><?php echo h($store['Store']['created']); ?></td>
								<td><?php echo h($store['Store']['modified']); ?></td>
								<td class="actions">
									<?php
									echo $this->Html->link($this->Html->image('fugue-icons/document.png',
										array('class' => 'fugue-icon', 'alt' => __('View'))
										),
									array('controller' => 'stores', 'action' => 'view', $store['Store']['id']),
									array('escape' => false)
									);

									echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
										array('class' => 'fugue-icon fugue-icon-push-center', 'alt' => __('Edit'))
										),
									array('controller' => 'stores', 'action' => 'edit', $store['Store']['id']),
									array('escape' => false)
									);

									echo $this->Form->postLink($this->Html->image('fugue-icons/document--minus.png',
										array('class' => 'fugue-icon', 'alt' => __('Delete'))
										),
									array('controller' => 'stores', 'action' => 'delete', $store['Store']['id']),
									array('escape' => false),
									__('Are you sure you want to delete # %s?', $store['Store']['id'])
									);
									?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>