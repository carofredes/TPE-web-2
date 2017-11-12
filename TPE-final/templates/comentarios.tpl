<ul id="listaComentarios" class="list-group">
</ul>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="createcomentario" method="post">
      <div class="form-group">
        <label for="descripcion">Comentario:</label>
        <textarea name="ComentarioText" id="ComentarioText" name="ComentarioText" rows="8" cols="50"></textarea>
      </div>
      <button id="btnCrearComentario" type="submit" class="btn btn-default">Crear</button>
    </form>
    <button id="refresh" type="submit" class="btn btn-default">refresh</button>
  </div>
</div>

