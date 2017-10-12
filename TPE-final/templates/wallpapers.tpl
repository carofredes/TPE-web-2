{include file="header.tpl"}
{include file="navbar.tpl"}
<h1>Wallpapers</h1>
<section class="section-wallpapers">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-2 well drop-box-container" id="drop-box-container">
            <div id="drop-box" class="drop-box"></div>
            <button id="downloadButton">Download</button>
        </div>
        <div class="col-xs-8 col-sm-8  col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  well" >
            {foreach from=$wallpapers item=wallpaper}
                {assign var="urlImg" value="media/img/themes/`$wallpaper['titulo']`.jpg"}
                {assign var="url" value="image/`$wallpaper['id_img']`"}
                <a href={$url}><img class="img" src={$urlImg} alt="{$wallpaper['titulo']}" id="{$wallpaper['id_img']}"/></a>
            {/foreach}
        </div>
    </div>
</section>
{if $admin}
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <form action="guardarWallpaper" method="post">
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" id="titulo" name="titulo"  value="" placeholder="Titulo del wallpaper">
      </div>
      <div class="form-group">
        <select name="categoria" id="categoria">
            {foreach from=$categories item=categorie}
                <option value="{$categorie['id_categoria']}">{$categorie['nombre_categoria']}</option>
            {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-default">Crear</button>
    </form>
  </div>
</div>
{/if}

{include file="footer.tpl"}