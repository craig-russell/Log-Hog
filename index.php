<?php require_once('config/config.php'); ?>
<!doctype html>
<head>
	<title>Log Hog</title>
	<link rel="stylesheet" type="text/css" href="static/theme.css">
</head>
<body>
	<div id="menu"></div>
	
	<div id="main">
		<div id="log"></div>
	</div>
	
	<div id="storage">
		<div class="menuItem">
			<a class="{{id}}Button" onclick="show(this, '{{id}}')">{{title}}</a>
		</div>
	</div>
	
	<div id="title">&nbsp;</div>
	
	<script src="static/jquery.js"></script>
	
	<script>
		var pollingRate = <?php echo $config['pollingRate'] ?>;
	</script>
	
	<script src="static/main.js"></script>
</body>