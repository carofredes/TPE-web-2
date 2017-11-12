"use strict";

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

