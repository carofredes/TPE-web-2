"use strict";
let templateComentarios;
$.ajax({ url: 'js/template.mst'}).done( template => templateComentarios = template);

function cargarComentarios(id) {
	$.ajax({
			method: "GET",
			url: "api/comentario/"+id,
		})
		.done(function(comentarios) {
			$('.list-group-item').remove();
			let rendered = Mustache.render(templateComentarios, comentarios);
			$('#listaComentarios').append(rendered);
		})
		.fail(function() {
			$('#listaComentarios').append('<li>Imposible cargar la lista de tareas</li>');
		});
}

function crearComentario() {
	let comentario = {
		"usuario": "1",
		"texto": $('#ComentarioText').val(),
		"calificacion": $('#select').val(),
		"id_img": $('#id-imagen-details').val()
	};
	$.ajax({
			method: "POST",
			url: "api/comentario",
			data: JSON.stringify(comentario)
		})
		.done(function(data) {
			let rendered = Mustache.render(templateComentarios , data);
			console.log(data);
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
			url: "api/comentario/" + id_comentario
		})
		.done(function() {
			$('#comentario' + id_comentario).remove();
		})
		.fail(function() {
			alert('Imposible borrar el comentario');
		});
}

$(document).ready(function() {
	$("#home").on("click", function() {
		$.ajax({
			url: "./home",
			method: "GET"
		})
		.done(function(result) {
			$("#container-results").html(result);
		});
	});

	$("#wallpapers").on("click", function() {
		$.ajax({
			url: "./wallpapers",
			method: "GET"
		})
		.done(function(result) {
			$("#container-results").html(result);
		});
	});

	$("#ringtones").on("click", function() {
		$.ajax({
			url: "./ringtones",
			method: "GET"
		})
		.done(function(result) {
			$("#container-results").html(result);
		});
	});

	$("#userPanel").on("click", function() {
		$.ajax({
			url: "./userPanel",
			method: "GET"
		})
		.done(function(result) {
			$("#container-results").html(result);
		});
	});	

	$.ajax({
		url: "./home",
		method: "GET"
	})
	.done(function(result) {
		$("#container-results").html(result);
	});
});

function actualizarContenido(id) {
	$.ajax({
		url: "./categorieResults/" + id,
		method: "GET",
	})
	.done(function(result) {
		$(".all-wallpapers-container").addClass("hide");
		$("#categories-result-partial").html(result);
	});
}

function mostrarDetalleImagenes(id){
	$.ajax({
		url: "./wallpaper/" + id,
		method: "GET",
	})
	.done(function(result) {
		$("#container-results").html(result);
		
		$('#refresh').click(function(event) {
			event.preventDefault();
			cargarComentarios(id);
		});

		$('#btnCrearComentario').click(function(event) {
			event.preventDefault();
			crearComentario();
		});

		$('body').on('click', 'a.js-borrar', function(event) {
			event.preventDefault();
			let id_comentario = $(this).data('idcomentario');
			console.log(id_comentario);
			borrarComentario(id_comentario);
		});
		cargarComentarios(id);
		setInterval(function(){
	    	cargarComentarios(id);
		}, 2000);
	})
}


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