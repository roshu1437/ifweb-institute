<!DOCTYPE html>
<html>
<head>
	<title>Form Validations</title>
<style>
input{
    margin:10px;
}
</style>
</head>
<body>
    <form action="ac.php" method="post">
    	<input type="number" name="v1" id="v1">
    	<input type="number" name="v2" id="v2">
    	<select name="opr">
    		<option value="+">+</option>
    		<option value="-">-</option>
    		<option value="*">*</option>
    		<option value="/">/</option>
    	</select>
    	<input type="number" name="table_gen" placeholder="table">
		<button class="cal" type="button">1</button>
		<button class="cal" type="button">2</button>
		<button class="cal" type="button">3</button>
		<button class="cal" type="button">4</button>
		<button class="cal" type="button">5</button>
		<button class="cal" type="button">6</button>
		<button class="cal" type="button">7</button>
		<button class="cal" type="button">8</button>
		<button class="cal" type="button">9</button>
		<button class="cal" type="button">0</button>
		<button class="cal" type="button">=</button>
		<input type="submit" name="table" value="table">
        <input type="submit" name="cal" value="calculate">
    </form>
   <script src="jquery.js"></script>
   <script>
   	$(document).ready(function() {
   		$('.cal').click(function(){
   			var counter_value=$(this).text();
   			if($('#v1').val()){
   				$('#v2').val(counter_value);
   			}else{
   				$('#v1').val(counter_value);
   			}
   		});
   	});
   </script>
</body>
</html>