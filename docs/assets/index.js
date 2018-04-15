$(document).ready(function () {
	var points = 0;
	var alerts = 0;
	setInterval(
		function () {
			var el = Math.floor((Math.random() * 6) + 1);
			$('.monster-' + el).removeClass('hit').toggleClass('active');
		}, 500
	);
	$('.monster').click(function(){
		if ($(this).hasClass('active')){
			$(this).removeClass('active').addClass('hit');
			points++;
			$('.points').html(points);
			$('.game-window').addClass('hit');
			setTimeout(
				function(){
					$('.game-window').removeClass('hit');
				},50
			);
		}else{
			alert('Nie oszukuj- klikanie wiele razy nic nie da, bo zlicza tylko pojedyncze trafienie');
			alerts++;
			if(alerts > 2){
				alert('3 razy wykryta proba oszustwa... minus 10 punktów');
				alerts = 0;
				points -= 10;
				if (points < 0){
					alert('Game over');
					location.reload();
				}else{
					$('.points').html(points);
				}
			}
		}
	});
});