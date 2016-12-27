$(document).on("ready", init);

var view;
var controller;
var model;

function init() {
    console.log("((Init))");

    model = new Model();
    controller = new Controller();
    view = new View();
}

function View() {
    console.log("((View))");
    
   
   	var containerPhoto = document.getElementById('containerPhotoAll').children;
	for (var i = 0; i < containerPhoto.length; i++) {
		var childrenContainerPhoto = $(containerPhoto[i])[0].id;
		var childrenContainerError = $(containerPhoto[i])[0].children;
		var msjDelete = $(childrenContainerError)[1].id;
		var deleteM = $("#"+msjDelete)[0].id;
		var deleteP = $("#"+deleteM)[0].id;		
		var imageId = childrenContainerError[0].id;
	    
	    $("#"+childrenContainerPhoto).on("mouseover", {
             msjErro: deleteP,
             img:  imageId
        }, controller.showContainerBottons);

        $("#"+childrenContainerPhoto).on("mouseout", {
             msjErro: deleteP,
             img:  imageId  
        }, controller.showContainerBottons);
	}
}

function Controller() {
    console.log("((Controller))");
    
    this.showContainerBottons = function(event){
    	console.log();
    	if ($("#"+event.data.msjErro).hasClass('labelHide')){
    		$("#"+event.data.msjErro).removeClass('labelHide');	
    		$("#"+event.data.img).addClass('labelHide');	
    	}else{
    		$("#"+event.data.msjErro).addClass('labelHide');
    		$("#"+event.data.img).removeClass('labelHide');
    	}
    	
    };
	
}

function Model() {
    console.log("((Model))");

}