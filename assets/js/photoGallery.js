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
   
	
	var device = navigator.userAgent;
    if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)||
            device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)||
            device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)||
            device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)) {

        var imagen = document.getElementsByTagName("img");
        $(imagen).removeClass('imagenUser');
        $(imagen).addClass('imagenUSerMobil');
 
    }

	
}

function Controller() {
    console.log("((Controller))");
    
	
}

function Model() {
    console.log("((Model))");

}