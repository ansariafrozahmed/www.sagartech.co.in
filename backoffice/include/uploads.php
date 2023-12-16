<?php
// if(isset($_FILES['upload']['name']))
// {
// 	$file=$_FILES['upload']['name'];
// 	$filetmp=$_FILES['upload']['tmp_name'];

// 	move_uploaded_file($filetmp,'../images/'.$file);
// 	move_uploaded_file($filetmp,'../../images/'.$file);
// 	$function_number=$_GET['CKEditorFuncNum'];
// 	$url='images/'.$file;
// 	$message='';
// 	echo "<script>window.parent.CKEDITOR.tools.callFunction('".$function_number."','".$url."','".$message."');</script>";     
// }
// Allowed origins to upload images
$accepted_origins = array("http://localhost","172.67.162.97:443","https://sagartech.co.in/");

// Images upload path
$imageFolder = "../../images/";
// $imageFolder1 = "../../images/";

reset($_FILES);
$temp = current($_FILES);
if(is_uploaded_file($temp['tmp_name'])){
    // if(isset($_SERVER['HTTP_ORIGIN'])){
    //     // Same-origin requests won't set an origin. If the origin is set, it must be valid.
    //     if(in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)){
    //         header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
    //     }else{
    //         header("HTTP/1.1 403 Origin Denied");
    //         return;
    //     }
    // }
  
    // Sanitize input
    if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
        header("HTTP/1.1 400 Invalid file name.");
        return;
    }
  
    // Verify extension
    if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), array("gif", "jpg", "png"))){
        header("HTTP/1.1 400 Invalid extension.");
        return;
    }
  
    // Accept upload if there was no origin, or if it is an accepted origin
    $filetowrite = $imageFolder . $temp['name'];
    // $filetowrite1 = $imageFolder1 . $temp['name'];
    move_uploaded_file($temp['tmp_name'], $filetowrite);
  
    // Respond to the successful upload with JSON.
    echo json_encode(array('location' => $filetowrite));
} else {
    // Notify editor that the upload failed
    header("HTTP/1.1 500 Server Error");
}
?>