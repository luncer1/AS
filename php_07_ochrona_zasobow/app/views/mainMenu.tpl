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
			<a href="{$config->action_url}calcCompute"  class="pure-menu-heading pure-menu-link">Kalkulator Zwykły</a>
		</li>

		<li>
		<a href="{$config->action_url}creditCalcCompute"  class="pure-menu-heading pure-menu-link">Kalkulator Kredytowy</a>
		</li>
	</ul>

{/block}