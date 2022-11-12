<?php require_once dirname(__FILE__).'/../../config.php';
include dirname(__FILE__).'/login_check.php';
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Login</title>
</head>
<body>
    <div style="width:90%; margin:2em auto;">

    <form action="<?php print(_APP_URL);?>/app/security/login.php" class="pure-form pure-form-stacked" method="post">
        <legend>Logowanie</legend>
		<label for="login">Login: </label>
		<input id="id_login" type="text" name="login" value="<?php print($login??""); ?>" />

		<label for="id_pass">Hasło: </label>
		<input id="id_pass" type="password" name="pass" />

		<input type="submit" class="pure-button pure-button-primary" value="Zaloguj" />
	</form>	
    <?php
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
    </div>
</body>
</html>