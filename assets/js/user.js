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
             img:  imageId,
             id: buttonDelete.name
        }, controller.showContainerBottons);

        $("#"+childrenContainerPhoto).on("mouseout", {
             msjErro: deleteP,
             img:  imageId,
             id: buttonDelete.name
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
    		//console.log(event.data.id);
			//$("#idPhoto").val(event.data.id);
    	}else{
    		$("#"+event.data.msjErro).addClass('labelHide');
    		$("#"+event.data.img).removeClass('labelHide');
    		//$("#idPhoto").val('');
    	}
    	
    };
    
    this.deletePhoto = function(event){
    	console.log(event.data.id);
    	var hr = new XMLHttpRequest();
    	var url = "/poporoink/controller/deletePhoto.php";
	    var vars = "idPhotoData="+event.data.id ;
	    hr.open("POST", url, true);
	    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	    hr.onreadystatechange = function() {
		    if(hr.readyState == 4 && hr.status == 200) {
			    var return_data = hr.responseText;
				document.getElementById("status").innerHTML = return_data;
		    };
	    };
	   
	    hr.send(vars); // Actually execute the request
	    document.getElementById("status").innerHTML = "processing...";
    	 /*var data = {
                "idPhoto" : event.data.id
        };
        console.log(data);*/
        /*$.ajax({
		    data: data,
		    type: "POST",
		    dataType: "json",
		    url: 'controller/deletePhoto.php',
		    success: function(data){
               console.log('paso por aqui');
		
           },
		});*/
		
		
    	
    };
	
}

function Model() {
    console.log("((Model))");

}