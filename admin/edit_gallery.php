<?php 
session_start();
error_reporting(0);
include "class/AdminClass.php";
$gallery=new AdminClass();

if (!isset($_SESSION['admin']))
{
  header("LOCATION:login.php");
}
else 
{

$id=$_GET['id'];
if(isset($_REQUEST['submit']))
{
  extract($_REQUEST);

  $updategallery=$gallery->UpdateGallery($_POST,$_FILES,$id);
  if($updategallery)
  {
  $msg="Gallery Details Successfully Updated";
  }
  else
  {
  $error="Error !! In Updating Gallery";
  }
}
?>
<!doctype html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  
  <title>Admin Dashboard</title>

  <!-- Font awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Sandstone Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap Datatables -->
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  <!-- Bootstrap social button library -->
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <!-- Bootstrap select -->
  <link rel="stylesheet" href="css/bootstrap-select.css">
  <!-- Bootstrap file input -->
  <link rel="stylesheet" href="css/fileinput.min.css">
  <!-- Awesome Bootstrap checkbox -->
  <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
  <!-- Admin Stye -->
  <link rel="stylesheet" href="css/style.css">
<style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

</head>

<body>
  <?php include('includes/header.php');?>
  <div class="ts-main-content">
  <?php include('includes/leftbar.php');?>
    <div class="content-wrapper">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
          
            <h2 class="page-title">Update Gallery</h2>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>


      <?php 
$getall=$gallery->GetAllGalleryById($id);
if($getall){
  while ($result=$getall->fetch_assoc()){
    ?>
                  <div class="panel-body">
<form method="POST" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-2 control-label">Description<span style="color:red">*</span></label>
<div class="col-sm-4">
<textarea rows="3" cols="20" class="form-control" name="about"><?php echo $result['about']; ?> </textarea>
</div>
</div>

<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image  <span style="color:red">*</span><input type="file" name="image" >
<img src="<?php echo $result['image'];?>" width="200px" height="200px">
</div>
<!-- <div class="col-sm-4">
Image 2<span style="color:red">*</span><input type="file" name="image2" required>
</div>
<div class="col-sm-4">
Image 3<span style="color:red">*</span><input type="file" name="image3" required>
</div> -->
</div>

</div>
<div class="hr-dashed"></div>                 
</div>
</div>
</div>
</div>
              




</div>




              <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
              <button class="btn btn-default" type="reset">Cancel</button>
            
              <input type="submit" name="submit" class="btn btn-primary" value="Update"><hr>
              </div>
              </div>

              </form>
              <?php } }?>
                  </div>
                </div>
              </div>
            </div>
            
          

          </div>
        </div>
        
      

      </div>
    </div>
  </div>

  <!-- Loading Scripts -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
<?php 
}
?>