<h1>Footer</h1>
<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/materialize.min.js')?>"></script>
<script>
$(document).ready(function(){
	$('.sidenav').sidenav();
	$('.modal').modal();
	$('select').formSelect();
	 $('.materialboxed').materialbox();
	 $('.tabs').tabs();
	 $('.carousel').carousel({
	 	indicators:true,
	 	duration:1000
	 });
	 $('#back').click(function(){
	 	$('.carousel').carousel('prev');
	 });
	 $('#forward').click(function(){
	 	$('.carousel').carousel('next');
	 });
	 setInterval(function(){
	 	$('.carousel').carousel('next');
	 },3000);

	 <?php if(isset($_SESSION['error'])){ ?>
	 	M.toast({html: '<?=$_SESSION['error']?>', classes: 'rounded red'})
	 <?php }elseif(isset($_SESSION['done'])){ ?>
	 	M.toast({html: '<?=$_SESSION['done']?>', classes: 'rounded green'})
	 <?php } ?>
});
<?php session_destroy(); ?>
</script>