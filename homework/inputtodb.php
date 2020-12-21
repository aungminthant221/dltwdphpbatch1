<?php

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbtest");

function dbconnection(){
      $db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
      if(mysqli_connect_errno()>0){
            die("Connection Failed!");
      }else {
          return $db;
      }
}

function passcode($pass){
    $safepw=md5(sha1(crypt($pass,false)));
    return $safepw;
}


function insertdata($name,$email,$spw,$phone,$gender,$dob){
      $database=dbconnection();
      $query="INSERT INTO users (name,email,password,phone,gender,dob) VALUES ('$name','$email','$spw','$phone','$gender','$dob')";
      $result=mysqli_query($database,$query);
      $newroleid=mysqli_insert_id($database);

      if($newroleid > 0){
          echo "Inserting data successful. New role is is ${newroleid}";
      }else {
        echo  "Failed to insert data";
      }
}

if(isset($_POST["register"])){
  $name=$_POST["username"];
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $spw=passcode($pass);
  $phone=$_POST["phno"];
  $gender=$_POST["gender"];
  $dob=$_POST["dob"];
  insertdata($name,$email,$spw,$phone,$gender,$dob);
  header("Location:profile.html");
}



 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Register Form</title>
     <link href="css/registerform.css" rel="stylesheet" type="text/css">
   </head>
   <body>
     <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
     <table>
       <thead>
         <tr>
           <th><legend>★━━━━━━━━Registeration Form━━━━━━━━★</legend></th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <!-- <td><label for="username">User Name</label></td> -->
           <td><legend>User Name</legend><input type="text" name="username" id="username" class="username" placeholder="Type your name..."></td>
         </tr>
         <tr>
           <!-- <td><label for="password">Password</label></td> -->
           <td><legend>Email</legend><input type="Email" name="email" id="email" class="email" placeholder="Type your email..."></td>
         </tr>
         <tr>
           <!-- <td><label for="username">User Name</label></td> -->
           <td><legend>Password</legend><input type="password" name="password" id="password" class="password" placeholder="Type password..."></td>
         </tr>
         <tr>
           <!-- <td><label for="username">User Name</label></td> -->
           <td><legend>Confirm Password</legend><input type="password" name="password" id="password" class="password" placeholder="Retype above password..."></td>
         </tr>
         <tr>
           <td><legend>Phone Number</legend>
               <input type="number" name="phno" id="phno" class="phno" placeholder="Enter your phone number...">
           </td>
         </tr>
         <tr>
           <td><legend>Choose your gender</legend>
             <input type="radio" name="gender" id="gender" class="" value="1">Male
 		        <input type="radio" name="gender" id="gender" class="" value="0">Female
           </td>
         </tr>
         <tr>
           <td><legend>Date of Birth</legend>
               <input type="date" name="dob" id="dob" class="">
           </td>
         </tr>
         <tr>
           <td>
               <input type="checkbox" name="rule" id="rule" class="rule">
               <legend>I accept the Terms of Service<br/> and I agree to the Privacy Policy</legend>
           </td>
         </tr>
       </tbody>
       <tfoot >
         <tr>
           <td>
           <input type="reset" name="reset" id="reset" class="reset" value="Reset">
           <input type="submit" name="register" id="register" class="register" value="Register">
           </td>
         </tr>
       </tfoot>
     </table>
     </form>
     <p>
       <b>
         Already have an account?
         <a href="login.html" target="_top">Log In!</a>
       </b>
     </p>
   </body>
 </html>
