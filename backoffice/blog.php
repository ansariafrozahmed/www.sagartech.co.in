<?php
include("include/config.php");
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

if(isset($_POST['post_submit'])) {
    $act_name = $_POST['post_name'];
    $post_desc = $_POST['post_desc'];
    $act_cont = $_POST['post_content'];
    $act_date = $_POST['post_date'];
    $filename = $_FILES['files']['name'];
    $target_file = '../images/blog/'.$filename;
    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    // Valid image extension
    $valid_extension = array("png","jpeg","jpg");

    if(in_array($file_extension, $valid_extension)){

    
    move_uploaded_file($_FILES['files']['tmp_name'],$target_file);
    $act = $conn->prepare("INSERT INTO posts (post_name,post_date,post_desc,post_content,post_img) VALUES(?,?,?,?,?)");
    if ($act->execute([$act_name,$act_date,$post_desc,$act_cont,$filename])) { 
   
    }
    else {
        echo "Something went wrong";
    }
}
}
else if(isset($_POST['post_update'])) {
        
        $act_name = $_POST['post_name'];
        $act_date = $_POST['post_date'];
        $post_desc = $_POST['post_desc'];
        $act_cont = $_POST['post_content'];
        $last_id = $_POST['post_id'];
        $filename = $_FILES['files']['name'];
        if($filename == '') {
        $sql = mysqli_query($con,"SELECT * FROM posts WHERE post_id = '$last_id'");
        $row = mysqli_fetch_assoc($sql);
        $filename = $row['post_img'];
        //print_r($row);
    }
    // Location
    
    $target_file = '../images/blog/'.$filename;
    

    // file extension
    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);

    // Valid image extension
    $valid_extension = array("png","jpeg","jpg");

    if(in_array($file_extension, $valid_extension)){
         move_uploaded_file($_FILES['files']['tmp_name'],$target_file);
        $act = $conn->prepare("UPDATE posts SET post_name = ?,post_date = ?,post_desc = ?,post_content = ?,post_img = ? WHERE post_id = ? ");
    if ($act->execute([$act_name,$act_date,$post_desc,$act_cont,$filename,$last_id])) { 
   // it worked
  
  //echo "File upload successfully";
    }
    else {
        echo "Something went wrong";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blog - Backoffice</title>
<link rel="shortcut icon" href="../images/logoonly.jpg" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/datepicker.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!--<script src="ckeditor/ckeditor.js"></script>-->
<!--<script src="ckeditor/samples/js/sample.js"></script>-->
<!--<link rel="stylesheet" href="ckeditor/samples/css/samples.css">-->
<!--<link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">-->
</head>
<style>
table{ border-collapse: collapse; width: 100% }
		td{ border: none; padding: 10px;  text-align: center;}
    .selected {
          background-color: #808080;
          color: white;
    }
    tr:hover {
          cursor:pointer;
          background-color: #808080;
          color: white;
        }
        
    .trClick {
          background-color: #808080;
          color: white;    
    }
       thead:hover {
         background-color: white;
       }
		@media screen and (max-width: 480px){

			table { display: block; }
			td{ display: block; padding: 5px 0; border: none; }
			td img{ display: block; margin: 0; width: 100%; max-width: none; }

		}

		img{ max-width: 100%; height: auto; width: auto\\9; /* ie8 */ }</style>
<body>
<?php 
    $page = 'blog';
    $date = date("m/d/Y");
    include("include/nav.php");
?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3>Blog Posts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats"><?php //echo $statusMsg;?></h6>
                    <form id="edit-profile" class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    <fieldset>	
                      <div class="control-group">											
                        <label class="control-label" for="date">Post Date</label>
                        <div class="controls">
                        <input type="date" class="form-control" class="span4" name="post_date" placeholder="Pick a date" autocomplete="off" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Post Image </label>
                        <div class="controls">
                          <input type="file" class="span6" id="act_name" name="files" required>(Image name without white spaces)
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="act_name">Post Title</label>
                        <div class="controls">
                          <input type="text" class="span6" id="act_name" name="post_name" placeholder="Post Name" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="post_desc">Post Description</label>
                        <div class="controls">
                          <input type="text" class="span6" id="post_desc" name="post_desc" placeholder="Post Description (First Paragraph)" required>
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <div class="control-group">											
                        <label class="control-label" for="date">Post Content</label>
                        <div class="controls">
                        <textarea class="span6" id="editor1" name="post_content" required></textarea>
            <!--            <div  >-->
        				<!--	<h1>Hello world!</h1>-->
        				<!--	<p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>-->
        				<!--</div>-->
                        </div> <!-- /controls -->				
                      </div> <!-- /control-group -->
                      <!--<div class="control-group">											-->
                      <!--  <label class="control-label" for="act_name">Activity Images</label>-->
                      <!--  <div class="controls">-->
                      <!--    <input type="file" class="span6" id="act_img" name="files[]"  multiple>-->
                      <!--  </div> <!-- /controls -->				
                      <!--</div> <!-- /control-group -->
                      <div class="form-actions">
											<button type="submit" name="post_submit" class="btn btn-primary">Add</button>
										</div> <!-- /form-actions -->
                    </fieldset>
                  </form>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div>
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-picture"></i>
              <h3>Recent Posts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <table>
              <thead>
                <th>Sr.No.</th>
                <th>Activity</th>
                <th>Action</th>
              </thead>
			          <tbody class="act_tbody">
				<?php
                $i = 1;
                $stmt = $conn->prepare("SELECT * FROM posts");
                $stmt->execute();
                $acts = $stmt->fetchAll();
                foreach ($acts as $act) { 
                ?>
				<tr class="act_tr">
					<td class="nr" hidden><?php echo $act['post_id'];?></td>
          <td><?php echo $i;?></td>
					<td><?php echo $act['post_name'];?></td>
					<td><a href="#myModal" role="button" class="btn btn-danger actDel" id="actDel" data-toggle="modal">Delete</a></td>
				</tr>
        <?php
        $i++;
                }
        ?>
			</tbody>
		</table>
            </div>
            <!-- /widget-content --> 
          </div>
         <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h3 id="myModalLabel">Wants to delete this Post?</h3>
                                                      </div>
                                                      <div class="modal-body">
                                                        <p>This post will be deleted and can't be undo.</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                       <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                        <button class="btn btn-primary" id="modalYes">Yes</button>
                                                      </div>
                                                    </div>
        </div>
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-align-justify"></i>
              <h3>Post Content</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <div class="showCont">
            
               <div class="shortcuts"> 
                <a href="activity.php" class="shortcut">
                  <i class="shortcut-icon icon-align-justify"></i>
                   <span class="shortcut-label">No related content</span> 
                </a> 
              </div>
              <!-- /shortcuts -->
              </div>
              <!-- show-content-ends  -->
            </div>
            <!-- /widget-content --> 
          </div>
         
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<?php
//include("include/footer.php")
?>
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>  
  <script src="js/datepicker.js"></script>
  <script src="js/datepicker.ar-IQ.js"></script>
  <script src="js/datepicker.ca-ES.js"></script>
  <script src="js/datepicker.cs-CZ.js"></script>
  <script src="js/datepicker.da-DK.js"></script>
  <script src="js/datepicker.de-AT.js"></script>
  <script src="js/datepicker.de-DE.js"></script>
  <script src="js/datepicker.el-GR.js"></script>
  <script src="js/datepicker.en-GB.js"></script>
  <script src="js/datepicker.en-US.js"></script>
  <script src="js/datepicker.es-ES.js"></script>
  <script src="js/datepicker.fi-FI.js"></script>
  <script src="js/datepicker.fr-FR.js"></script>
  <script src="js/datepicker.hu-HU.js"></script>
  <script src="js/datepicker.is-IS.js"></script>
  <script src="js/datepicker.it-IT.js"></script>
  <script src="js/datepicker.ja-JP.js"></script>
  <script src="js/datepicker.km-KH.js"></script>
  <script src="js/datepicker.ko-KR.js"></script>
  <script src="js/datepicker.lt-LT.js"></script>
  <script src="js/datepicker.lv-LV.js"></script>
  <script src="js/datepicker.nb-NO.js"></script>
  <script src="js/datepicker.nl-NL.js"></script>
  <script src="js/datepicker.oc-FR.js"></script>
  <script src="js/datepicker.pl-PL.js"></script>
  <script src="js/datepicker.pt-BR.js"></script>
  <script src="js/datepicker.ro-RO.js"></script>
  <script src="js/datepicker.ru-RU.js"></script>
  <script src="js/datepicker.si-LK.js"></script>
  <script src="js/datepicker.sk-SK.js"></script>
  <script src="js/datepicker.sv-SE.js"></script>
  <script src="js/datepicker.ta-TA.js"></script>
  <script src="js/datepicker.th-TH.js"></script>
  <script src="js/datepicker.tr-TR.js"></script>
  <script src="js/datepicker.ug-CN.js"></script>
  <script src="js/datepicker.uk-UA.js"></script>
  <script src="js/datepicker.vi-VN.js"></script>
  <script src="js/datepicker.zh-CN.js"></script>
  <script src="js/main.js"></script>
</body>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
<!--<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>-->
<script src="https://cdn.tiny.cloud/1/f31qdf5vbpc0ut13zgusfnlkpen6r3wigurw4etr5z4ybz2r/tinymce/5/tinymce.min.js" referrerpolicy="origin"/></script>
 
<script src="js/base.js"></script> 
<script>
  


tinymce.init({
  selector: 'textarea#editor1',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
// without images_upload_url set, Upload tab won't show up
    images_upload_url: 'include/uploads.php',
    
    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
      
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'include/uploads.php');
      
        xhr.onload = function() {
            var json;
        
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
        
            json = JSON.parse(xhr.responseText);
        
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
        
            success(json.location);
        };
      
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
      
        xhr.send(formData);
    },
 });




