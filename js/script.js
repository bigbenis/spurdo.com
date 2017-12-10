/*тупо проверка jQuery*/
$(document).ready(function(){
						   
	$('#sound').on('click', function() {
		//alert('aaaaaa');

		$('#sperde').get(0).play();
		location.reload();

	});

	$('#update').click(function() {
            window.location.href = "index.php";
    });

});
