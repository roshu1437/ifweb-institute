<?php 
  // mysqli_connect('server name','server user name','user password','database name');
  $con=mysqli_connect('localhost','root','','web730');
  if($con){
    echo "Data base connect";
  }else{
    echo "something went wrong";
  }

?>