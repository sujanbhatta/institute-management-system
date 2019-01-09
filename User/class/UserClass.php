<?php
include_once 'DatabaseClass.php';
include_once 'config.php';
include 'format.php';

?>
<?php
class UserClass {
	private $db;
	private $fm;

	public function __construct(){
		$this->db=new Database();

	}

  public function reg_user($firstname,$lastname,$address,$contact,$username,$email,$password,$cpassword){

    
      $sql1="INSERT INTO registration SET firstname='$firstname', lastname='$lastname', address='$address', contact='$contact', username='$username', email='$email', password='$password', cpassword='$cpassword'";
      $result = $this->db->insert($sql1) or die(mysqli_connect_errno()."Data cannot inserted");
          return $result;
      
    
    }

   
      public function UserLogin($username,$password){

            $username=mysqli_real_escape_string( $this->db->link, $username);
             $password=mysqli_real_escape_string( $this->db->link, md5($password));
              
         
           if (empty($username) || empty($password)){
             echo "<script>alret('Username or Password must not be empty.!');</script>";
           } else{

              $query ="SELECT * from registration WHERE  username='$username' and password='$password'";
            $result= $this->db->Select( $query);

        if ($result != false) {
            $value = $result-> fetch_assoc();
             $_SESSION['username'] = $value['username'];
             $_SESSION['id'] = $value['test_id'];
               
               
            header("Location:index.php");
        } else {

           echo "<script>alret('Invalid Details.!');</script>";
                        }
                 }
             }
             

public function get_fullname($reg_id){
        $id=$_SESSION['id'];
        $sql3="SELECT username FROM registration WHERE reg_id = $reg_id";
          $result = $this->db->select($sql3);
          $user_data = mysqli_fetch_array($result);
        return $user_data;
        echo $user_data;
      }
   public function Logout($username)
    {
    session_start();
    unset($_SESSION['username']);
    session_destroy();
   echo "<script>window.location.href='../index.php';</script>";
    }



    public function GetAllUserById($username){

       $query="SELECT * FROM registration WHERE username='$username'";
       $result=$this->db->select($query);
       return $result; 
    }
      
       public function UpdateUser($data,$reg_id){
        $firstname=mysqli_real_escape_string($this->db->link, $data['firstname']);
         $lastname=mysqli_real_escape_string($this->db->link, $data['lastname']);
          $address=mysqli_real_escape_string($this->db->link, $data['address']);
          $contact=mysqli_real_escape_string($this->db->link, $data['contact']);
          $username=mysqli_real_escape_string($this->db->link, $data['username']);
           $email=mysqli_real_escape_string($this->db->link, $data['email']);
           $password=mysqli_real_escape_string($this->db->link, $data['password']);
            $cpassword=mysqli_real_escape_string($this->db->link, $data['cpassword']);
 

       

        
        $query="UPDATE registration SET firstname='$firstname', lastname='$lastname', address='$address',contact='$contact', username='$username',email='$email', password='$password',cpassword='$cpassword' WHERE reg_id='$reg_id'";

        $updated_row = $this->db->update($query);
        if ($updated_row){
            echo "User Successfully Updated";
        }
        else
        {
            echo "Error while updating User details";
        }

    }
    public function CreateFeedback($data,$id,$file){
    $name=mysqli_real_escape_string($this->db->link, $data['name']);
    $message=mysqli_real_escape_string($this->db->link, $data['message']);
       
         $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="test_image/".$unique_image; 

        move_uploaded_file($file_temp, $uploaded_image);
        $query="INSERT INTO test (name, message,username,image) VALUES ('$name','$message','$id','$uploaded_image')";
        
        $inserted_row=$this->db->insert($query);
        if($inserted_row){
          echo "<script>alret('Feedback Has Been Added..!');</script>";
          
        }
        else{
          echo "<script>alret('Error while adding feedback..!');</script>";
          
        }

  }
   public function GetAllFeedbackById($username){
       $query="SELECT * FROM test WHERE username='$username'";
       $result=$this->db->select($query);
       return $result; 
    }
      public function GetAllTest(){
         $query="SELECT * FROM test where status='1'";
        $result=$this->db->select ($query);
        return $result;
    }



    public function UpdateFeedback($data,$test_id){
        $name=mysqli_real_escape_string($this->db->link, $data['name']);
         $message=mysqli_real_escape_string($this->db->link, $data['message']);
        

       

        
        $query="UPDATE test SET name='$name', message='$message' WHERE test_id='$test_id'";

        $updated_row = $this->db->update($query);
        if ($updated_row){
            echo "<script>alret('Feedback Has Been Successfully Updated..!');</script>";
        }
        else
        {
            echo "<script>alret('Error while updating Feedback..!');</script>";
        }

    }
     public function DelFeedbackById($test_id){
$delquery="DELETE FROM test WHERE test_id='$test_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {

       echo "<script>alret('feedback Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alret('Error In Deleting feedback..!');</script>";
        }
  } 



        public function GetAllTeam(){
         $query="SELECT * FROM team";
        $result=$this->db->select ($query);
        return $result;
    }

 public function GetAllJoinEventById($username){
       $query="SELECT * FROM eventlog WHERE username='$username'";
       $result=$this->db->select($query);
       return $result; 
    }
         public function DelJoinEventById($e_id){
$delquery="DELETE FROM eventlog WHERE e_id='$e_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {

       echo "<script>alertt('join events Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alert('Error In Deleting join events..!');</script>";
        }
  } 


public function GetAllEnrollCourseById($username){
       $query="SELECT * FROM courselog WHERE username='$username'";
       $result=$this->db->select($query);
       return $result; 
    }
         public function DelEnrollCourseById($c_id){
$delquery="DELETE FROM courselog WHERE c_id='$c_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {

       echo "<script>alertt('Enroll Courses Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alert('Error In Deleting Enroll Course..!');</script>";
        }
  } 

}
?>