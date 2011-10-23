<ul>
	<li class="first item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/application.png', array('class' => 'icon', 'alt' => __('Dashboard', true))),
			array('controller' => 'dashboard', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/calendar-blue.png', array('class' => 'icon', 'alt' => __('Calendar', true))),
			array('controller' => 'calendar', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/folder.png', array('class' => 'icon', 'alt' => __('Projects', true))),
			array('controller' => 'projects', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/bookmark.png', array('class' => 'icon', 'alt' => __('Milestones', true))),
			array('controller' => 'milestones', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/sticky-note.png', array('class' => 'icon', 'alt' => __('Tasks', true))),
			array('controller' => 'tasks', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/ticket.png', array('class' => 'icon', 'alt' => __('Tokens', true))),
			array('controller' => 'tokens', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
	<li class="last item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/user.png', array('class' => 'icon', 'alt' => __('Users', true))),
			array('controller' => 'users', 'action' => 'index'),
			array('escape' => false));
		?>
	</li>
</ul>

<ul class="bottom">
	<li class="first item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/equalizer.png', array('class' => 'icon', 'alt' => __('Configuration', true))),
			array('controller' => 'dashboard', 'action' => 'configuration'),
			array('escape' => false));
		?>
	</li>
	<li class="last item">
		<?php echo $this->Html->link(
			$this->Html->image('icons/24/switch.png', array('class' => 'icon', 'alt' => __('LogOut', true))),
			array('controller' => 'users', 'action' => 'logout'),
			array('escape' => false));
		?>
	</li>
</ul>
