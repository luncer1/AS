<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css"
		integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous" />
	<link rel="stylesheet" href="{$app_url}/css/style.css" />
	<meta charset="utf-8" />
	<title>{$page_title|default:"Default title"}</title>
</head>

<body>
	<div class="header">
		{block name=header}
			Default header
		{/block}
	</div>
	<div class="calc">{block name=calc} Default calc {/block}</div>

	<div class="footer">{block name=footer} Default footer {/block}</div>
</body>

</html>