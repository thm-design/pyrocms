<p>
	{foreach navigation('footer') link}
		<span class="link">{anchor( $link->url, $link->title, array('target' => $link->target))}</span>
	{/foreach}

	<br />
	
	&copy;2008 - <?php echo date('Y');?> by <?php echo $this->settings->item('site_name'); ?>. All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.
</p>