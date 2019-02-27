function validate() {
var name = document.forms["signup"]["name"].value;
var lastname = document.forms["signup"]["lastname"].value;
var username = document.forms["signup"]["username"].value;
var email = document.forms["signup"]["email"].value;
var password = document.forms["signup"]["password"].value;
var confirmpassword = document.forms["signup"]["confirmpassword"].value;

if(name==""||lastname==""||username==""||email==""||password==""||confirmpassword=="")
alert("Please make sure all the feilds are filled");

if(password != confirmpassword){
  alert("password and confirm password are incorrect");
}
}
