<?php
include_once 'DatabaseClass.php';
include_once 'config.php';
include 'format.php';

?>
<?php
class AdminClass {
	private $db;
	private $fm;

	public function __construct(){
		$this->db=new DatabaseAdmin();

	}

  public function reg_admin($firstname,$lastname,$contact,$username,$email,$password,$cpassword){

    
      $sql1="INSERT INTO admin_reg SET firstname='$firstname', lastname='$lastname',contact='$contact', username='$username', email='$email', password='$password', cpassword='$cpassword'";
      $result = $this->db->insert($sql1) or die(mysqli_connect_errno()."Data cannot inserted");
          return $result;
      
    
    }

   
      public function AdminLogin($username,$password){

            $username=mysqli_real_escape_string( $this->db->link, $username);
             $password=mysqli_real_escape_string( $this->db->link, $password);
              
         
           if (empty($username) || empty($password)){
             echo "<script>alret('Username or Password must not be empty.!');</script>";
           } else{

              $query ="SELECT * from admin_reg WHERE  username='$username' and password='$password'";
            $result= $this->db->Select( $query);

        if ($result != false) {
            $value = $result-> fetch_assoc();
             $_SESSION['admin'] = $value['username'];
               
               
            header("Location: dashboard.php");
        } else {

           echo "<script>alret('Invalid Details.!');</script>";
                        }
                 }
             }
    

public function get_fullname($reg_id){
        $id=$_SESSION['id'];
        $sql3="SELECT username FROM admin_reg WHERE reg_id = $reg_id";
          $result = $this->db->select($sql3);
          $user_data = mysqli_fetch_array($result);
        return $user_data;
        echo $user_data;
      }
   public function Logout($username)
    {
    session_start();
    unset($_SESSION['admin']);
    session_destroy();
    echo "<script>window.location.href='../index.php';</script>";
  
    }



    public function GetAllAdminById($username){

       $query="SELECT * FROM admin_reg WHERE username='$username'";
       $result=$this->db->select($query);
       return $result; 
    }
      public function DelAdminById($reg_id){
$delquery="DELETE FROM admin_reg WHERE reg_id='$reg_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {

        header("location:login.php");

       echo "<script>alert('feedback Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alert('Error In Deleting feedback..!');</script>";
        }
  } 

        public function GetAllFeedbackById($username){
       $query="SELECT * FROM test";
       $result=$this->db->select($query);
       return $result; 
    }

            public function GetAllFeedback(){
       $query="SELECT * FROM test";
       $result=$this->db->select($query);
       return $result; 
    }
 public function DelFeedbackById($test_id){
$delquery="DELETE FROM test WHERE test_id='$test_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:view_feedback.php");
       echo "<script>alert('feedback Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alert('Error In Deleting feedback..!');</script>";
        }
  } 

  public function ApproveTest($aid)
  {
    $update="UPDATE test SET status='1' WHERE test_id='$aid'";
    $result=$this->db->update($update);
    return $result;
  }
   public function NonApproveTest($nid)
  {
    $update="UPDATE test SET status='0' WHERE test_id='$nid'";
    $result=$this->db->update($update);
    return $result;
  }





