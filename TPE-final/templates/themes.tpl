{include file="header.tpl"}
{include file="navbar.tpl"}
<body>
<h1>Themes</h1>
<section class="section-themes">
    <div class="row" id="themesContainer">
        <ul class="list-group col-md-2 categories" id="listCategories">
            {foreach from=$categories item=categorie}
            <li class="list-group-item categorie-item">
                {assign var="idCat" value="`$categorie['id_categoria']`"}
                <button onclick="actualizarContenido('{$idCat}')">{$categorie['nombre_categoria']} images</button>
            </li>
            {/foreach}
        </ul>
        <div id="theme-result-partial"></div>
        
        {if $admin}
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <form action="guardarThemes" method="post">
                  <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"  value="" placeholder="Titulo del Theme">
                  </div>
                  <button type="submit" class="btn btn-default">Crear</button>
                </form>
              </div>
            </div>
        {/if}     
    </div>
</section>
{include file="footer.tpl"}