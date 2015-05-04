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

$(document).ready(function() {
    $("#selectProvince").change(function() {
        $(".selectCity").show('slow');
        var woj = $('#selectProvince').val();
        $.get("/ajax/miasta.php?woj=" + woj, function( data ) {
        	  $("#selectCity").html( data );
        	  console.log(data);
        	});
    });
});