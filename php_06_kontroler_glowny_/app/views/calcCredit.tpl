{extends file="main.tpl"}

{block name=header}
	<h1>{$headerText}</h1>		
{/block}

{block name=footer}
	Stopka Kalulatora
{/block}

{block name=calc}
	

<!--<a href="<?php //print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a> -->

<form action="{$config->action_root}creditCalcCompute" class="pure-form pure-form-stacked" method="post">

	<label for="id_kwota_kredytu">Kwota kedytu[zł]: </label>
	<input id="id_kwota_kredytu" type="text" name="kwotaKredytu" value="{$form->kwotaKredytu}" />

	<label for="id_okres_splaty">Okres spłaty[lata]: </label>
	<input type="text" name="okresSplaty" value="{$form->okresSplaty}">

	<label for="id_oprocentowanie">Oprocentowanie[%]: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="{$form->oprocentowanie}" />

	<input type="submit" class="pure-button pure-button-primary" value="Oblicz" />
</form>

{*wyświeltenie listy błędów, jeśli istnieją*}
{if ($messages->isError())} 
	<ol class="errors">
	{foreach $messages->getErrors() as $err} 
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if ($messages->isInfo())} 
	<ol class="infos">
	{foreach $messages->getInfos() as $inf} 
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}


{if isset($result->result)}
<div class="results">
	Rata kredytu: {number_format($result->result,2,',', ' ')}zł
</div>
{/if}

{/block}