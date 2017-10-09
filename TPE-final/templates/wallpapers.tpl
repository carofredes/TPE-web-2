{include file="header.tpl"}
{include file="navbar.tpl"}
<h1>Wallpapers</h1>
<section class="section-wallpapers">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-2 well drop-box-container" id="drop-box-container">
            <div id="drop-box" class="drop-box"></div>
            <button id="downloadButton">Download</button>
        </div>
        <div class="col-xs-8 col-sm-8  col-md-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1  well draggable-img" id="draggableImg">

            {foreach from=$wallpapers item=wallpaper}
                {assign var="url" value="media/img/themes/`$wallpaper['titulo']`.jpg"}
                <img class="img" src={$url} alt="{$wallpaper['titulo']}" draggable="true">
            {/foreach}
        </div>
    </div>
</section>
{include file="footer.tpl"}

<!--
<ul class="list-group">
  {foreach from=$tareas item=tarea}
      <li class="list-group-item">
        {if $tarea['completado'] }
          <s>{$tarea['titulo']|truncate:6|upper} : {$tarea['descripcion']}</s>
        {else}
            {$tarea['titulo']|truncate:6|upper} : {$tarea['descripcion']}
        {/if}
        <a href="borrarTarea/{$tarea['id_tarea']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </li>
  {/foreach}
</ul>

-->