<?php
$conn = mysqli_connect("localhost","root","","getrummie");
$name = $_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['contact'];
$message=$_POST['message'];
$query = "insert into contact values(DEFAULT,'$name','$email','$mobile','$message');";
// echo $name ."<br>";
// echo $email . "<br>";
// echo $mobile ."<br>";
// echo $message ."<br>";
$result = mysqli_query($conn,$query);
if($result){
    echo "Data Successfully Inserted";
}
else{
    echo "Data not inserted";
}
header("Location:index.html");
    exit();
?>