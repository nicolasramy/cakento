<div class="row-fluid">
	<div class="span12">
		
		<div class="row-fluid header">
			<div class="span12">
				<h2><?php echo __('Stores') ?></h2>

				<div class="btn-group">
					<button class="btn" type="button">
						<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
							array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
						array('controller' => 'stores', 'action' => 'index', 'manager' => true),
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
					<li><?php echo $this->Html->link(__('Stores'), array('controller' => 'stores', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
					<li class="active"><?php echo __('Add'); ?></li>
				</ul>
			</div>
		</div>

		<div class="row-fluid">
			<div class="span8">
				<h3><?php echo __('Add'); ?></h3>
				<?php echo $this->Form->create('Store'); ?>
				
				<div class="row-fluid">
					<div class="span6">
						<fieldset>
							<?php 
							echo $this->Form->input('name');
							echo $this->Form->input('status', array('checked' => true, 'label' => __('Online ?')));
							?>
						</fieldset>
					</div>

					<div class="span6">
						<fieldset>
							<?php echo $this->Form->hidden('zone_id'); ?>
							<?php echo $this->Form->input('country_id', array('selected' => '236' , 'onchange' => 'displayState(this.value)')); ?>
							<?php echo $this->Form->input('state_id'); ?>
						</fieldset>
					</div>
				</div>

				<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn')); ?>

			</div>
			<div class="span4 actions">
				<h3><?php echo __('Actions'); ?></h3>
				<ul class="nav nav-pills nav-stacked">
					<li>
					<?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?>
					</li>
					<li>
						<?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> 
					</li>
					<li>
						<?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> 
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>

<script>

$(document).ready(function() {

	var countryId = $('#StoreCountryId option:selected').val();
	displayState(countryId);
});	

function displayState (id) {
	
	var i = 1;
	var html = '';
	$.get('<?php echo $this->Html->url(array('controller' => 'states', 'action' => 'view', 'manager' => false)); ?>/'+id+'.json', function(states) {
		for(key in states) {
			var state = states[key];

			for(s in state) {
				if (state[s] != null) {
					html += '<option value="'+state[s]+'">'+state[s]+'</option>';
					i++;
				}
			}
		}

		$('#StoreStateId').empty().html(html);

	});

}

</script>

