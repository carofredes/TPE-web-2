{include file="header.tpl"}
{include file="navbar.tpl"}

<body>
<h1>Descripcion</h1>

<div>
    <img src="{$id[0]}">


    <p>decripcio de la imagen</p>


    <button>volver</button>
</div>
 {$id|@print_r}


{include file="footer.tpl"}
