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
                {if $themes['nombre_categoria'] != $title }
                    
                    <h3>{$title} Themes <a class="downloadButton" id="{$title}">Download</a></h3>
                {else}                
                    <img src="media/img/themes/{$theme['titulo']}.jpg" alt="{$theme['titulo']}" draggable="true" class="img">
                    {assign var="title" value="$theme['nombre_categoria']"}
                {/if}


                    <!--
                <div class="themes-container" id="{$theme['nombre_categoria']}">
                    
                    
                    <img src="img/themes/nature-2.jpg" alt="themes nature 2" draggable="true" class="img">
                    <img src="img/themes/nature-3.jpg" alt="themes nature 3" draggable="true" class="img">
                    <img src="img/themes/nature-4.jpg" alt="themes nature 4" draggable="true" class="img">
                </div>
            -->
                <!--
                <div class="themes-container" id="space">
                    <h3>Space Themes <a  class="downloadButton" id="downloadSpace">Download</a></h3>
                    <img src="img/themes/space-1.jpg" alt="themes space 1" draggable="true" class="img">
                    <img src="img/themes/space-2.jpg" alt="themes space 2" draggable="true" class="img">
                    <img src="img/themes/space-3.jpg" alt="themes space 3" draggable="true" class="img">
                    <img src="img/themes/space-4.jpg" alt="themes space 4" draggable="true" class="img">
                </div>
                <div class="themes-container" id="cute">
                    <h3>Cute Themes <a class="downloadButton" id="downloadCute">Download</a></h3>
                    <img src="img/themes/puppie-1.jpg" alt="themes puppie 1" draggable="true" class="img">
                    <img src="img/themes/puppie-2.jpg" alt="themes puppie 2" draggable="true" class="img">
                    <img src="img/themes/puppie-3.jpg" alt="themes puppie 3" draggable="true" class="img">
                    <img src="img/themes/puppie-4.jpg" alt="themes puppie 4" draggable="true" class="img">
                </div>
                <div class="themes-container" id="others">
                    <h3>Other Themes <a class="downloadButton" id="downloadCute">Download</a></h3>
                    <img src="img/themes/collage1.jpg" alt="themes collage 1" draggable="true" class="img">
                    <img src="img/themes/collage2.jpg" alt="themes collage 2" draggable="true" class="img">
                    <img src="img/themes/collage3.jpg" alt="themes collage 3" draggable="true" class="img">
                </div>
            -->
            {/foreach}
        </div>      
    </div>
</section>
{include file="footer.tpl"}