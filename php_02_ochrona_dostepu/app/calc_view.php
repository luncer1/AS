<?php require_once dirname(__FILE__) .'/../config.php';
include dirname(__FILE__).'/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>
<div style="width:90%; margin:2em auto;">

<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>

	<form action="<?php print(_APP_URL);?>/app/calc.php" class="pure-form pure-form-stacked" method="post">

		<label for="id_kwota_kredytu">Kwota kedytu[zł]: </label>
		<input id="id_kwota_kredytu" type="text" name="kwotaKredytu" value="<?php print($kwotaKredytu??""); ?>" />

		<label for="id_okres_splaty">Okres spłaty[lata]: </label>
		<input type="text" name="okresSplaty" value="<?php print($okresSplaty??"")?>">

		<label for="id_oprocentowanie">Oprocentowanie[%]: </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php print($oprocentowanie??""); ?>" />

		<input type="submit" class="pure-button pure-button-primary" value="Oblicz" />
	</form>	

	<?php
	//wyświeltenie listy błędów, jeśli istnieją
	if (isset($messages)) {
		if (count ( $messages ) > 0) {
			echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
			foreach ( $messages as $key => $msg ) {
				echo '<li>'.$msg.'</li>';
			}
			echo '</ol>';
		}
	}
	?>

	<?php if (isset($result)){ ?>
	<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
	<?php echo 'Rata kredytu: '.number_format($result,2,',')."zł"; ?>
	</div>
	<?php } ?>
</div>
</body>
</html>