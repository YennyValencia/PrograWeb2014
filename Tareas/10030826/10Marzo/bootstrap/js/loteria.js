$(document).ready(
	function(){
		//$('img').hide(1000);	
		$('i').click(
			function() {
				$('a').attr('src', 'x'); 
			}
		);

		$('#img').click(
			function(){
				$('img').show(1000);
			}
		)
	}
);