window.onload = function(){
	(function(){
		var odlicz = 5;
		setInterval(function() {
		odlicz--;
			if (odlicz >= 0) {
				span = document.getElementById("odliczanie");
				span.innerHTML = odlicz;
			}
		}, 500);
	})();
}

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

//$(document).ready(function() {
//    $("#menu-toggle").click(function() {
//        $("#wrapper").toggle("slow");
//    });