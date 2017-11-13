{assign var="title" value=""}
{foreach from=$images item=image}
    {if $categorie[0]['nombre_categoria'] != $title }
        {assign var="title" value="`$categorie[0]['nombre_categoria']`"}                
        <h3 class="title-categorie">{$title} Categorie</h3>
    {/if}

    <div class="wallpaper-img-container">               
        {assign var="urlImg" value="media/img/`$image['titulo']`.jpg"}
        {assign var="id_img" value="`$image['id_img']`"}
        <a onclick="mostrarDetalleImagenes({$id_img})">
        	<img class="img" src={$urlImg} alt="{$image['titulo']}" id="{$id_img}"/>
        </a>
    </div>
{/foreach}
