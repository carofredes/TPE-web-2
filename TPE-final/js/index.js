"use strict";

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

$(document).ready(function(){
	$("#home").on("click", function(){
		$.ajax({
			url: "home.html",
			method: "GET",
			dataType:"HTML",
			success: showHome
		})
	});
	$("#wallpapers").on("click", function(){
		$.ajax({
			url: "wallpapers.html",
			method: "GET",
			dataType:"HTML",
			success: showWallpapers
		})
	});
	$("#themes").on("click", function(){
		$.ajax({
			url: "themes.html",
			method: "GET",
			dataType:"HTML",
			success: showThemes
		})
	});
	$("#ringtones").on("click", function(){
		$.ajax({
			url: "ringtones.html",
			method: "GET",
			dataType:"HTML",
			success: showRingtones
		})
	});	
	$.ajax({
		url: "home.html",
		method: "GET",
		dataType:"HTML",
		success: showHome
	})	
});

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

