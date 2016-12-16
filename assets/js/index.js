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
    $("#video").css("height", $(window).height());
	controller.instafeed();
	controller.resizeInstagram();
	
	var modal = document.getElementById('myModal');
	var $body = $('body');
	$("#myBtn").on("click", function(){
		 modal.style.display = "block";
		 $("body").removeClass('is-menu-visible');
	});
	
	$("#closet").on("click", function(){
		modal.style.display = "none";
	});
	
	$("#closeBtn").on("click", function(){
		modal.style.display = "none";
	});


	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    };
	};
}

function Controller() {
    console.log("((Controller))");
    
	this.instafeed = function() {

        var userFeed = new Instafeed({
            get: 'user',
            userId: 1720436277,
            accessToken: distributorToken,
            limit: 6,
            resolution: 'standard_resolution' ,
            template: '<a class="animation" href="{{link}}" target="_blank"><img id="instagramImg" class="instaFeedImage" src="{{image}}"" /></a>'
        });
        userFeed.run();


    };

    this.resizeInstagram = function () {
        var width = $("body").width();
    };
}

function Model() {
    console.log("((Model))");

}