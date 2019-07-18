<script src="<?=base_url('assets/js/jquery.js')?>"></script>
<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>

<script>
$(document).ready(function(){
	$(".dropdown-trigger").dropdown();
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('.tabs').tabs();
    $('[type="password"]').characterCounter();
    <?php if(isset($this->session->msg)){ ?>
    	M.toast({html: '<?=$this->session->msg?>', classes: 'rounded  teal darken-4'});
    <?php } ?>
})
</script>