<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $title_for_layout; ?></title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<?php echo $this->Html->css(array('style', 'default')); ?>

	<?php echo $this->Html->script(array('jquery-1.6.2.min', 'modernizr-2.0.6.min')); ?>
</head>
<body>


<div id="container">

	<div id="main" role="main">
		<nav>
			<?php echo $this->element('nav'); ?>
		</nav>
		<section>
			<?php echo $content_for_layout; ?>
		</section>
	</div>

</div> <!--! end of #container -->


<!-- scripts concatenated and minified via ant build script-->
<?php
	$__scripts = array
	(
		'jquery.jgrowl_compressed',
		'jquery.wysiwyg',
		'plugins',
		'script'
	);
	echo $this->Html->script($__scripts);
?>
<!-- end scripts-->

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>
