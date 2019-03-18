<?php
require 'authenticate.php';


if(isset($_POST['username'])&& isset($_POST['password'])){
  $inputusername = $_POST['username'];
  $inputpassword = $_POST['password'];

  $sql = "SELECT * FROM userdata WHERE username = '$inputusername' and password = '$inputpassword'";
  //submitting an sql query
  $response = $connection->query($sql);
  //$data is an associative array
  $data =$response->fetch_assoc();
}
//ini_set('display_errors',1);
$ip_adress = $_SERVER['REMOTE_ADDR'];
echo "$ip_adress";

  //starting session
  session_start();
  //checks if session "logged_in" exists. if it does, it redirects to page home.php
  if(isset($_SESSION['logged_in'])&&($_SESSION['logged_in']==true)){
    //header("Location: home.php");
  }
  //checking if the forum has been submited before
  if(isset($_POST['username'])&& isset($_POST['password'])){
    if($inputusername==$data['username']&&$inputpassword==$data['password']){
      $_SESSION['logged_in']=true;
      header("Location: home.php");

    }
  }

 ?>
<!-- <!DOCTYPE html> -->
<html>
<head> <title> Login 2</title>
  <style>
  #frm {
    border: none;
    position:absolute;
    margin-left: 43%;
    top:18%;
  }
  #disclaimer{
      position:absolute;
      margin-left: 19%;
      top:10%;
      color: white;

  }
  td {
    color: #E4B272;
   padding:3%;
   text-align:center;
 }
 body {
   background-image: url("skyline-3581739.jpg");
   background-size: cover;
 }
 input {
   border-style: solid;
   background-color:#5B89A4;
   border-color: #5B89A4;
 }
 input::placeholder{
   color: #ACACAC;
 }
 button{
   border-style: solid;
   background-color:#5B89A4;
   border-color:#5B89A4;
 }
  </style>
  <script type="text/javascript">
function redirect(){

  location.href="signUp.php";
  return false;
}
  </script>
</head>
<body>
    <span id="disclaimer">Disclaimer: Please note that user credidentials may be deleted every once in a while, therefore usernames and passwords are not permanent</span>
  <form method="post" action="index.php">
    <table id="frm">
      <tr>
        <td>
          Username:
        </td>
        <td>
          <input type="text" placeholder="please input username" name="username"></input>
        </td>
      </tr>
      <tr>
        <td>
          Password:
        </td>
        <td>
          <input type="password" placeholder=" please input your password" name="password"></input>
        </td>
      </tr>

      <tr>
        <td>
          <input type="submit"></input>
        </td>
        <td>
          <button id="sbutton" onclick="return redirect()">Sign Up </button>
        </td>
      </tr>

    </table>
  </form>
</body>
</html>
