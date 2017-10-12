{include file="header.tpl"}
{include file="navbar.tpl"}
<body>
<h1>Themes</h1>
<section class="section-themes">
    <div class="row" id="themesContainer">
        <ul class="list-group col-md-2 categories" id="listCategories">
            {foreach from=$categories item=categorie}
            <li class="list-group-item categorie-item">
                <a href="#">{$categorie['nombre_categoria']} images</a>
            </li>
            {/foreach}
        </ul>
        <div class="col-md-10">
            {assign var="title" value=""}
            {foreach from=$themes item=theme}
                {if $theme['nombre_categoria'] != $title }
                    {assign var="title" value="`$theme['nombre_categoria']`"}
                    <h3>{$title} Themes <a class="downloadButton" id="{$title}">Download</a></h3>
                    <img src="media/img/themes/{$theme['titulo']}.jpg" alt="{$theme['titulo']}" draggable="true" class="img">
                {else}                
                    <img src="media/img/themes/{$theme['titulo']}.jpg" alt="{$theme['titulo']}" draggable="true" class="img">
                    {assign var="title" value="`$theme['nombre_categoria']`"}
                {/if}
            {/foreach}
        </div> 
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