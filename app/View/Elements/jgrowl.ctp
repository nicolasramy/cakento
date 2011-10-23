<?php if (isset($message)) : ?>
<script type="text/javascript">
	$.jGrowl("<?php echo $message; ?>", { header:"Notice :", glue:'before' });
</script>
<?php endif; ?>
