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
	
	var device = navigator.userAgent;
    if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)||
            device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)||
            device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)||
            device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)) {

        $("#banner").height($( window ).height() - 176);
 
    }

	
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