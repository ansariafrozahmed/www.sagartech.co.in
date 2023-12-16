<?php
include('config.php');

if(isset($_GET['act_id'])) {
    $id = $_GET['act_id'];
    
    $del = "DELETE FROM activity WHERE act_id = '$id' ";
    if(mysqli_query($con,$del)) {
        $del_img = "DELETE FROM images WHERE img_act_id = '$id'";
            if(mysqli_query($con,$del_img)) {
                echo "deleted";
                header("location:../activity.php");
            }
            else {
                echo "something went wrong with images." . mysqli_error($con);
            }
    }
    else {
        echo "something went wrong witha activites." . mysqli_error($con);
    }
}
else if(isset($_GET['port_id'])) {
    $id = $_GET['port_id'];
    
    $del = "DELETE FROM portfolio WHERE port_id = '$id' ";
    if(mysqli_query($con,$del)) {
        echo "deleted";
        header("location:../portfolio.php");
    }
    else {
        echo "something went wrong portfolio." . mysqli_error($con);
    }
}
else if(isset($_GET['grap_id'])) {
    $id = $_GET['grap_id'];
    
    $del = "DELETE FROM images WHERE img_id = '$id' ";
    if(mysqli_query($con,$del)) {
        echo "deleted";
        header("location:../logodesign.php");
    }
    else {
        echo "something went wrong logodesign." . mysqli_error($con);
    }
}
else if(isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
    
    $del = "DELETE FROM posts WHERE post_id = '$id' ";
    if(mysqli_query($con,$del)) {
        header("location:../blog.php");
    }
    else {
        echo "something went wrong witha activites." . mysqli_error($con);
    }
}
else if(isset($_GET['theme_id'])) {
    $id = $_GET['theme_id'];
    
    $del = "DELETE FROM theme WHERE thm_id = '$id' ";
    if(mysqli_query($con,$del)) {
        echo "deleted";
        header("location:../theme.php");
    }
    else {
        echo "something went wrong themes." . mysqli_error($con);
    }
}
else if(isset($_GET['testi_id'])) {
    $id = $_GET['testi_id'];
    
    $del = "DELETE FROM testimonial WHERE test_id = '$id' ";
    if(mysqli_query($con,$del)) {
        echo "deleted";
        header("location:../testimonial.php");
    }
    else {
        echo "something went wrong Testimonials." . mysqli_error($con);
    }
}
else if(isset($_GET['cl_id'])) {
    $id = $_GET['cl_id'];
    
    $del = "DELETE FROM guest WHERE cl_id = '$id' ";
    if(mysqli_query($con,$del)) {
        header("location:../client.php");
    }
    else {
        echo "something went wrong with client." . mysqli_error($con);
    }
}