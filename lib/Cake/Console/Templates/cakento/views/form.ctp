<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="row-fluid"><div class="span12">

	<div class="row-fluid header">
		<div class="span12">
			<h2><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></h2>

		<?php
			if (strpos($action, 'edit') !== false) {
				echo "\t<div class=\"btn-group pull-right\">\n";
				echo "\t\t\t\t<button class=\"btn\" type=\"button\">\n";
				echo "\t\t\t\t\t<?php
						echo \$this->Form->postLink(\$this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => '{$pluralVar}', 'action' => 'delete', 'manager' => true, \$this->data['{$modelClass}']['{$primaryKey}']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', \$this->data['{$modelClass}']['{$primaryKey}'])
						);
					?>\n";
				echo "\t\t\t\t</button>\n";
				echo "\t\t\t</div>";
			}
		?>

		<?php
			if (strpos($action, 'edit') !== false) {
				echo "\t<div class=\"btn-group pull-left\">\n";

				// Edit
				echo "\t\t\t\t<button class=\"btn\" type=\"button\">\n";
				echo "\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => '{$pluralVar}', 'action' => 'add', 'manager' => true),
							array('escape' => false)
						);
					?>\n";
				echo "\t\t\t\t</button>\n";

				// View
				echo "\t\t\t\t<button class=\"btn\" type=\"button\">\n";
				echo "\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/magnifier.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('View'))
							) . __('View'),
							array('controller' => '{$pluralVar}', 'action' => 'view', 'manager' => true, \$this->data['{$modelClass}']['{$primaryKey}']),
							array('escape' => false)
						);
					?>\n";
				echo "\t\t\t\t</button>\n";

				// Index
				echo "\t\t\t\t<button class=\"btn\" type=\"button\">\n";
				echo "\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => '{$pluralVar}', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>\n";
				echo "\t\t\t\t</button>\n";
				echo "\t\t\t</div>\n";
			} else {
				echo "\t<div class=\"btn-group\">\n";

				// Index
				echo "\t\t\t\t<button class=\"btn\" type=\"button\">\n";
				echo "\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => '{$pluralVar}', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>\n";
				echo "\t\t\t\t</button>\n";
				echo "\t\t\t</div>\n";
			}
		?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li><?php echo "<?php echo \$this->Html->link(__('Dashboard'), array('controller' => 'dashboard', 'action' => 'index', 'manager' => true)); ?> <span class=\"divider\">/</span>"; ?></li>
				<?php
					if (strpos($action, 'edit') !== false) {
						echo "<li class=\"active\"><?php echo __('Edit # ') . \$this->data['{$modelClass}']['{$primaryKey}']; ?></li>\n";
					} else {
						echo "<li class=\"active\"><?php echo __('Add'); ?></li>\n";
					}
				?>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
		<?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
		<?php
			echo "<?php\n";
			foreach ($fields as $field) {
				if (strpos($action, 'add') !== false && $field == $primaryKey) {
					continue;
				} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
					echo "\t\t\techo \$this->Form->input('{$field}');\n";
				}
			}
			if (!empty($associations['hasAndBelongsToMany'])) {
				foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
					echo "\t\t\techo \$this->Form->input('{$assocName}');\n";
				}
			}
			echo "\t\t?>\n";
		?>

		<?php
			if (strpos($action, 'edit') !== false) {
				echo "<?php
			echo \$this->Form->button('Update', array('type' => 'submit', 'class' => 'btn'));
			echo \$this->Form->end();
		?>\n";
			} else {
				echo "<?php
			echo \$this->Form->button('Add', array('type' => 'submit', 'class' => 'btn'));
			echo \$this->Form->end();
		?>\n";
			}
		?>
		</div>
		<div class="span4 actions">
			<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
			<ul>
		<?php if (strpos($action, 'add') === false): ?>
		<li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), null, __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?></li>
		<?php endif; ?>
		<li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
	<?php
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
					echo "<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
					$done[] = $details['controller'];
				}
			}
		}
	?>
		</ul>
		</div>
	</div>

</div></div>
