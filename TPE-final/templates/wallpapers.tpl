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
{include file="footer.tpl"}