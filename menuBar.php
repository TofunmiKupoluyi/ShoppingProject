<?php
$email=$password="";
$signedIn=false; // SignedIn changed to true if logged in
if(isset($_POST["submitLogin"])){
$email=$_POST["email"];
$password=$_POST["password"];
$servername="127.0.0.1:3388";
$user="root";
$pass="";
$database="shopperng";
$connect= new mysqli($servername, $user, $pass, $database);
$sql="SELECT password FROM users WHERE email='$email'";
$result= $connect->query($sql);
if($result->num_rows>0){
$row= $result->fetch_assoc();
if($row["password"]==$password){
$signedIn=true;
}
else{
header('Location: signup.php'); 
}
}
else{
header('Location: signup.php');    
}
}
?>
<html>
<head>

<!-- CSS in menuStyle.css -->

<link rel="stylesheet" type="text/css" href="menuStyle.css">
</head>
<body class="body">

<table id="menuTable">
<tr id="searchBar" name="searchBar">

<form method="POST" action="<?php htmlspecialchars('search.php') ?>">
<td><img src="images/logo3.png" id="logo"></img>
<td><input type="text" name="searchQuery" id="searchQuery" placeholder="Search for products, brands and categories"></input></td>
<td><input id="search" type="submit" name="search" value="SEARCH"></input></td>
<td><button name="cart" id="cart"></button></td>
</form>
<td><button id="loginButton" >LOGIN</button></td>
</tr>
<tr>
<td>
<div id="loginDiv">
<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
<table>
<tr><td><input id="emailInput" name="email" type="text" placeholder="E-Mail"></td></tr>
<tr><td><input id="passwordInput" name="password"  type="password" placeholder="Password"></td></tr>
<tr><td><input id="submitLogin" name="submitLogin" type="submit" value="LOGIN"></td></tr>
</table>
</form>
<span id="createAccountLink">New Customer? <a id="createAccountWindow" href="<?php echo "signup.php?username=$username"; ?>">Sign Up</a></span>
</div>
</td>
</tr>
<tr>
<td>
<div id="categoryDiv">
<table id="categoryTable">
<tr><td><center><button class="categoryButton" onclick="document.location.href='home.php'">Home</button></center></td>
<td><center><button class="categoryButton" onclick="document.location.href='phones.php'">Phones/ Tablets</button></center></td>
<td><center><button class="categoryButton" onclick="document.location.href='fashion.php'">Fashion</button></center></td>
<td><center><button class="categoryButton" onclick="document.location.href='homeapp.php'">Home Appliances</button></center></td>
<td><center><button class="categoryButton" onclick="document.location.href='todaydeal.php'">Today's Deals</button></center></td></tr>
</table>
</div>
</tr>
</tr>
</table>

<!-- Script starts here, don't move-->
<script>
var loginButton= document.getElementById("loginButton");
var count=0
loginButton.addEventListener("click", function(){if(count==0){
    count+=1;
    loginShow();
    }
    else if(count==1){
        count-=1;
        loginShow();
    }}
);

function loginShow(){
if(count==1){
document.getElementById('loginDiv').style.visibility='visible';
document.getElementById('loginDiv').style.animationName='myAnimationLoginShow';
document.getElementById('loginDiv').style.animationDuration='1s';
}
else if(count==0){
document.getElementById('loginDiv').style.visibility='hidden';
document.getElementById('loginDiv').style.animationName='myAnimationLoginFade';
document.getElementById('loginDiv').style.animationDuration='1s';
}
}

<?php
if($signedIn==true){
echo "document.getElementById('loginDiv').innerHTML='Welcome $email'"; 
}
?>
</script>

</body>
</html>
