<h1>Wallpapers</h1>
<section class="section-wallpapers">
    <div class="row">
        <ul class="col-xs-4 col-sm-4  col-md-3  categories" id="listCategories">
            {foreach from=$categories item=categorie}
            <li class="list-group-item categorie-item">
                {assign var="idCat" value="`$categorie['id_categoria']`"}
                <button onclick="actualizarContenido('{$idCat}')">{$categorie['nombre_categoria']} images</button>
            </li>
            {/foreach}
        </ul>
        <div class="col-md-8 well">
            <div id="categories-result-partial"></div>
            <div class="all-wallpapers-container">
                {foreach from=$wallpapers item=wallpaper}
                <div class="wallpaper-img-container">
                    {assign var="urlImg" value="media/img/`$wallpaper['titulo']`.jpg"} {assign var="id_img" value="`$wallpaper['id_img']`"}
                    <a onclick="mostrarDetalleImagenes({$id_img})"><img class="img" src={$urlImg} alt="{$wallpaper['titulo']}" id="{$id_img}"/></a> {if $admin}
                    <a href="borrarWallpaper/{$id_img}"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                    <form action="editarWallpaper" method="post">
                        <input type="text" class="form-control hidden" id="id_img" name="id_imgedit" value="{$id_img}" placeholder="id_img del wallpaper">
                        <div class="form-group">
                            <label for="tituloedit">Titulo</label>
                            <input type="text" class="form-control" id="tituloedit" name="tituloedit" value="{$wallpaper['titulo']}" placeholder="Titulo del wallpaper">
                        </div>
                        <div class="form-group">
                            <select name="categoriaedit" id="categoriaedit">
                                {foreach from=$categories item=categorie} {if ({$categorie['id_categoria']} == {$wallpaper['id_categoria']})}
                                <option value="{$categorie['id_categoria']}" selected="true">{$categorie['nombre_categoria']}</option>
                                {else}
                                <option value="{$categorie['id_categoria']}">{$categorie['nombre_categoria']}</option>
                                {/if} {/foreach}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default">Guardar</button>
                    </form>
                    {/if}
                </div>
                {/foreach}
            </div>
        </div>
    </div>
</section>
{if $admin}
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3>Agregar Wallpaper</h3>
        <form action="guardarWallpaper" method="post">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="" placeholder="Titulo del wallpaper">
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
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h3>Agregar Categoria</h3>
        <form action="guardarCategoria" method="post">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="" placeholder="Titulo de la categoria">
            </div>
            <button type="submit" class="btn btn-default">Crear</button>
        </form>
    </div>
</div>
{/if} 
