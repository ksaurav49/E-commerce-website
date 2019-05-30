<?php



//get user ip
 function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
// $ip = getIp();
// 	echo $ip;

//creating the shopping cart
function cart(){
	

if(isset($_GET['pid'])){
	$id=$_GET['pid'];
	include 'include/function.php';
	$con=dbconnect(); 
	
	$ip = getIp();
	//echo $ip;
	
	$pro_id = $_GET['pid'];

	$check_pro = 'select * from cart where ip_addr='$ip' AND pid='$pro_id'';
	
	$run_check = mysqli_query($con, $check_pro); 
	
	if(mysqli_num_rows($run_check)>0){

	$co=dbconnect();
	$sql='update cart set quantity=quantity+1 where pid='$pro_id'';
	mysqli_query($co,$sql);
	
	}
	else {
	
	$insert_pro = 'insert into cart (pid,ip_addr) values ('$pro_id','$ip')';
	
	$run_pro = mysqli_query($con, $insert_pro); 
	
	echo '<script>window.open('index.php','_self')</script>';
	}
	
}

}
cart();


?>