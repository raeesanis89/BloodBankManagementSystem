<?php

 $conn =  new mysqli('localhost','root','','bloodbanksystem'); 

 $name = $_POST['name'];
 $email = $_POST['email'];
 $contact = $_POST['contact'];
 $bloodgroup = $_POST['bloodgroup'];
 $password = $_POST['password'];
 
 $Sql_Query = "insert into donor(name,email,password,contact,bloodgroup) VALUES ('$name','$email','$password','$contact', '$bloodgroup')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>