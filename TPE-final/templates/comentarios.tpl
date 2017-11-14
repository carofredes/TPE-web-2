<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3>Comments</h3>
	</div>
</div>
<ul id="listaComentarios" class="list-group col-md-6 col-md-offset-3">
</ul>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h3>Add Comment</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
		{if isset($error) }
		<div class="alert alert-danger" role="alert">{$error}</div>
		{/if}
		<form action="createcomentario" method="post" class="form-horizontal" id="commentForm" role="form">
			<div class="form-group">
				<label for="descripcion" class="col-sm-2 control-label">Comentario:</label>
				<div class="col-sm-10">
					<textarea name="ComentarioText" id="ComentarioText" name="ComentarioText" class="form-control" rows="5"></textarea>
				</div>
				<input type="hidden" name="id-imagen-details" id="id-imagen-details" value="{$image['id_img']}">
				<label for="rating" class="col-sm-2 control-label">Puntuacion:</label>
				<div class="col-sm-1 control-label">
					<select id="select" name="rating">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
			</div>
			<div class="g-recaptcha" data-sitekey="6LckYTgUAAAAAKTuAIRmj_wdchbFJkm1WQ2_k4C6"></div>
			<button id="btnCrearComentario" type="submit" class="btn btn-success btn-circle"><span class="glyphicon glyphicon-send"></span>Crear</button>
		</form>
		
		
		<button id="refresh" type="submit" class="btn btn-default">refresh</button>
	</div>
</div>