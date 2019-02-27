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
  </style>

</head>
<body>

  <?php
  ini_set('display_errors',1);
  $ip_adress = $_SERVER['REMOTE_ADDR'];
  echo "$ip_adress";

    $username="head";
    $password="hunter";

    //starting session
    session_start();
    //checks if session "logged_in" exists. if it does, it redirects to page home.php
    /*if(isset($_SESSION['logged_in'])&&($_SESSION['logged_in']==true)){
      header("Location: home.php");
    }*/
    //checking if the forum has been submited before
    if(isset($_POST['username'])&& isset($_POST['password'])){
      if(($username==$_POST['username'])&& ($password==$_POST['password'])){
        $_SESSION['logged_in']=true;
        //header("Location: home.php");

      }
    }

   ?>
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
        <td colspan="2">
          <input type="submit"></input>
        </td>
      </tr>

    </table>
  </form>
</body>
</html>
