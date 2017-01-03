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
	    var buttonDelete = childrenContainerError[1].children[1];
	    $("#"+childrenContainerPhoto).on("mouseover", {
             msjErro: deleteP,
             img:  imageId
        }, controller.showContainerBottons);

        $("#"+childrenContainerPhoto).on("mouseout", {
             msjErro: deleteP,
             img:  imageId  
        }, controller.showContainerBottons);
        
        $(buttonDelete).on("click", {
             id: buttonDelete.name
        }, controller.deletePhoto);
	}
	
	$("#fileToUpload").on('change', function() {
		console.log('paso por aqui');
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#imageContainer");
        image_holder.empty();
        if (extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
                for (var i = 0; i < countFiles; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                          $("<img />", {
                            "src": e.target.result,
                            "class": "thumb-image"
                        }).appendTo(image_holder);
                    };
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[i]);
                }
            } else {
            }
        }
      
    });
}

function Controller() {
    console.log("((Controller))");
    
    this.showContainerBottons = function(event){
    	
    	if ($("#"+event.data.msjErro).hasClass('labelHide')){
    		$("#"+event.data.msjErro).removeClass('labelHide');	
    		$("#"+event.data.img).addClass('labelHide');	
    	}else{
    		$("#"+event.data.msjErro).addClass('labelHide');
    		$("#"+event.data.img).removeClass('labelHide');
    	}
    	
    };
    
    this.deletePhoto = function(event){
    	console.log(event.data.id);
    	 var data = {
                "id" : event.data.id
        };
        console.log(data);
        $.ajax({
		    data: data,
		    type: "POST",
		    url: 'controller/deletePhoto.php',
		})
		 .done(function( data, textStatus, jqXHR ) {
		     /*if ( console && console.log ) {
		         console.log( "La solicitud se ha completado correctamente." );
		     }*/
		 })
		 .fail(function( jqXHR, textStatus, errorThrown ) {
		     /*if ( console && console.log ) {
		         console.log( "La solicitud a fallado: " +  textStatus);
		     }*/
		});
    	
    };
	
}

function Model() {
    console.log("((Model))");

}