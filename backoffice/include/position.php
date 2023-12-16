<?php 

include('config.php');

if(isset($_POST['position'])) {
$position = $_POST['position'];


$i=1;
foreach($position as $k=>$v){
    $sql = "Update portfolio SET port_pos='$i' WHERE port_id='$v'";
    if(mysqli_query($con,$sql)) {
	$i++;
}
else{
    echo "eror".mysqli_error($con);
}
}
}
else {
    echo "error";
}