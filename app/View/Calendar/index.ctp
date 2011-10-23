<header>
<div id="breadcrumbs">
	<?php
		$this->Crumb->addElement('Dashboard', 'dashboard');
		$this->Crumb->addElement('Calendar');
		echo $this->Crumb->getHtml();
	?>
</div>
</header>

<article class="calendar index">
	<h2><?php echo __('Calendar');?></h2>


</article>
