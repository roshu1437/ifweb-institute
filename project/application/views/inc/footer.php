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

    // Search options
    $('#search').keyup(function(){
        var v=$(this).val();
        if(v.length > 2){
            $.ajax({
                url:'<?=base_url('search')?>',
                type:'post',
                data:{'search':v},
                dataType:'json',
                success:function(d){
                    $('#search_box').html('');
                    $(d).each(function(){
                        var html='<a href="<?=base_url('product-detail?product=')?>'+this.pro_id+'" class="collection-item">'+this.pro_title+'</a>';
                        $('#search_box').append(html);
                    });
                }
            });
        }
    });
});
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d271cd722d70e36c2a54000/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

















