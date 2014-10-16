	<div id="terms">
		<p><?php echo $terms . " " . $workorder."_".$author_initials."_".$publish_date; ?></p>	
	</div>
</div> <!-- #wrapper -->

	<?php include('../../inc/main_right.inc'); ?>
	<?php include('../../inc/footer.inc'); ?>
	<?php include('../../inc/right.inc'); ?>
	
<!-- jquery library include in header for 'tooltipster' to work. -->
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/init.js'; ?>"></script>
<!-- include jquery for UI affects -->
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/responsiveslides.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/hoverIntent.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/superfish.js'; ?>"></script>

<!-- Live Reload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	
</body>
</html>