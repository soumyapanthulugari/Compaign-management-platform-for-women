<?php
session_start();
$host="localhost";
$user="root";
$password="";
$con=mysqli_connect($host,$user,$password,"sch");
$message = "wrong credentials";

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$uname = $_POST['uname'];
            
            if (!empty($_POST['uname']) 
               && !empty($_POST['pwd'])) {
				
 $sql = "SELECT Password FROM registerstudent where Student_name='" . $_POST['uname'] . "'";
         // $sql = "SELECT Password FROM registerstudent where Student_name='Arp'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row 
	//$SESSION["user"] = $uname;
		$row = mysqli_fetch_assoc($result);
		//$SESSION["user"] = $uname;
		// print_r($row) ;
	if($_POST['pwd'] == $row["Password"]){
			echo "<script>window.location.assign('/SC_Hackathon/index.html'); </script>";

	}
else
{
	        
             echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<script>window.location.assign('/SC_Hackathon/sc_login.html'); </script>";
		   
} 
  }
else
echo 'Wrong Username';
}

#$_SESSION['username'] = $_POST['uname'];  
$_SESSION["us"] =  $_POST['uname'];

             
// echo $_SESSION["us"];        
        
                 
            
?>
