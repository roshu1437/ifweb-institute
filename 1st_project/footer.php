<script src="<?=$url?>assets/js/jquery-1.11.3.min.js"></script> 
<script src="<?=$url?>assets/js/bootstrap.min.js"></script> 
<script src="<?=$url?>assets/js/own-menu.js"></script> 
<script src="<?=$url?>assets/js/jquery.lighter.js"></script> 
<script src="<?=$url?>assets/js/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?=$url?>assets/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?=$url?>assets/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?=$url?>assets/js/main.js"></script> 
<script src="<?=$url?>assets/js/main.js"></script>
<?php session_destroy(); ?>
<script>
	$(document).ready(function(){
		$('#date_picker').change(function(){
			var current_time=($(this).val());
			$.ajax({
				type:'POST',
				url:'get_ajax_time.php',
				data:{'test':current_time},
				success:function(data){
					var time=data.split('/');
					var html='';
					$(time).each(function(){
						html+='<option>'+this+'</option>';
					});
					$('#time').html(html);

				}
			});
		});
	});
</script>
</body>
</html>