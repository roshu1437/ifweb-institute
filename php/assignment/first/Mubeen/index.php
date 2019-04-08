<!DOCTYPE html>
<html>
<head>
	<title>Php Assignment 1</title>
	<style>
		*{
			margin:0px;
			padding:0px
		}
		div{
			float:left;
			box-sizing:border-box
		}
		.empty{
			width:100%;
			height:100px
		}
		.empty1{
		    width:570px;
		    height:100px
		}
		.input{
		    width:200px;
		    height:30px;
		    padding-left:20px
		}
	</style>
</head>
<body>
	<div class="empty"></div>
	<div class="empty1"></div>
	<form action="action.php" method="post">
		<input type="text" placeholder="Write Here" name="user" class="input">
	</form>
</body>
</html>