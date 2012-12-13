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
			<h2><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h2>

			<div class="btn-group pull-right">
				<button class="btn" type="button">
					<?php echo "<?php
						echo \$this->Form->postLink(\$this->Html->image('fugue-icons/cross-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Delete'))
							) . __('Delete'),
							array('controller' => '{$pluralVar}', 'action' => 'delete', 'manager' => true, \${$singularVar}['{$modelClass}']['{$primaryKey}']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])
						);
					?>\n"; ?>
				</button>
			</div>

			<div class="btn-group pull-left">
				<button class="btn" type="button">
					<?php echo"<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => '{$pluralVar}', 'action' => 'add'),
							array('escape' => false)
						);
					?>\n";?>
				</button>
				<button class="btn" type="button">
					<?php echo "<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Edit'))
							) . __('Edit'),
							array('controller' => '{$pluralVar}', 'action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),
							array('escape' => false)
						);
					?>\n"; ?>
				</button>
				<button class="btn" type="button">
					<?php echo "<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/documents-stack.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Index'))
							) . __('Index'),
							array('controller' => '{$pluralVar}', 'action' => 'index', 'manager' => true),
							array('escape' => false)
						);
					?>\n"; ?>
				</button>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<ul class="breadcrumb">
				<li>
				<?php
					echo "\t<?php
						echo \$this->Html->link(
							__('Dashboard'),
							array(
								'controller' => 'dashboard',
								'action' => 'index',
								'manager' => true
							)
						);
					?>";
				?> <span class="divider">/</span>
				</li>
				<li><?php echo "<?php echo \$this->Html->link(__('{$pluralHumanName}'), array('controller' => '{$pluralVar}', 'action' => 'index', 'manager' => true)); ?> <span class=\"divider\">/</span>"; ?></li>
				<?php echo "<li class=\"active\"><?php echo __('View # ') . \${$singularVar}['{$modelClass}']['{$primaryKey}']; ?></li>\n"; ?>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span8">
			<h3><?php echo "<?php  echo __('{$singularHumanName}'); ?>"; ?></h3>
			<dl>
<?php
foreach ($fields as $field) {
	$isKey = false;
	if (!empty($associations['belongsTo'])) {
		foreach ($associations['belongsTo'] as $alias => $details) {
			if ($field === $details['foreignKey']) {
				$isKey = true;
				echo "\t\t\t\t<dt><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></dt>\n";
				echo "\t\t\t\t<dd>\n\t\t\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t\t</dd>\n";
				break;
			}
		}
	}
	if ($isKey !== true) {
		echo "\t\t\t\t<dt><?php echo __('" . Inflector::humanize($field) . "'); ?></dt>\n";
		echo "\t\t\t\t<dd>\n\t\t\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t\t</dd>\n";
	}
}
?>
			</dl>
		</div>
		<div class="span4 actions">
			<h3><?php echo "<?php echo __('Actions'); ?>"; ?></h3>
			<ul class="nav nav-pills nav-stacked">
<?php
	echo "\t\t\t\t<li><?php echo \$this->Html->link(__('Edit " . $singularHumanName ."'), array('controller' => '{$pluralVar}', 'action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t\t\t<li><?php echo \$this->Form->postLink(__('Delete " . $singularHumanName . "'), array('controller' => '{$pluralVar}', 'action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), null, __('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
	echo "\t\t\t\t<li><?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('controller' => '{$pluralVar}', 'action' => 'index')); ?> </li>\n";
	echo "\t\t\t\t<li><?php echo \$this->Html->link(__('New " . $singularHumanName . "'), array('controller' => '{$pluralVar}', 'action' => 'add')); ?> </li>\n";

	$done = array();
	foreach ($associations as $type => $data) {
		foreach ($data as $alias => $details) {
			if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
				echo "\t\t\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
				echo "\t\t\t\t<li><?php echo \$this->Html->link(__('New " .  Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
				$done[] = $details['controller'];
			}
		}
	}
?>
			</ul>
		</div>
	</div>

</div></div>
