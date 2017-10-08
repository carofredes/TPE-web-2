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

/*
function getData(){
	event.preventDefault();
	let grupo = "15";
	$.ajax({
		method: "GET",
		dataType: 'JSON',
		url: "https://web-unicen.herokuapp.com/api/thing/group/" + grupo,
		success: function(resultData){
			let html = "";
			let informacion = $("#dataTable").val();
			for (let i = 0; i < resultData.information.length; i++) {
				console.log(resultData.information[i].thing);
				html += "<tr id=" + resultData.information[i]._id + ">";
				html += "<td class='ranking'>" + resultData.information[i].thing.ranking + "</td>";
				html += "<td class='title'>" + resultData.information[i].thing.title + "</td>";
				html += "<td class='section'>" + resultData.information[i].thing.section + "</td>";
				html += "<td class='times'>" + resultData.information[i].thing.times + "</td>";
				html += "<td><button class='removeButton'> <img src='img/icon/remove.png' /></button></td>";
				html += "<td><button class='modifyButton'> <img src='img/icon/edit.png' /> </button></td>"
				html += "<td><button class='sendButton'> <img src='img/icon/checked.png' /> </button></td>"
				html += "</tr>";
       		}
       		$("#dataTable").html(html);
    	},
		error:function(jqxml, status, errorThrown){
			console.log(errorThrown);
    	}
	});
};
*/
/*
function sendRandomData3Times(){
	sendData({
		'ranking': '6',
    	'title': 'Vampire Princess Music',
    	'section': 'ringtones',
    	'times': '14'
	});
	sendData({
		'ranking': '8',
    	'title': 'Finn and Dad',
    	'section': 'wallpapers',
    	'times': '4'
	});
	sendData({
		'ranking': '9',
    	'title': 'Prismo',
    	'section': 'wallpapers',
    	'times': '4'
	});
}

function sendData(information){
	event.preventDefault();
	let grupo = "15"
	let info = {
		group: grupo,
		thing: information
		};
	if (grupo && information){
		$.ajax({
			method: "POST",
			dataType: 'JSON',
			data: JSON.stringify(info),
			contentType: "application/json; charset=utf-8",
			url: "https://web-unicen.herokuapp.com/api/thing",
			success: function(resultData){
				console.log(resultData);
				getData();
			},
			error:function(jqxml, status, errorThrown){
				console.log(errorThrown);
			}
		});
	}
	else
		{
			console.log('fail');
		}
};
*/
/*
$(document).on('click', 'button.removeButton', function () {
	let removeId = $(this).closest('tr').attr('id');
	$.ajax({
	    url: "https://web-unicen.herokuapp.com/api/thing/" + removeId,
	    method: 'DELETE',
	    success: function(resultData) {
	        console.log(resultData);
	        getData();
	    },
	    error:function(jqxml, status, errorThrown){
			console.log(errorThrown);
		}
	});
});

$(document).on('click', 'button.modifyButton', function () {
	let modifyId = $(this).closest('tr');
	$("#ranking").val(modifyId.find(".ranking").text());
	$("#title").val(modifyId.find(".title").text());
	$("#section").val(modifyId.find(".section").text());
	$("#timesDownloaded").val(modifyId.find(".times").text());
})

$(document).on('click', 'button.sendButton', function () {
	let modifyId = $(this).closest('tr').attr('id');
	let grupo = "15";
	let information = {
		'ranking': $("#ranking").val(),
		'title': $("#title").val(),
		'section': $("#section").val(),
		'times': $("#timesDownloaded").val()
	};
	let info = {
		_id:modifyId,
		group: grupo,
		thing: information
	};
	$.ajax({
        url: 'https://web-unicen.herokuapp.com/api/thing/' + modifyId,
        type: 'PUT',
        dataType: 'JSON',
        data: JSON.stringify(info),
        contentType: "application/json; charset=utf-8",
        success : function(response, textStatus, jqXhr) {
            console.log(response);
            getData();
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("The following error occured: " + textStatus, errorThrown);
        }
    });
});
*/

