
<h4>
	<a href="<?php echo $this->Html->url(array('controller' => 'categories', 'action' => 'view', $data['Category']['slug'], 'manager' => false)); ?>">
		<?php echo $data['Category']['name']; ?>
	</a> -
	<?php
	echo $this->Html->link($this->Html->image(
		'fugue-icons/arrow-090-medium.png',
		array(
			'class' => 'fugue-icon fugue-icon-push-center', 
			'alt' => __('Move up'))
		),
		array(
			'controller' => 'categories', 
			'action' => 'moveUp', 
			$data['Category']['id']
		),
		array('escape' => false)
	);
	echo $this->Html->link($this->Html->image(
		'fugue-icons/arrow-270-medium.png',
		array(
			'class' => 'fugue-icon fugue-icon-push-center', 
			'alt' => __('Move down'))
		),
		array(
			'controller' => 'categories', 
			'action' => 'moveDown', 
			$data['Category']['id']
		),
		array('escape' => false)
	);

	echo $this->Html->link($this->Html->image(
		'fugue-icons/document.png',
		array(
			'class' => 'fugue-icon', 
			'alt' => __('View'))
		),
		array(
			'controller' => 'categories', 
			'action' => 'view', 
			$data['Category']['id']
		),
		array('escape' => false)
	);

	echo $this->Html->link($this->Html->image(
		'fugue-icons/document--pencil.png',
		array(
			'class' => 'fugue-icon fugue-icon-push-center', 
			'alt' => __('Edit'))
		),
		array(
			'controller' => 'categories', 
			'action' => 'edit', 
			$data['Category']['id']
		),
		array('escape' => false)
	);

	echo $this->Form->postLink($this->Html->image(
		'fugue-icons/document--minus.png',
		array(
			'class' => 'fugue-icon', 
			'alt' => __('Delete'))
		),
		array(
			'controller' => 'categories', 
			'action' => 'delete', 
			$data['Category']['id']
		),
		array(
			'escape' => false
		),
		__('Are you sure you want to delete # %s?', $data['Category']['id'])
	);
	?> 
</h4>