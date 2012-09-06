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
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');

	?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="navbar-inner">
			<a class="brand" href="http://darkelda.portfolio"><?php Configure::read('App.name'); ?></a>
			<ul class="nav">
				<li><a href="http://darkelda.portfolio">Accueil</a></li>
			</ul>
		</div>
	</div>
	<div class="container">

	<!-- Header container -->
	<div class="row-fluid">
		<div class="span12">


			<div class="logo">
				<a href="http://darkelda.portfolio"><img src="http://darkelda.portfolio/wp-content/themes/darkelda_portfolio/images/logo.png" alt="darkelda portfolio"></a>
			</div>
			<h1><a href="http://darkelda.portfolio">darkelda portfolio</a></h1>
			<h2>A French Web Engineer Portfolio</h2>
		</div>
	</div>

	<!-- Main container -->
	<div class="container">
		<div class="row-fluid">
			<?php echo $this->fetch('content'); ?>

		</div>

  <footer>
                    <!-- <h4>Hey! You!</h4>
          <p>You should like, so test out this dynamic footer sidebar. Check it out in Appearance > Widgets!</p> -->
            </footer>
</div>

	<div id="scripts">
		<?php echo $this->fetch('script'); ?>
	</div>
</body>
</html>
