<?php if(!class_exists('raintpl')){exit;}?><html>
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



<script type="text/javascript">

	$( function() {
		$("#nice").typeahead({
			source : function() {
				return ["ozan", "abi", "naber"]
			}
		});

	})




</script>
</body>
</html>

