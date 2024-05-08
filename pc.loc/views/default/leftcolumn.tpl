{* левый столбец *}
<div id="leftColumn">
	<div id="leftMenu">
		<div class="menuCaption"><a href="/list/">Каталог</a></div>
		{foreach $rsCategories as $item}
		<a>&nbsp; {$item['name']}</a><br>
		{if isset($item['children'])}
		{foreach $item['children'] as $itemChild}
		<a href="/category/{$itemChild['id']}/">&nbsp; &nbsp; &nbsp; {$itemChild['name']}</a><br>
		{/foreach}
		{/if}
		{/foreach}
	</div>
</div>