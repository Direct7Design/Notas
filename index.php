<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
    <link href="basic.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="style.css" media="screen" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
    <div class="wrapper clearfix">
        <div id="logo">
            <h1>Notas</h1>
        </div>
    </div>
</div>
<div id="content" class="wrapper">
	<div id="controls">
		<div class="title">Pr&eacute;-visualiza&ccedil;&atilde;o</div>
		<p>Dimens&otilde;s: 3cm x 7cm.</p>
		<div id="target"></div>
			<form action="popup.php" target="popup" method="POST">
			<input type="submit" class="clean-gray" id="print" name="submit" value="Imprimir" />
	</div>
	<div id="work-area">
		<div id="form-builder" class="clearfix">
		<p>Digite o conte&uacute;do no campo abaixo e uma pr&eacute;-visualiza&ccedil;&atilde;o ser&aacute; exibida &agrave; esquerda. Ap&oacute;s isso, clique em <b>Imprimir</b> e uma nova janela ser&aacute; aberta para a impress&atilde;o.</p>
				<textarea id="text" name="text"></textarea>
			</form>
		</div>
    </div>
	<div class="clear"></div>
	<footer>
    	<p>&copy; 2011 - 2012 Notas &ndash; Desenvolvido por <a href="http://www.pedrofelipe.com.br" target="_blank">Pedro Felipe</a></p>
	</footer>
</div>
<script type="text/javascript">
	$('#text').keyup(function(){
		var keyed = $(this).val().replace(/\n/g, '<br />');//.replace('&', '&amp;').replace('<', '&lt;').replace('>', '&gt;');
			$("#target").html(keyed);
	});
</script>
</body>
</html>