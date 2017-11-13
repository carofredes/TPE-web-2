<div class="row">
	<h1>{$image['titulo']}</h1>
	<img src="media/img/{$image['titulo']}.jpg">
	<h3>Imagenes Relacionadas</h3> 
	<div id="carousel-imgs" class="carousel slide col-md-3" data-ride="carousel">
		<ol class="carousel-indicators">
			{foreach from=$relatedImgs item=img name=images} {if $smarty.foreach.images.first}
			<li data-target="#carousel-imgs" data-slide-to="{$smarty.foreach.images.index}" class="active"></li>
			{else}
			<li data-target="#carousel-imgs" data-slide-to="{$smarty.foreach.images.index}"></li>
			{/if} {/foreach}
		</ol>
		<div class="carousel-inner">
			{foreach from=$relatedImgs item=img name=images} {if $smarty.foreach.images.first}
			<div class="item active">
				<img src="{$img['url']}">
			</div>
			{else}
			<div class="item">
				<img src="{$img['url']}">
			</div>
			{/if} {/foreach}
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
	<a href="/"><span class="glyphicon glyphicon-log-in"></span> Volver</a>
</div>
{include file="comentarios.tpl"}
{if $admin}
<div class="row well">
    <div class="col-md-6 col-md-offset-3">
        <h3>Agregar Wallpapers</h3>
        <form action="guardarWallpaperRelacionado" method="post" enctype="multipart/form-data">
        	<input type="hidden" name="id-imagen-relacionada" value="{$image['id_img']}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="" placeholder="nombre del wallpaper">
            </div>
             <div class="form-group">
                <label for="imagenes">Imagenes</label>
				<input type="file" id="imagenes" name="imagenes[]" multiple>
			</div>
            <button type="submit" class="btn btn-default">Agregar</button>
        </form>
    </div>
</div>
<div class="row well">
    <div class="col-md-6 col-md-offset-3">
        <h3>Eliminar Wallpapers</h3>
        <form action="borrarWallpaper" method="post">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="" placeholder="Titulo de la categoria">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
        </form>
    </div>
</div>
{/if} 