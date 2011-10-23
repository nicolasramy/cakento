<ul>
	<li class="first item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/application_view_tile.png', array('class' => 'icon', 'alt' => __('Dashboard', true))),
			array('controller' => 'dashboard', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/book.png', array('class' => 'icon', 'alt' => __('Projects', true))),
			array('controller' => 'projects', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/calendar.png', array('class' => 'icon', 'alt' => __('Milestones', true))),
			array('controller' => 'milestones', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/date.png', array('class' => 'icon', 'alt' => __('Tasks', true))),
			array('controller' => 'tasks', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/hourglass.png', array('class' => 'icon', 'alt' => __('Tokens', true))),
			array('controller' => 'tokens', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="last item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/32/group.png', array('class' => 'icon', 'alt' => __('Users', true))),
			array('controller' => 'users', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
</ul>
