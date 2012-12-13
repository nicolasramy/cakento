<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php  echo __('Payment Gateway'); ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php
						echo $this->Form->postLink($this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => 'paymentGateways', 'action' => 'delete', 'manager' => true, $paymentGateway['PaymentGateway']['id']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', $paymentGateway['PaymentGateway']['id'])
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
							array('controller' => 'paymentGateways', 'action' => 'add'),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => 'paymentGateways', 'action' => 'edit', $paymentGateway['PaymentGateway']['id']),
							array('escape' => false)
						);
					?>
				</button>
				<button class="btn" type="button">
					<?php
						echo $this->Html->link($this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => 'paymentGateways', 'action' => 'index', 'manager' => true),
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
				<li><?php echo $this->Html->link(__('Configuration'), array('controller' => 'configuration', 'action' => 'index')); ?> <span class="divider">/</span></li>
				<li><?php echo $this->Html->link(__('Payment Gateways'), array('controller' => 'paymentGateways', 'action' => 'index', 'manager' => true)); ?> <span class="divider">/</span></li>
				<li class="active"><?php echo __('View # ') . $paymentGateway['PaymentGateway']['id']; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php  echo __('Payment Gateway'); ?></h3>
			<dl>
				<dt><?php echo __('Id'); ?></dt>
				<dd>
					<?php echo h($paymentGateway['PaymentGateway']['id']); ?>
				</dd>
				<dt><?php echo __('Name'); ?></dt>
				<dd>
					<?php echo h($paymentGateway['PaymentGateway']['name']); ?>
				</dd>
				<dt><?php echo __('Created'); ?></dt>
				<dd>
					<?php echo h($paymentGateway['PaymentGateway']['created']); ?>
				</dd>
				<dt><?php echo __('Modified'); ?></dt>
				<dd>
					<?php echo h($paymentGateway['PaymentGateway']['modified']); ?>
				</dd>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Edit Payment Gateway'), array('controller' => 'paymentGateways', 'action' => 'edit', $paymentGateway['PaymentGateway']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Delete Payment Gateway'), array('controller' => 'paymentGateways', 'action' => 'delete', $paymentGateway['PaymentGateway']['id']), null, __('Are you sure you want to delete # %s?', $paymentGateway['PaymentGateway']['id'])); ?> </li>
				<li><?php echo $this->Html->link(__('List Payment Gateways'), array('controller' => 'paymentGateways', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Payment Gateway'), array('controller' => 'paymentGateways', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
				<li><?php echo $this->Html->link(__('List User Payment Profiles'), array('controller' => 'user_payment_profiles', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New User Payment Profile'), array('controller' => 'user_payment_profiles', 'action' => 'add')); ?> </li>
			</ul>
		</div>
	</div>

</div></div>
