<h1>Footer</h1>
<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/materialize.min.js')?>"></script>
<script>
function rp(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for(var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    $('#password1,#password2').val(pass);
}
$(document).ready(function(){
	$('.sidenav').sidenav();
	$('.modal').modal();
	$('select').formSelect();
	$('#password1,#password2').characterCounter();
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
	 $('.show_pass').click(function(){
	 	var check_=$('#password1').attr('type');
	 	$(this).toggleClass('red-text');
	 	if(check_=='password'){
	 		$('#password1').attr('type','text');
	 		$('#password2').attr('type','text');
	 	}else{
	 		$('#password1').attr('type','password');
	 		$('#password2').attr('type','password');
	 	}
	 });

	 <?php if(isset($_SESSION['error'])){ ?>
	 	M.toast({html: '<?=$_SESSION['error']?>', classes: 'rounded red'})
	 <?php }elseif(isset($_SESSION['done'])){ ?>
	 	M.toast({html: '<?=$_SESSION['done']?>', classes: 'rounded green'})
	 <?php } ?>
});
<?php session_destroy(); ?>
</script>