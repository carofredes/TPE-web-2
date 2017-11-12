"use strict";
function templateCroto(comentario){
    var element = '<li id="comentario' + comentario.id_comentario + '"class="list-group-item">'
    element += comentario.texto;
    element += '<a href="borrarcomentario/' + comentario.id_comentario + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
    element += '</li>';
    return element;
}

$(document).ready(function(){
  let templateComentarios;
  //$.ajax({ url: 'js/template.mst'}).done( template => templateComentarios = template);

  function cargarComentarios() {
        $.ajax("api/comentarios")
            .done(function(comentarios) {
              $('li').remove();
              let rendered = templateCroto(comentarios);
              $('#listaComentarios').append(rendered);
            })
            .fail(function() {
                $('#listaComentarios').append('<li>Imposible cargar la lista de tareas</li>');
            });
    }

  function crearComentario() {
      let comentario ={
        "usuario": "tuvieja",
        "texto": $('#ComentarioText').val(),
        "calificacion": "5"
      };

      $.ajax({
            method: "POST",
            url: "api/comentarios",
            data: JSON.stringify(comentario)
          })
        .done(function(data) {
          //let rendered = Mustache.render(templateComentarios , data);
          let rendered = templateCroto(comentarios);
          $('#listaComentarios').append(rendered);
        })
        .fail(function(data) {
            console.log(data);
            alert('Imposible crear el comentario');
        });
    }

    function borrarComentario(id_comentario) {
      $.ajax({
            method: "DELETE",
            url: "api/comentarios/" + id_comentario
          })
        .done(function() {
           $('#comentario'+id_comentario).remove();
        })
        .fail(function() {
            alert('Imposible borrar el comentario');
        });
    }

  $('#refresh').click(function(event){
      event.preventDefault();
      cargarComentarios();
  });

  $('#btnCrearComentario').click(function(event){
      event.preventDefault();
      crearComentario();
  });

  $('body').on('click', 'a.js-borrar', function() {
      event.preventDefault();
      let id_comentario = $(this).data('id_comentario');
      borrarComentario(id_comentario);
  });

  //cargarComentarios();
});

function actualizarContenido(id){
	$.ajax({
			url: "./categorieResults/"+id,
			method: "GET",
			success: showSelectedCategorieResults
		})
}

function showSelectedCategorieResults(result) {
	$(".all-wallpapers-container").addClass("hide");
	$("#categories-result-partial").html(result);
}

/*
function showHome(data, textStatus, jqXHR) {
	$("#container").html(data);
}

function showWallpapers(data, textStatus, jqXHR) {
	$("#container").html(data);
}

function showThemes(data, textStatus, jqXHR) {
	$("#container").html(data);
}

function showRingtones(data, textStatus, jqXHR) {
	$("#container").html(data);
}

>>>>>>> Rest integration with issues
$(document).ready(function(){
	$("#home").on("click", function(){
		$.ajax({
			url: "./home",
			method: "GET",
			success: showHome
		})
	});
	$("#wallpapers").on("click", function(){
		$.ajax({
			url: "./wallpapers",
			method: "GET",
			success: showWallpapers
		})
	});
	$("#ringtones").on("click", function(){
		$.ajax({
			url: "./ringtones",
			method: "GET",
			success: showRingtones
		})
	});
	$.ajax({
		url: "./home",
		method: "GET",
		success: showHome
	})
});

function showHome(result) {
	$("#container-results").html(result);
}

function showWallpapers(result) {
	$("#container-results").html(result);
}

function showRingtones(result) {
	$("#container-results").html(result);
}

function actualizarContenido(id){
	$.ajax({
			url: "./categorieResults/"+id,
			method: "GET",
			success: showSelectedCategorieResults
		})
}

function showSelectedCategorieResults(result) {
	$(".all-wallpapers-container").addClass("hide");
	$("#categories-result-partial").html(result);
}

/*


*/
/*


function downloadImgs(){ 
	let droppedElems = document.querySelectorAll('#drop-box > img');
	let link = document.createElement('a');
	link.setAttribute('download', null);
  	link.style.display = 'none';
  	document.body.appendChild(link);
	droppedElems.forEach(
		elem =>  {
			link.setAttribute('href',elem.src);
    		link.click();
	})
	document.body.removeChild(link);
}
*/

/*
function showHome(data, textStatus, jqXHR) {
	$("#container").html(data);
	getData();
	$("#sendData").on('click', function () {
		let information = {
	    	'ranking': $("#ranking").val(),
	    	'title': $("#title").val(),
	    	'section': $("#section").val(),
	    	'times': $("#timesDownloaded").val()
    	}
    	sendData(information);
    	getData();
	})
	$("#sendData3Times").on('click', function () {
		sendRandomData3Times();
	});
}*/

/*
function showWallpapers(data, textStatus, jqXHR) {
	$("#container").html(data);
	let draggableElems = document.querySelectorAll('#draggableImg > img');
	draggableElems.forEach(
		(img) => { $(img).draggable();
	});
	$( "#downloadButton" ).click(downloadImgs());
	$( "#drop-box" ).droppable({
			drop: function (event, ui) {
				$( this )
				.addClass( "ui-state-highlight" )
				.find( "p" )
				.html( "Dropped!" );
				},
			over: function (event, ui) {
				$( this )
				.addClass( "ui-state-highlight" )
				.find( "p" )
				.html( "moving in!" );
			}
	});
}*/

