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
              <div>
                {assign var="urlImg" value="media/img/themes/`$wallpaper['titulo']`.jpg"}
                {assign var="id_img" value="`$wallpaper['id_img']`"}
                <a href="image/{$id_img}"><img class="img" src={$urlImg} alt="{$wallpaper['titulo']}" id="{$id_img}"/></a>

                {if $admin}
                  <a href="borrarWallpaper/{$id_img}"><span class="glyphicon glyphicon-trash"></span></a>

                  <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                   <form action="editarWallpaper" method="post">
                      <input type="text" class="form-control hidden" id="id_img" name="id_imgedit"  value="{$id_img}" placeholder="id_img del wallpaper">
                      <div class="form-group">
                        <label for="tituloedit">Titulo</label>
                        <input type="text" class="form-control" id="tituloedit" name="tituloedit"  value="{$wallpaper['titulo']}" placeholder="Titulo del wallpaper">
                      </div>
                      <div class="form-group">
                        <select name="categoriaedit" id="categoriaedit">
                            {foreach from=$categories item=categorie}
                                {if ({$categorie['id_categoria']} == {$wallpaper['id_categoria']})}
                                  <option value="{$categorie['id_categoria']}" selected="true">{$categorie['nombre_categoria']}</option>
                                {else}
                                  <option value="{$categorie['id_categoria']}">{$categorie['nombre_categoria']}</option>
                                {/if}
                            {/foreach}
                        </select>
                      </div>
                      <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                {/if}
                </div>
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