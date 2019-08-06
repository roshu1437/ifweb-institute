<script src="<?=base_url('assets/js/jquery.js')?>"></script>
<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>

<script>
$(document).ready(function(){
	$(".dropdown-trigger").dropdown();
    $('.materialboxed').materialbox();
    $('.modal').modal();
    $('select').formSelect();
    $('.tabs').tabs();
    $('[type="password"]').characterCounter();
    <?php if(isset($this->session->msg)){ ?>
    	M.toast({html: '<?=$this->session->msg?>', classes: 'rounded  teal darken-4'});
    <?php } ?>
    // for category search
    $('#cat_select').change(function(){
    	var cat_id=$(this).val();
    	$('#cat_value').val(cat_id);
    	$('#cat_form').submit();
    });

});
</script>