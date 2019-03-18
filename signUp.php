<!-- <!DOCTYPE html> -->

<html>
<?php
session_start();
?>
<head>
<title>sign up</title>

<script type="text/javascript" src="signUp.js"></script>
<link rel="stylesheet" href="signUp.css">
</head>

<body>
  <form id="signup" action ="register.php"  method= "Post">
    <table>
      <tr>
        <td>Name:</td> <td><input type="text"placeholder="Name" name="name" id="name"/></td>
      </tr>
      <tr>
        <td>Last Name:</td> <td><input type="text"placeholder="Last Name" name="lastname" id="lastname"/></td>
      </tr>
      <tr>
        <td>Username:</td> <td><input type="text"placeholder="Username" name= "username" id="username"/></td>
      </tr>
      <tr>
        <td>Email:</td> <td><input type="text"placeholder="Email" name = "email" id="email"/></td>
      </tr>
      <tr>
        <td>Password:</td> <td><input type="password"placeholder="Password" name = "password" id="password"/></td>
      </tr>
      <tr>
        <td>Confirm Password:</td> <td><input type="password"placeholder="Confirm Password"  id="confirmpassword"/></td>
      </tr>
      <tr>
        <td><input type="submit" onsubmit="validate();return false;" value="submit"/></td>
      </tr>
    </table>
  </form>
</body>
</html>
