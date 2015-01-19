<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $promotion_name; ?> - Presented By MyAEV</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="all">
<meta name="description" content="MyAEV - <?php echo $headline . ' - ' . $subheadline; ?>">

<!--[if IE 6]>
<script language="javascript" type="text/javascript" src="/js/iebgfix.js"></script>
<script language="javascript" type="text/javascript" src="/js/sfhover.js"></script>
 <![endif]-->

<link rel="stylesheet" href="/css/default.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/responsiveslides.css'; ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/megafish.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/tooltipster.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/style.css'; ?>" type="text/css">

<!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/old-ie.css'; ?>" type="text/css">
<![endif]-->

<!--[if lte IE 7]>
<script>
$(function() {
       var zIndexNumber = 1000;
       // Put your target element(s) in the selector below!
       $("div").each(function() {
               $(this).css('zIndex', zIndexNumber);
               zIndexNumber -= 10;
       });
});
</script>
<![endif]-->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
	// <IE9 console log bug fix
	// http://stackoverflow.com/questions/10961430/ie9-not-running-javascript-onload
	if(!window.console){
		console={};
		console.log = function(){};
	}
</script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/jquery.tooltipster.min.js'; ?>"></script>	

</head>
<body>
	<?php include('../../inc/left.inc'); ?>
	<?php include('../../inc/header_blank.inc'); ?>
	<?php include('../../inc/nav.inc'); ?>
	<?php include('../../inc/main_left.inc'); ?>
	
<div id="wrapper">