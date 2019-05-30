<?php
 include '../include/function.php';
if (!isset($_GET['id'])){
    header("location:productlist.php");
}
if(isset($_POST['submit'])){
$id=$_GET['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$pdesc=$_POST['pdesc'];
$fname=$_FILES['myfile']['name'];
 $ftemp=$_FILES['myfile']['tmp_name'];
     $ftype=$_FILES['myfile']['type'];
      $fn="images/".$fname;
if ($fname==""){
    echo "nahi";
$co=dbconnect();
            $sq="select * from products where pid=$id";
            $b=mysqli_query($co, $sq);
            $ro= mysqli_fetch_array($b);
            $fn=$ro['pimage'];
            
}
echo 'stri';

         
     move_uploaded_file($ftemp, $fn);  
      //$f="images/".$fname;   
     $con=dbconnect();
            $sql="update products set pname='$name',pprice=$price,pdesc='$pdesc',pimage='$fn' where pid=$id";
            $a=mysqli_query($con, $sql);
            if($a>0){
                header("location:productlist.php?sucess=100");
            }else{
                header("location:productlist.php?failure=100");
            }
}
if (isset($_POST['delete'])){
            $id=$_GET['id'];
            $con=dbconnect();
            $sql="delete from products where pid=$id";
            $a=mysqli_query($con, $sql);
            if($a>0){
                header("location:productlist.php?delete=100");
            }else{
                header("location:productlist.php?failure=100");
            }
}

            

 ?>