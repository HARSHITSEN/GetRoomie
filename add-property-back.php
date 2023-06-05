<?php
$conn = mysqli_connect("localhost","root","","getrummie");
$name=$_POST['name'];
$Mobile=$_POST['mobile'];
$email=$_POST['email'];
$NA=$_POST['NA'];
$price=$_POST['price'];
$APW=$_POST['APW'];
$pimages = $_FILES['images']['name'];
$image=$_FILES['images']['tmp_name'];
$address=$_POST['address'];
$state=$_POST['stateSelect'];
$city=$_POST['citySelect'];
$Description=$_POST['description'];
$newImages = generateUniqueimage($pimages);
$query="Insert into adddata values(DEFAULT,'$name' , '$Mobile' , '$email' , '$NA' , '$price' , '$APW' , '$newImages' , '$address' , '$state' , '$city', '$Description');";
if(move_uploaded_file($image,"property/".$newImages)){
   if(mysqli_query($conn,$query)){
      echo "Data inserted successfully";}
}
else
{
   echo "Something goes wrong 2";
}

function generateUniqueimage($pimages)
{
   $unqName = substr(str_shuffle(md5($pimages).uniqid()),mt_rand(0,20),15);
   $arr = explode(".",$pimages);
   $ext = strtolower(end($arr));
   $newImages = $unqName.".".$ext;

   return $newImages;
}
?>