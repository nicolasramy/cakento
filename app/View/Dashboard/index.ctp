<header>
<div id="breadcrumbs">
	<?php
		$this->Crumb->addElement('Dashboard', 'dashboard');
		echo $this->Crumb->getHtml();
	?>
</div>
</header>

<article class="dashboard index">
	<h2>
		<?php
			echo $this->Html->image('icons/32/application.png', array('class' => 'icon', 'alt' => __('Dashboard', true)));
			echo __('Dashboard');
		?>
	</h2>

	<h3><?php echo __('Calendar'); ?></h3>



	<h3><?php echo __('Office'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Appointements'), array('controller' => 'appointements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Contacts'), array('controller' => 'customer_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tokens'), array('controller' => 'tokens', 'action' => 'index')); ?> </li>
	</ul>

	<h3><?php echo __('Projects'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Milestones'), array('controller' => 'milestones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
	</ul>

	<h3><?php echo __('Configuration'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Application'), array('controller' => 'configuration', 'action' => 'index')); ?> </li>
	</ul>
</article>
