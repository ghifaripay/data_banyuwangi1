<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="contents"></div>
<script>
	$(document).ready(function() {
		$('.home').toggleClass("active");
    	$(".home").attr("aria-expanded","true");
	  	load('backend/dashboard','#contents');
	});
</script>
