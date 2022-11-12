{extends file="main.tpl"}

{block name=header}
	<h1>{$headerText}</h1>		
{/block}

{block name=footer}
	Stopka menu
{/block}

{block name=calc}
	<ul class="menu">
		<li>
			<form class="pure-form pure-form-stacked" action="{$config->action_url}calcCompute" method="post">
				<button type="submit" class="pure-button">Kalkulator Zwykły</button>
			</form>
		</li>

		<li>
			<form class="pure-form pure-form-stacked" action="{$config->action_url}creditCalcCompute" method="post">
				<button type="submit" class="pure-button">Kalkulator Kredytowy</button>
			</form>
		</li>
	</ul>

{/block}