<div class="row">
	<h1>{$image['titulo']}</h1>
	<img src="../media/img/{$image['titulo']}.jpg">

	<h3>Imagenes Relacionadas</h3> 
	<div id="carousel-imgs" class="carousel slide col-md-3" data-ride="carousel">
		<ol class="carousel-indicators">
		{foreach from=$relatedImgs item=img name=images}
			{if $smarty.foreach.images.first}
				<li data-target="#carousel-imgs" data-slide-to="{$smarty.foreach.images.index}" class="active"></li>
			{else}
				<li data-target="#carousel-imgs" data-slide-to="{$smarty.foreach.images.index}"></li>
			{/if}
		{/foreach}	
		</ol>
		<div class="carousel-inner">		
			{foreach from=$relatedImgs item=img name=images}
				{if $smarty.foreach.images.first}
				<div class="item active">
					<img src="../media/img/{$img['nombre_imagen']}.jpg">
				</div>
				{else}
				<div class="item">
					<img src="../media/img/{$img['nombre_imagen']}.jpg">
				</div>
				{/if}
			{/foreach}
		</div>
		<a class="left carousel-control" href="#carousel-imgs" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-imgs" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<a href="../wallpapers"><span class="glyphicon glyphicon-log-in"></span> Volver</a>
</div>
 

{include file="comentarios.tpl"}