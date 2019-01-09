<?php
      session_start();
      $username=$_SESSION["admin"];
      if(!isset($_SESSION["admin"])){
 header("Location:login.php");
}
else
{
include 'class/AdminClass.php';
$gallery=new AdminClass();
if (isset($_GET['deletegalleryid'])) {
          $gallery_id=$_GET['deletegalleryid'];
  
          $delgallery=$gallery->DelGalleryById($gallery_id);
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
  
  <title>Manage Admin Details|Admin</title>

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

            <h2 class="page-title">Manage Gallery</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
              <div class="panel-heading">Gallery</div>
              <div class="panel-body">
              <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <div style="overflow-x:auto;">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                   <th>S.N</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Edit</th>
                   <th>Delete</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>

            <?php 
          $getgallery=$gallery->GetAllGallery();
          if($getgallery){
            $i=0;
            while ($result=$getgallery->fetch_assoc()){
              $i++;
              ?>
                    <tr>
                     <td><?php echo $i;?></td>
                     <td><img src="<?php echo $result['image'];?>" height="100px" width="80px"></td>
                      <td><?php echo $result['about'];?></td>

                                                 
                      


<td><a href="edit_gallery.php?id=<?php echo $result['gallery_id'];?>"><i class="fa fa-pencil-square-o fa-2x" style="color: black;"></i></a>&nbsp;&nbsp;
</td><td><a onclick="return confirm('Are you sure to delete ?')" href="?deletegalleryid=<?php echo $result['gallery_id'];?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true" style="font-size: 25px; color: red;"></i></a></td>
                    </tr>
                    <?php 
                  }
                }
                ?>
                    
                  </tbody>
                </table>
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

<?php } ?>