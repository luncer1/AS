{extends file="../templates/main.tpl"}

{block name=header}
	<h1>{$headerText}</h1>		
{/block}

{block name=footer}
	Stopka Kalulatora
{/block}

{block name=calc}
	

<!--<a href="<?php //print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->

<form action="{$app_url}/app/calc.php" class="pure-form pure-form-stacked" method="post">

	<label for="id_kwota_kredytu">Kwota kedytu[zł]: </label>
	<input id="id_kwota_kredytu" type="text" name="kwotaKredytu" value="{$kwotaKredytu}" />

	<label for="id_okres_splaty">Okres spłaty[lata]: </label>
	<input type="text" name="okresSplaty" value="{$okresSplaty}">

	<label for="id_oprocentowanie">Oprocentowanie[%]: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$oprocentowanie}" />

	<input type="submit" class="pure-button pure-button-primary" value="Oblicz" />
</form>

{*wyświeltenie listy błędów, jeśli istnieją*}
{if (isset($messages))} 
	{if (count ( $messages ) > 0)}
		<ol class="errors">
		{foreach $messages as $msg} 
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}


{if isset($result)}
<div class="results">
	Rata kredytu: {number_format($result,2,',', ' ')}zł
</div>
{/if}

{/block}