public function CreateEvents($data,$file){
    $eventname=mysqli_real_escape_string($this->db->link, $data['eventname']);
        $description=mysqli_real_escape_string($this->db->link, $data['description']);
        $date=mysqli_real_escape_string($this->db->link, $data['date']);
          $time=mysqli_real_escape_string($this->db->link, $data['time']);




    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="event_image/".$unique_image; 

        move_uploaded_file($file_temp, $uploaded_image);
        $query="INSERT INTO event (eventname,description,date,time,image) VALUES ('$eventname','$description','$date','$time','$uploaded_image')";
        
        $inserted_row=$this->db->insert($query);
        if($inserted_row){
          echo "<script>alert('Events successfully added..!');</script>";
          
        }
        else{
        echo "<script>alert('Error while adding Events..!');</script>";
          
        }
        }
        
   

    public function GetAllEventsById($id){
       $query="SELECT * FROM event where event_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }
    
        public function GetAllEvent(){
         $query="SELECT * FROM event order by event_id desc limit 4";
        $result=$this->db->select ($query);
        return $result;
    }


   public function DelEventsById($event_id){
$delquery="DELETE FROM event WHERE event_id='$event_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:manageevents.php");
       echo "<script>alert('Events Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alert('Error In Deleting Events..!');</script>";
        }
  } 


    public function UpdateEvents($data,$file,$id){
     $eventname=mysqli_real_escape_string($this->db->link, $data['eventname']);
        $description=mysqli_real_escape_string($this->db->link, $data['description']);
        $date=mysqli_real_escape_string($this->db->link, $data['date']);
          $time=mysqli_real_escape_string($this->db->link, $data['time']);


        $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="event_image/".$unique_image; 

         if(!empty($file_name))
        {
            if($file_size > 1048567)
            {
                echo "Image Should be less then 1 MB";
            }
            else if(in_array($file_ext, $permited) === false)
            {
                echo "You can upload only:-"
                .implode(',', $permited);
            }
            else 
            {
                $query=" SELECT * FROM event WHERE event_id='$id'";

                $getData= $this->db->select($query);
                if($getData)
                {
                    while ($delImg= $getData->fetch_assoc()) {
                    $dellink=$delImg['image'];
                    unlink($dellink);
                }
            }

            move_uploaded_file($file_temp, $uploaded_image);

            $update="UPDATE event SET
            eventname='$eventname',
            description='$description',
            date='$date',
            time='$time',
            image='$uploaded_image'
            WHERE event_id='$id'";
            $rowupdate=$this->db->update($update);
            return $rowupdate;
            }

        }

        else
        {
            $update2="UPDATE event SET
            
            eventname='$eventname',
            description='$description',
            date='$date',
            time='$time'
            WHERE event_id='$id'";
            $rowupdate=$this->db->update($update2);
            return $rowupdate;
        }

    
  }



public function CreateTeam($data,$file){
        $name=mysqli_real_escape_string($this->db->link, $data['name']);
        $about=mysqli_real_escape_string($this->db->link, $data['about']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="team_image/".$unique_image; 

        move_uploaded_file($file_temp, $uploaded_image);
        $query="INSERT INTO team (name,about,image) VALUES ('$name','$about','$uploaded_image')";
        
        $inserted_row=$this->db->insert($query);
        if($inserted_row){
          echo "<script>alert('Team successfully added..!');</script>";
          
        }
        else{
        echo "<script>alert('Error while adding Team..!');</script>";
          
        }
        }
            public function UpdateTeam($data,$file,$id){
    $name=mysqli_real_escape_string($this->db->link, $data['name']);
        $about=mysqli_real_escape_string($this->db->link, $data['about']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="team_image/".$unique_image; 

        if(!empty($file_name))
        {
            if($file_size > 1048567)
            {
                echo "Image Should be less then 1 MB";
            }
            else if(in_array($file_ext, $permited) === false)
            {
                echo "You can upload only:-"
                .implode(',', $permited);
            }
            else 
            {
                $query=" SELECT * FROM team WHERE team_id='$id'";

                $getData= $this->db->select($query);
                if($getData)
                {
                    while ($delImg= $getData->fetch_assoc()) {
                    $dellink=$delImg['image'];
                    unlink($dellink);
                }
            }

            move_uploaded_file($file_temp, $uploaded_image);

            $update="UPDATE team SET
             name='$name',
            about='$about',
            image='$uploaded_image'
            WHERE team_id='$id'";
            $rowupdate=$this->db->update($update);
            return $rowupdate;
            }

        }

        else
        {
            $update2="UPDATE team SET
            
            name='$name',
            about='$about'
          
            WHERE team_id='$id'";
            $rowupdate=$this->db->update($update2);
            return $rowupdate;
        }


    
  }
   public function DelTeamById($team_id){
$delquery="DELETE FROM team WHERE team_id='$team_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:manageteam.php");
       echo "<script>alret('Team Has Been Deleted..!');</script>";
          
        } else {

             echo "<script>alret('Error In Deleting team..!');</script>";
        }
  } 


  public function GetAllTeamById($id){
       $query="SELECT * FROM team where team_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }
    
        public function GetAllTeam(){
         $query="SELECT * FROM team";
        $result=$this->db->select ($query);
        return $result;
    }     
    public function joinevent($eventname,$firstname,$lastname,$email,$phone,$username){
      
      $sql1="INSERT INTO eventlog SET eventname='$eventname', firstname='$firstname', lastname='$lastname',email='$email', phone='$phone', username='$username'";
      $result = $this->db->insert($sql1) or die(mysqli_connect_errno()."Data cannot inserted");
          return $result;
      
    
    } 
    public function GetJoinEventById($id)
    {
      $query="SELECT * FROM event where event_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }
      public function GetAllJoinEvent(){
         $query="SELECT * FROM eventlog";
        $result=$this->db->select ($query);
        return $result;
    }  
     public function DelJoinEventById($e_id){
$delquery="DELETE FROM eventlog WHERE e_id='$e_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:joinevents.php");
       echo "<script>alret('Events Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alret('Error In Deleting Events..!');</script>";
        }
  } 
   
     public function ApproveEvent($one)
  {
    $update="UPDATE eventlog SET status='1' WHERE e_id='$one'";
    $result=$this->db->update($update);
    return $result;
  }
   public function NonApproveEvent($two)
  {
    $update="UPDATE eventlog SET status='0' WHERE e_id='$two'";
    $result=$this->db->update($update);
    return $result;
  }


