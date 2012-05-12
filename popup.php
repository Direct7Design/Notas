<?php
	$text = nl2br(htmlspecialchars($_POST["text"]));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
   	<style>
   		@import url(http://fonts.googleapis.com/css?family=Montserrat);
   		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

   		body {
   			margin: 20px;
   		}

   		#target {
			width: 3cm;
			height: 7cm;
			border: 1px dotted #000;
			background-color: #fff;
			color: #000;
			padding: 2px;
			margin-top: 10px;
			word-wrap: break-word;
			font-family: 'Montserrat', sans-serif;
			font-size: 7.5px;
		}
		
		form {
			margin-bottom: 20px;
		}
		
		a {
			color: #555;
			text-decoration: none;
			font-family: 'Open Sans', sans-serif;
			font-size: 13px;
		}
   	</style>
</head>
<body>
	<form action="" method="POST">
		<input type="button" value="Imprimir" onclick="window.print()" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/">&laquo; Retornar</a>
	</form>
    <div id="target"><?php echo $text; ?></div>
    <div class="clear"></div>
</body>
</html>