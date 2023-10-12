<?php
include("config.php");
if(isset($_GET['id'])) {

    $id = $_GET['id'];
    // echo $id;
    $get = mysqli_query($con,"SELECT * FROM activity WHERE act_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id = $res_row['act_id'];
    $get_img = mysqli_query($con,"SELECT * FROM images WHERE img_act_id = '$act_id'");
    
    ?>
    <table>
			<tbody>
				<tr>
                <?php
                while($img_rows = mysqli_fetch_assoc($get_img)) {
                    ?>
					<td><img src="<?php echo $img_rows['img_tag']; ?>" alt="" /></td>
				<?php	
                }
                ?>
				</tr>
			</tbody>
		</table>
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Activity Name</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="act_id" name="act_id" value="<?php echo $res_row['act_id'];?>">
                          <input type="text" class="span3" id="act_name" name="act_name" value="<?php echo $res_row['act_name'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Activity Date</label>
                        <div class="controls">
                        <input type="text" class="form-control docs-date" name="act_date" value="<?php echo $res_row['act_date'];?>" autocomplete="off" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Activity Content</label>
                        <div class="controls">
                        <textarea class="span3" name="act_content"><?php echo $res_row['act_content'];?></textarea>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Activity Images</label>
                        <div class="controls">
                          <input type="file" class="span3" id="act_img" name="files[]"  multiple>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="img_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php
}

//portfolio section

else if(isset($_GET['port_id'])) {

    $id = $_GET['port_id'];
    
    $get = mysqli_query($con,"SELECT * FROM portfolio WHERE port_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id = $res_row['port_id'];
  
    ?>
					<div class="iq-grid-item illustration">
                                <div class="wraps">
    <div class="card__image">
        <img src="images/<?php echo $res_row['port_img'];?>" alt="" />
      </div>
</div>
   </div>              
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Portfolio Name</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="port_id" name="port_id" value="<?php echo $res_row['port_id'];?>">
                          <input type="text" class="span3" id="port_name" name="port_name" value="<?php echo $res_row['port_name'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Portfolio Date</label>
                        <div class="controls">
                        <input type="text" class="span3" name="port_link" value="<?php echo $res_row['port_link'];?>" autocomplete="off" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Portfolio Image</label>
                        <div class="controls">
                          <input type="file" class="span3" id="port_img" name="files"  multiple>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="port_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php
}

//graphics section

else if(isset($_GET['grap'])) {
    $server = "198.252.98.91";
$username = "sagartec_shuja";
$password = "21);z%FKdcIq";
$dbname = "sagartec_sagartech";

// Create connection
try{
  $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('Unable to connect with the database');
}
    $grap = $_GET['grap'];
    if($grap == 'logo') {
        $img_act_id = 1;
    }
    else if($grap == 'poster') {
        $img_act_id = 2;
    }
    else if($grap == 'pamplet') {
        $img_act_id = 3;
    }
    else if($grap == 'sticker') {
        $img_act_id = 4;
    }
    else {
        echo "something";
    }
    ?>
<table>
              <thead>
                <th>Sr.No.</th>
                <th>Action</th>
              </thead>
			          <tbody class="act_tbody">
				<?php
                $i = 1;
                $stmt = $conn->prepare("SELECT * FROM images WHERE img_act_id = '$img_act_id'");
                $stmt->execute();
                $acts = $stmt->fetchAll();
                foreach ($acts as $act) { 
                ?>
				<tr class="act_tr">
					<td class="nr" hidden><?php echo $act['img_id'];?></td>
          <td><?php echo $i;?></td>
					<td><a href="#myModal" role="button" class="btn btn-danger portDel" id="grapDel" data-toggle="modal">Delete</a></td>
				</tr>
        <?php
        $i++;
                }
        ?>
			</tbody>
		</table>
<?php
}
else if(isset($_GET['grap_id'])) {

    $id = $_GET['grap_id'];
    
    $get = mysqli_query($con,"SELECT * FROM images WHERE img_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id = $res_row['img_id'];
  
    ?>
					<div class="iq-grid-item illustration">
                                <div class="wraps">
    <div class="card__image">
        <img src="<?php echo $res_row['img_tag'];?>" alt="" />
      </div>
</div>
     </div>          
<?php
}

// blogs section

else if(isset($_GET['post_id'])) {

    $id = $_GET['post_id'];
    // echo $id;
    $get = mysqli_query($con,"SELECT * FROM posts WHERE post_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    
    ?>
    <div class="iq-grid-item illustration">
                                <div class="wraps">
    <div class="card__image">
        <img src="../images/blog/<?php echo $res_row['post_img'];?>" alt="" />
      </div>
</div>
   </div>              
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Post Name</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="port_id" name="post_id" value="<?php echo $res_row['post_id'];?>">
                          <input type="text" class="span3" id="port_name" name="post_name" value="<?php echo $res_row['post_name'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Post Date</label>
                        <div class="controls">
                        <input type="text" class="form-control docs-date" class="span4" value="<?php echo $res_row['post_date'];?>" name="post_date" placeholder="Pick a date" autocomplete="off" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="post_desc">Post Description</label>
                        <div class="controls">
                          <input type="text" class="span3" id="post_desc" name="post_desc" value="<?php echo $res_row['post_desc'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Post Content</label>
                        <div class="controls">
                        <textarea class="span6" id="editor2"  name="post_content" required>
                      <?php echo $res_row['post_content'];?></textarea>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Post Image</label>
                        <div class="controls">
                          <input type="file" class="span3" id="port_img" name="files" >
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="post_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php
}

//activites Section

else if(isset($_GET['actShow'])) {
    $server = "198.252.98.91";
    $username = "sagartec_shuja";
    $password = "21);z%FKdcIq";
    $dbname = "sagartec_sagartech";
// echo "working";
// Create connection
try{
  $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('Unable to connect with the database');
}
    $grap = $_GET['actShow'];
    if($grap == 'achieve') {
        $img_act_id = 5;
    }
    else if($grap == 'intern') {
        $img_act_id = 6;
    }
    else {
        echo "something";
    }
    ?>
<table>
              <thead>
                <th>Sr.No.</th>
                <th>Action</th>
              </thead>
			          <tbody class="act_tbody">
				<?php
                $i = 1;
                $stmt = $conn->prepare("SELECT * FROM images WHERE img_act_id = '$img_act_id'");
                $stmt->execute();
                $acts = $stmt->fetchAll();
                foreach ($acts as $act) { 
                ?>
				<tr class="act_tr">
					<td class="nr" hidden><?php echo $act['img_id'];?></td>
          <td><?php echo $i;?></td>
					<td><a href="#myModal" role="button" class="btn btn-danger portDel" id="grapDel" data-toggle="modal">Delete</a></td>
				</tr>
        <?php
        $i++;
                }
        ?>
			</tbody>
		</table>
<?php
}
else if(isset($_GET['actShow_id'])) {

    $id = $_GET['actShow_id'];
    
    $get = mysqli_query($con,"SELECT * FROM images WHERE img_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id = $res_row['img_id'];
  
    ?>
					<div class="iq-grid-item illustration">
                                <div class="wraps">
    <div class="card__image">
        <img src="<?php echo $res_row['img_tag'];?>" alt="" />
      </div>
</div>
                
<?php
}

//themes Section

else if(isset($_GET['thm'])) {
    $server = "198.252.98.91";
$username = "sagartec_shuja";
$password = "21);z%FKdcIq";
$dbname = "sagartec_sagartech";

// Create connection
try{
  $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die('Unable to connect with the database');
}
    $thm_id = $_GET['thm'];
    
    ?>
<table>
              <thead>
                <th>Sr.No.</th>
                <th>Theme Name</th>
                <th>Action</th>
              </thead>
			          <tbody class="act_tbody">
				<?php
                $i = 1;
                $stmt = $conn->prepare("SELECT * FROM theme WHERE thm_cat_id = '$thm_id'");
                $stmt->execute();
                $thms = $stmt->fetchAll();
                foreach ($thms as $thm) { 
                ?>
				<tr class="act_tr">
					<td class="nr" hidden><?php echo $thm['thm_id'];?></td>
                    <td><?php echo $i;?></td>
                    <td><?php echo $thm['thm_name'];?></td>
					<td><a href="#myModal" role="button" class="btn btn-danger portDel" id="thmDel" data-toggle="modal">Delete</a></td>
				</tr>
        <?php
        $i++;
                }
        ?>
			</tbody>
		</table>
<?php
}
else if(isset($_GET['thm_id'])) {

    $id = $_GET['thm_id'];
    
    $get = mysqli_query($con,"SELECT * FROM theme WHERE thm_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id = $res_row['thm_id'];
  
    ?>
					<div class="iq-grid-item illustration">
                                <div class="wraps">
    <div class="card__image">
        <img src="../images/themes/<?php echo $res_row['thm_img'];?>" alt="" />
      </div>
</div>
                
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Theme Name</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="port_id" name="thm_id" value="<?php echo $res_row['thm_id'];?>">
                          <input type="text" class="span3" id="thm_name" name="thm_name" value="<?php echo $res_row['thm_name'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Theme Link</label>
                        <div class="controls">
                        <input type="text" class="span3" name="thm_link" value="<?php echo $res_row['thm_link'];?>" autocomplete="off" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Theme Image</label>
                        <div class="controls">
                          <input type="file" class="span3" id="thm_img" name="files"  multiple>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="thm_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php
}

//Testimonial Section

else if(isset($_GET['testi_id'])) {

    $id = $_GET['testi_id'];
    
    $get = mysqli_query($con,"SELECT * FROM testimonial WHERE test_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    $act_id  = $res_row['test_id'];
    $options = $res_row['test_rate'];
  
    ?>
<!--					<div class="iq-grid-item illustration">-->
<!--                                <div class="wraps">-->
<!--    <div class="card__image">-->
<!--        <img src="../images/themes/<?php echo $res_row['thm_img'];?>" alt="" />-->
<!--      </div>-->
<!--</div>-->
                
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                        <div class="control-group">											
                            <label class="control-label" for="act_name">Select Rating</label>
                            <div class="controls">
                              <select class="span2" id="rating" name="test_rate">
                                  <option value="null">-SELECT-</option>
                                  <option value="1.0" <?php if($options=="1.0") echo 'selected="selected"'; ?>>1</option>
                                  <option value="1.5" <?php if($options=="1.5") echo 'selected="selected"'; ?>>1.5</option>
                                  <option value="2.0" <?php if($options=="2.0") echo 'selected="selected"'; ?>>2</option>
                                  <option value="2.5" <?php if($options=="2.5") echo 'selected="selected"'; ?>>2.5</option>
                                  <option value="3.0" <?php if($options=="3.0") echo 'selected="selected"'; ?>>3</option>
                                  <option value="3.5" <?php if($options=="3.5") echo 'selected="selected"'; ?>>3.5</option>
                                  <option value="4.0" <?php if($options=="4.0") echo 'selected="selected"'; ?>>4</option>
                                  <option value="4.5" <?php if($options=="4.5") echo 'selected="selected"'; ?>>4.5</option>
                                  <option value="5.0" <?php if($options=="5.0") echo 'selected="selected"'; ?>>5</option>
                              </select>
                            </div> <!-- /controls -->				
                        </div> <!-- /control-group -->
                        <div class="control-group">											
                            <label class="control-label" for="test_name">Reviewer Gender</label>
                            <div class="controls">
                                <label class="radio inline">
                                  <input type="radio"  name="test_gen" value="Male" <?php if($res_row['test_gen'] == 'Male') { echo 'checked';}?>> Male
                                </label>
                                
                                <label class="radio inline">
                                  <input type="radio" name="test_gen" value="Female" <?php if($res_row['test_gen'] == 'Female') { echo 'checked';}?>> Female
                                </label>
                              </div>	<!-- /controls -->				
                        </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Reviewer Name</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="port_id" name="test_id" value="<?php echo $res_row['test_id'];?>">
                          <input type="text" class="span3" id="thm_name" name="test_name" value="<?php echo $res_row['test_name'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Testimonial Content</label>
                        <div class="controls">
                        <textarea class="span5" rows="5" name="test_content" required><?php echo $res_row['test_content'];?></textarea>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <!--<div class="control-group">											-->
                      <!--  <label class="control-label" for="act_name">Theme Image</label>-->
                      <!--  <div class="controls">-->
                      <!--    <input type="file" class="span3" id="thm_img" name="files"  multiple>-->
                        <!--</div> <!-- /controls -->
                      <!--</div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="test_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php
}

//Client Section

else if(isset($_GET['client_id'])) {
    

    $id = $_GET['client_id'];
    // echo $id;
    $get = mysqli_query($con,"SELECT * FROM guest WHERE cl_id = '$id'");
    $res_row = mysqli_fetch_assoc($get);
    
    
    ?>
    <form id="edit-profile" class="form" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="cl_username">Client Username</label>
                        <div class="controls">
                            <input type="hidden" class="span3" id="cl_id" name="cl_id" value="<?php echo $res_row['cl_id'];?>">
                          <input type="text" class="span3" id="cl_username" name="cl_username" value="<?php echo $res_row['cl_username'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="cl_pass">Client Password</label>
                        <div class="controls">
                          <input type="text" class="span3" id="cl_pass" name="cl_password" value="<?php echo $res_row['cl_password'];?>" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="cl_update" class="btn btn-primary center">Update</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
<?php

}
else {
    echo "hello";
}
?>