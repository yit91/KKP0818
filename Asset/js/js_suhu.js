$(document).ready(function() {
    selesai();
});

function selesai() {
	setTimeout(function() {
		update();
		selesai();
	}, 200);
}

function update() {
	$.getJSON("Kontroler/suhu.php", function(data) {
		$("#N_S").empty();
		$("#N_K").empty();
		$.each(data.result, function() {
			var suhu = this['suhu']+"°C"
			var lembap = this['kelembapan']+"%"
			$("#N_S").append(suhu);
			$("#N_K").append(lembap);
		});
	});
}
