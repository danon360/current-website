<!-- <!DOCTYPE html> -->

<html>
<?php
if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword'])){

}

?>
<head>
<title>sign up</title>
<link rel="stylesheet" href="signUp.css">
<script type="text/javascript" src="signUp.js"></script>
<?php
if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmpassword']))

?>

</head>

<body>
  <form id="signup" onsubmit="validate()" method= "Post">
    <table>
      <tr>
        <td>Name:</td> <td><input type="text"placeholder="Name" id="name"/></td>
      </tr>
      <tr>
        <td>Last Name:</td> <td><input type="text"placeholder="Last Name" id="lastname"/></td>
      </tr>
      <tr>
        <td>Username:</td> <td><input type="text"placeholder="Username" id="username"/></td>
      </tr>
      <tr>
        <td>Email:</td> <td><input type="text"placeholder="Email" id="email"/></td>
      </tr>
      <tr>
        <td>Password:</td> <td><input type="password"placeholder="Password" id="password"/></td>
      </tr>
      <tr>
        <td>Confirm Password:</td> <td><input type="password"placeholder="Confirm Password" id="confirmpassword"/></td>
      </tr>
      <tr>
        <td><input type="submit" value="submit"/></td>
      </tr>
    </table>
  </form>
</body>
</html>
