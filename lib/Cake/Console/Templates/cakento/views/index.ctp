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

			<div class="btn-group">
				<button class="btn" type="button">
					<?php echo "<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/plus-button.png',
								array('class' => 'fugue-icon fugue-icon-push-right', 'alt' => __('Add'))
							) . __('Add'),
							array('controller' => '{$pluralVar}', 'action' => 'add', 'manager' => true),
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
				?> <span class="divider">/</span></li>
				<li class="active"><?php echo "<?php echo __('{$pluralHumanName}'); ?>"; ?></li>
			</ul>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<?php echo "<?php echo \$this->Form->create('Attribute', array('class' => 'table')); ?>\n"; ?>
			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-condensed">
			<thead>
			<tr>
				<?php
					echo "<th class=\"icon\">\n\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/ui-check-boxes.png',
								array(
									'alt' => 'Checkboxes',
									'class' => 'fugue-icon checkboxes',
									'id' => 'checkboxes-toggler'
								)
							),
							'#checkboxes-toggler',
							array('escape' => false)
						);
					?>\n\t\t\t\t</th>\n";

					foreach ($fields as $field) {
						switch ($field) {
							case 'id':
								echo "\t\t\t\t<th class=\"id\"><?php echo \$this->Paginator->sort('{$field}'); ?></th>\n";
								break;

							case 'visible':
							case 'searchable':
							case 'salable':
							case 'status':
								echo "\t\t\t\t<th class=\"icon\"><?php echo \$this->Paginator->sort('{$field}'); ?></th>\n";
								break;

							case 'created':
							case 'modified':
							case 'deleted':
								echo "\t\t\t\t<th class=\"datetime\"><?php echo \$this->Paginator->sort('{$field}'); ?></th>\n";
								break;

							default:
								echo "\t\t\t\t<th><?php echo \$this->Paginator->sort('{$field}'); ?></th>\n";
								break;
						}
					}
					echo "\t\t\t\t<th class=\"actions\"><?php echo __('Actions'); ?></th>\n";
				?>
			</tr>
			</thead>
			<tbody>
			<?php
				echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
				echo "\t\t\t<tr>\n";
					foreach ($fields as $field) {
						$isKey = false;
						if (!empty($associations['belongsTo'])) {
							foreach ($associations['belongsTo'] as $alias => $details) {
								if ($field === $details['foreignKey']) {
									$isKey = true;
									echo "\t\t\t\t<td>\n\t\t\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t\t\t</td>\n";
									break;
								}
							}
						}
						if ($isKey !== true) {
							switch ($field) {
								case 'visible':

									break;

								default:
									echo "\t\t\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?></td>\n";
									break;
							}

						}
					}

					echo "\t\t\t\t<td class=\"actions\">\n";
					echo "\t\t\t\t\t<?php
						echo \$this->Html->link(\$this->Html->image('fugue-icons/document.png',
								array('class' => 'fugue-icon', 'alt' => __('View'))
							),
							array('controller' => '{$pluralVar}', 'action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),
							array('escape' => false)
						);\n";

					echo "\t\t\t\t\t\t\techo \$this->Html->link(\$this->Html->image('fugue-icons/document--pencil.png',
								array('class' => 'fugue-icon fugue-icon-push-center', 'alt' => __('Edit'))
							),
							array('controller' => '{$pluralVar}', 'action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),
							array('escape' => false)
						);\n";

					echo "\t\t\t\t\t\t\techo \$this->Form->postLink(\$this->Html->image('fugue-icons/document--minus.png',
								array('class' => 'fugue-icon', 'alt' => __('Delete'))
							),
							array('controller' => '{$pluralVar}', 'action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']),
							array('escape' => false),
							__('Are you sure you want to delete # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])
						);\n\t\t\t\t\t?>\n";
					echo "\t\t\t\t</td>\n";
				echo "\t\t\t</tr>\n";
				echo "\t\t\t<?php endforeach; ?>\n";
			?>
			</tbody>
			</table>

			<?php echo "<?php
				echo \$this->Form->button('Update', array('type' => 'submit', 'class' => 'btn pull-right'));
				echo \$this->Form->input('Attribute.action',
					array(
						'label' => '',
						'type' => 'select',
						'options' => array(
							'',
							__('Visibility') => array(
								'visible' => __('Visible'),
								'invisible' => __('Invisible')
							),
							__('Search') => array(
								'searchable' => __('Searchable'),
								'unsearchable' => __('Unsearchable')
							)
						)
					)
				);
				echo \$this->Html->script('index-checkboxes');
				echo \$this->Form->end();
			?>\n"; ?>

			<?php echo "<?php echo \$this->Html->script('index-checkboxes'); ?>\n"; ?>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span6">
			<?php echo "<?php echo \$this->Paginator->counter(array('format' => __('{:page} / {:pages}'))); ?>\n"; ?>
		</div>
		<div class="span6 align-right">
			<?php echo "<?php echo \$this->Paginator->counter(array('format' => __('{:end} items'))); ?>\n"; ?>
		</div>
	</div>

	<div class="row-fluid pagination">
		<div class="span12 align-center">
			<ul>
				<?php echo "<?php
					echo \$this->Paginator->prev('«', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'prev disabled'));
					echo \$this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'number active'));
					echo \$this->Paginator->next('»', array('tag' => 'li'), null, array('tag'=>'li', 'class' => 'next disabled'));
				?>\n"; ?>
			</ul>
			<?php echo "<?php echo \$this->Html->script('bootstrap-cake-pagination'); ?>\n"; ?>
		</div>
	</div>

</div></div>
