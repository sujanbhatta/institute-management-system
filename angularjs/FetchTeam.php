 <?php  
include "../User/class/config.php"; 
 $output = array();  
 $query = "SELECT * FROM team";  
 $result = mysqli_query($link, $query);  
 if(mysqli_num_rows($result) > 0) {  
      while($row = mysqli_fetch_array($result)) {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>
 