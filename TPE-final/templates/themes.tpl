{include file="header.tpl"}
{include file="navbar.tpl"}
<body>
<h1>Themes</h1>
<section class="section-themes">
    <div class="row" id="themesContainer">
        <ul class="list-group col-md-2 categories" id="listCategories">
            <li class="list-group-item categorie-item">
                <a href="#nature">Nature images</a>
            </li>
            <li class="list-group-item categorie-item">
                <a href="#space">Space images</a>
            </li>
            <li class="list-group-item categorie-item">
                <a href="#cute">Cute images</a>
            </li>
            <li class="list-group-item categorie-item">
                <a href="#others">Other images</a>
            </li>
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
    </div>
</section>
{include file="footer.tpl"}