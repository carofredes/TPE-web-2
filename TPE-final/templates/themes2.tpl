<div class="col-md-10">
    {assign var="title" value=""}
    {foreach from=$images item=image}

        {if $categorie[0]['nombre_categoria'] != $title }

            {assign var="title" value="`$categorie[0]['nombre_categoria']`"}
            
            <h3>{$title} Themes</h3>
            <img src="media/img/themes/{$image['titulo']}.jpg" alt="{$image['titulo']}" draggable="true" class="img">
        {else}                
            <img src="media/img/themes/{$image['titulo']}.jpg" alt="{$image['titulo']}" draggable="true" class="img">
            {assign var="title" value="`$categorie[0]['nombre_categoria']`"}
        {/if}
    {/foreach}
</div> 