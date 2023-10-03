<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ?");
   $select_admin->execute([$name]);

   if($select_admin->rowCount() > 0){
      $message[] = 'username already exist!';
   }
   
   else {
      $password_valid = true; // Initialize a flag to check password validity
  
      if ($pass != $cpass) {
          $message[] = 'Confirm password does not match!';
          $password_valid = false; // Password is not valid
      }
  
      if (strlen($pass) < 10 || !preg_match('/[[:lower:]]/', $pass)) {
         $message[] = 'Password must contain at least 10 characters, including both uppercase and lowercase letters.';
         $password_valid = false; // Password is not valid
     }
  
      if ($password_valid) {
          // Use $pass instead of $cpass when inserting into the database
          $insert_admin = $conn->prepare("INSERT INTO `admins` (name, password) VALUES (?, ?)");
          $insert_admin->execute([$name, $pass]);
          $message[] = 'New admin registered successfully!';
      }
  }
  

  
  
  
  
  
  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register admin</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
<div class="dashboard">
<section class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <div class="password-container">
                <input type="password" id="password" name="pass" required placeholder="Enter your password" required maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">   
                <button type="button" id="togglePassword">
                    <i class="far fa-eye"></i>
                </button>
      </div>
      <div class="password-container1">
                <input type="password" id="cpassword" name="cpass" required placeholder="confirm your password" required maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">   
                <button type="button" id="ctogglePassword">
                    <i class="far fa-eye"></i>
                </button>
      </div>
      
      <input type="submit" value="register now" class="btn" name="submit">
   </form>
</div>
</section>









<?php include '../components/admin_footer.php'; ?>


<script src="../js/admin_script.js"></script>
<script src="../js/pass.js"></script>  
</body>
</html>