// CKEDITOR.plugins.addExternal( 'filebrowser', '/myplugins/filebrowser/', 'plugin.js' );
// CKEDITOR.replace( 'editor1',{
//      extraPlugins : 'filebrowser',
//     filebrowserBrowseUrl:'include/browser.php?type=Images',
//     filebrowserUploadMethod:"form",
//     filebrowserUploadUrl:"include/uploads.php"   
// })
// 	initSample();
// 	var editor = CKEDITOR.replace('editor1', {
// 	    extraPlugins: 'filebrowser',
// 	    filebrowserBrowseUrl: 'browser.php',
// 	    filebrowserUploadUrl:'upload.php'
// 	})
</script>
<script>
$(document).ready(function() {
      
      $('td #actDel').click(function() {
          var id = $(this).parent().parent().find(".nr").text();
          $('#modalYes').click(function(){
             window.location.href = "include/del_data.php?post_id="+id;
          });
      });    
    
      $('.act_tr').click(function() {
        $('.act_tbody .act_tr').removeClass("selected");
        $(this).addClass("selected");
        var value = $(this).closest('tr').find("td:first").text();
          console.log(value);
        var url = 'https://sagartech.co.in/backoffice/editpost';
        var form = $('<form action="' + url + '" method="post">' +
          '<input type="text" name="id" value="' + value + '" />' +
          '</form>');
        $('body').append(form);
        form.submit();
//           $.ajax({
//             url:"include/get_data.php",
//             method: "POST",
//             data: {
//               post_id : value
//             },
//             success:function(data){
//               console.log(data);
//               $(".showCont").html("");
//               $(".showCont").append(data);
//             tinymce.init({
//   selector: 'textarea#editor2',
//   plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
//   imagetools_cors_hosts: ['picsum.photos'],
//   menubar: 'file edit view insert format tools table help',
//   toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
//   toolbar_sticky: true,
//   autosave_ask_before_unload: true,
//   autosave_interval: "30s",
//   autosave_prefix: "{path}{query}-{id}-",
//   autosave_restore_when_empty: false,
//   autosave_retention: "2m",
//   /* without images_upload_url set, Upload tab won't show up*/
//   		images_upload_url : 'uploads.php',
// 		automatic_uploads : false,

// 		images_upload_handler : function(blobInfo, success, failure) {
// 			var xhr, formData;

// 			xhr = new XMLHttpRequest();
// 			xhr.withCredentials = false;
// 			xhr.open('POST', 'uploads.php');

// 			xhr.onload = function() {
// 				var json;

// 				if (xhr.status != 200) {
// 					failure('HTTP Error: ' + xhr.status);
// 					return;
// 				}

// 				json = JSON.parse(xhr.responseText);

// 				if (!json || typeof json.file_path != 'string') {
// 					failure('Invalid JSON: ' + xhr.responseText);
// 					return;
// 				}

// 				success(json.file_path);
// 			};

// 			formData = new FormData();
// 			formData.append('file', blobInfo.blob(), blobInfo.filename());

// 			xhr.send(formData);
// 		},

//  });
//             }
//           })
    
        //console.log($value);
      });
});
</script>
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->

</body>
</html>
