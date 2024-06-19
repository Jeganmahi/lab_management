<?php
   include("config.php");
   session_start();
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db, $_POST['email']);
      $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
      
      $query = "SELECT * FROM details WHERE id='$myusername' and pass='$mypassword'";
      $query_run = mysqli_query($db, $query);
      $student = mysqli_fetch_array($query_run);
      $role = $student['design'];
      
      $count = mysqli_num_rows($query_run);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if ($count == 1 && $myusername == "admin") {
        // session_register("myusername");
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['login_user'] = $myusername;
        
         $res = [
            'status' => 200,
            'message' => 'Login Successful'
        ];
        echo json_encode($res);
        return;
      }
      else if ($count == 1 && $role == "faculty") {
        // session_register("myusername");
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['login_user'] = $myusername;
        
         $res = [
            'status' => 230,
            'message' => 'Login Successful'
        ];
        echo json_encode($res);
        return;
      }
      else if ($count == 1) {
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['login_user'] = $myusername;
        $res = [
           'status' => 220,
           'message' => 'Login Successful'
       ];
       echo json_encode($res);
       return;
      }
      else if ($count == 0) {
         $res = [
            'status' => 300,
            'message' => 'Failed'
        ];
        echo json_encode($res);
        return;
      }
   }	
?>
