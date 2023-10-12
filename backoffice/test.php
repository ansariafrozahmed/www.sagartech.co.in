<?php
include('include/config.php'); 

$sql = mysqli_query($con,"SELECT * FROM posts");
?>
    <html>
        <body>
        <?php
while($rows = mysqli_fetch_assoc($sql)) {
            echo $rows['post_content'];         
        ?>
        <br>
    <?php
}
?>

        </body>
    </html>
    