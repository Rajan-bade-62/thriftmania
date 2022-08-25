<?php


//Database Connection

 if(isset ($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $db = mysqli_connect('localhost','root','','thriftmania');

$sql = "insert into register 
(username, email, phone,  password)
value ('$username', '$email' , '$phone','$password')";

$res = mysqli_query($db, $sql);
if ($res){
    header('Location:home.php');
    echo "success";
}
else{
    echo "Insert failed";
}
 }
?>
