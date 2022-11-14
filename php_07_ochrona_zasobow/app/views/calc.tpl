{extends file = "main.tpl"}

{block name=header}
	<h1>{$headerText}</h1>
{/block}

{block name=footer}Kalkulator zwykły{/block}

{block name=calc}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$config->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$config->action_root}calcCompute" method="post">
		<fieldset>

			<label for="x">Pierwsza liczba</label>
			<input id="x" type="text" placeholder="wartość x" name="x" value="{$form->x}">

			<label for="op">Operacja</label>
					<select id="op" name="op">

{if isset($res->op_name)}
<option value="{$form->operation}">ponownie: {$res->op_name}</option>
<option value="" disabled="true">---</option>
{/if}
						<option value="plus">(+) dodaj</option>
						<option value="minus">(-) odejmij </option>
						<option value="times">(*) pomnóż</option>
						<option value="div">(/) podziel</option>
					</select>
					
			<label for="y">Druga liczba</label>
			<input id="y" type="text" placeholder="wartość y" name="y" value="{$form->y}">

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $messages->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="errors">
	{foreach $messages->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $messages->isInfo()}
	<h4>Informacje: </h4>
	<ol class="infos">
	{foreach $messages->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="results">
	{$res->result}
	</p>
{/if}

</div>
</div>

{/block}