<html>
<head>
	<title><?php echo $title;?></title>
</head>

<body>

	<div id="wrapper">
		<div id="items">
			<h1>Outtimed</h1>
			<br>
			<input type="text" name="nice" id="nice">
		</div>

	</div>



<script type="text/javascript" src="web/js/jquery.js"></script>
<script type="text/javascript" src="web/js/autocomp.js"></script>
<script type="text/javascript">

	$( function() {
		$("#nice").autocomp();

	})




</script>
</body>
</html>