public function CreateCourse($data,$file){
        $coursename=mysqli_real_escape_string($this->db->link, $data['coursename']);
        $tutor=mysqli_real_escape_string($this->db->link, $data['tutor']);
         $about=mysqli_real_escape_string($this->db->link, $data['about']);
          $price=mysqli_real_escape_string($this->db->link, $data['price']);
           $duration=mysqli_real_escape_string($this->db->link, $data['duration']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="course_image/".$unique_image; 

        move_uploaded_file($file_temp, $uploaded_image);
        $query="INSERT INTO course (coursename,image,tutor,about,price,duration) VALUES ('$coursename','$uploaded_image','$tutor','$about','$price','$duration')";
        
        $inserted_row=$this->db->insert($query);
        if($inserted_row){
          echo "<script>alert('Course successfully added..!');</script>";
          
        }
        else{
        echo "<script>alert('Error while adding Course..!');</script>";
          
        }
        }
        public function GetAllCourseById($id){
       $query="SELECT * FROM course where course_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }
    
        public function GetAllCourse(){
         $query="SELECT * FROM course";
        $result=$this->db->select ($query);
        return $result;
    }   
     public function DelCourseById($course_id){
$delquery="DELETE FROM course WHERE course_id='$course_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:managecourse.php");
       echo "<script>alret('Course Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alret('Error In Deleting Course..!');</script>";
        }
  } 


   public function UpdateCourse($data,$file,$id){
    $coursename=mysqli_real_escape_string($this->db->link, $data['coursename']);
        $tutor=mysqli_real_escape_string($this->db->link, $data['tutor']);
         $about=mysqli_real_escape_string($this->db->link, $data['description']);
          $price=mysqli_real_escape_string($this->db->link, $data['price']);
           $duration=mysqli_real_escape_string($this->db->link, $data['duration']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="course_image/".$unique_image; 

        if(!empty($file_name))
        {
            if($file_size > 1048567)
            {
                echo "Image Should be less then 1 MB";
            }
            else if(in_array($file_ext, $permited) === false)
            {
                echo "You can upload only:-"
                .implode(',', $permited);
            }
            else 
            {
                $query=" SELECT * FROM course WHERE course_id='$id'";

                $getData= $this->db->select($query);
                if($getData)
                {
                    while ($delImg= $getData->fetch_assoc()) {
                    $dellink=$delImg['image'];
                    unlink($dellink);
                }
            }

            move_uploaded_file($file_temp, $uploaded_image);

            $update="UPDATE course SET
            coursename='$coursename',
            tutor='$tutor',
            image='$uploaded_image',
            about='$about',
            price='$price',
            duration='$duration'
            WHERE course_id='$id'";
            $rowupdate=$this->db->update($update);
            return $rowupdate;
            }

        }

        else
        {
            $update2="UPDATE course SET
            
            coursename='$coursename',
            tutor='$tutor',
             about='$about',
            price='$price',
            duration='$duration'
          
            WHERE course_id='$id'";
            $rowupdate=$this->db->update($update2);
            return $rowupdate;
        }


    
  }  
   public function GetEnrollCourseById($id)
    {
      $query="SELECT * FROM course where course_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }
      public function GetAllEnrollCourse(){
         $query="SELECT * FROM courselog";
        $result=$this->db->select ($query);
        return $result;
    }     
      public function enrollcourse($coursename,$firstname,$lastname,$email,$phone,$username,$address,$qual){
      
      $sql1="INSERT INTO courselog SET coursename='$coursename', firstname='$firstname', lastname='$lastname',email='$email', phone='$phone', username='$username',address='$address',qual='$qual'";
      $result = $this->db->insert($sql1) or die(mysqli_connect_errno()."Data cannot inserted");
          return $result;
      
    
    } 
    public function ApproveCourse($c1)
  {
    $update="UPDATE courselog SET status='1' WHERE c_id='$c1'";
    $result=$this->db->update($update);
    return $result;
  }
   public function NonApproveCourse($c2)
  {
    $update="UPDATE courselog SET status='0' WHERE c_id='$c2'";
    $result=$this->db->update($update);
    return $result;
  }
   public function DelEnrollCourseById($c_id){
$delquery="DELETE FROM courselog WHERE c_id='$c_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:enrollcourse.php");
       echo "<script>alret('Enrollment in Courses Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alret('Error In Deleting Enrollment..!');</script>";
        }
  } 
  public function Creategallery($data,$file){
    $about=mysqli_real_escape_string($this->db->link, $data['about']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="gallery_image/".$unique_image; 

        move_uploaded_file($file_temp, $uploaded_image);
        $query="INSERT INTO gallery (image,about) VALUES ('$uploaded_image','$about')";
        
        $inserted_row=$this->db->insert($query);
        if($inserted_row){
          echo "<script>alert('Gallery successfully added..!');</script>";
          
        }
        else{
        echo "<script>alert('Error while adding Gallery..!');</script>";
          
        }
        }
        public function UpdateGallery($data,$file,$id){
    $about=mysqli_real_escape_string($this->db->link, $data['about']);

    $file_name=$file['image']['name'];
      $file_size=$file['image']['size'];
      $file_temp=$file['image']['tmp_name'];

        $div=explode('.', $file_name);
        $file_ext=strtolower(end($div));
        $unique_image=substr(time(), 0,10).'.'.$file_ext;
        $uploaded_image="gallery_image/".$unique_image; 

        if(!empty($file_name))
        {
            if($file_size > 1048567)
            {
                echo "Image Should be less then 1 MB";
            }
            else if(in_array($file_ext, $permited) === false)
            {
                echo "You can upload only:-"
                .implode(',', $permited);
            }
            else 
            {
                $query=" SELECT * FROM gallery WHERE gallery_id='$id'";

                $getData= $this->db->select($query);
                if($getData)
                {
                    while ($delImg= $getData->fetch_assoc()) {
                    $dellink=$delImg['image'];
                    unlink($dellink);
                }
            }

            move_uploaded_file($file_temp, $uploaded_image);

            $update="UPDATE gallery SET
            image='$uploaded_image',
            about='$about'
            WHERE gallery_id='$id'";
            $rowupdate=$this->db->update($update);
            return $rowupdate;
            }

        }

        else
        {
            $update2="UPDATE gallery SET
            
            about='$about'          
            WHERE gallery_id='$id'";
            $rowupdate=$this->db->update($update2);
            return $rowupdate;
        }


    
  }  
   public function DelGalleryById($gallery_id){
$delquery="DELETE FROM gallery WHERE gallery_id='$gallery_id'";
$deldata=$this->db->delete($delquery);
if ($deldata) {
         
         header("location:managegallery.php");
       echo "<script>alret('Gallery Has Been Deleted..!');</script>";
          
        } else {


             echo "<script>alret('Error In Deleting Gallery..!');</script>";
        }
  } 

    public function GetAllGalleryById($id)
    {
      $query="SELECT * FROM gallery where gallery_id='$id'";
       $result=$this->db->select($query);
       return $result; 
    }

     public function GetAllGallery()
    {
      $query="SELECT * FROM gallery";
       $result=$this->db->select($query);
       return $result; 
    }
}
?>