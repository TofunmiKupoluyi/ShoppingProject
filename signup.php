<?php
include('menuBar.php');
$firstname=$lastname=$dob=$mob=$yob=$gender=$email=$password=$passwordConfirm="";
$firstnameErr=$lastnameErr=$dobErr=$genderErr=$emailErr=$passwordErr=$passwordConfirmErr="";
$connectionCheck="";
$valid=0;
if(isset($_POST['submitSignUp'])){
$connect= new mysqli("127.0.0.1:3388","root","","shopperng");
$firstname=cleanString($_POST["firstname"]);
if(!empty($firstname)&&strlen($firstname)<30){
$valid+=1;
}
else{
$firstnameErr="Invalid";
$firstname="";
}
$lastname=cleanString($_POST["lastname"]);
if(!empty($lastname)&&strlen($lastname)<30){
$valid+=1;
}
else{
$lastnameErr="Invalid";
$lastname="";
}
$dob=$_POST["dob"];
$mob=$_POST["mob"];
$yob=$_POST["yob"];
if(empty($dob)||empty($mob)||empty($yob)||($mob=="2"&&$dob=="31")||($mob=="4"&&$dob=="31")||($mob=="6"&&$dob=="31")||($mob=="9"&&$dob=="31")||($mob=="11"&&$dob=="31")){
$dobErr="Invalid";
$dob="";
$mob="";
$yob="";
}
else{
    $valid+=1;
}
$gender=$_POST["gender"];
if(!empty($gender)){
$valid+=1;
}
else{
$genderErr="Invalid";
$gender="";
}
$email=cleanString($_POST["email"]);
$select="SELECT EMail FROM Users WHERE EMail='$email'";
$result= $connect->query($select);
if(filter_var($email, FILTER_VALIDATE_EMAIL)&&$result->num_rows==0){
$valid+=1;    
$connectionCheck=$result->num_rows;
}
else if($result->num_rows>0){
$emailErr="E-Mail exists";
}
else if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
$emailErr="Invalid E-Mail";
}

$password=$_POST["password"];
$passwordConfirm=$_POST["passwordConfirm"];
if(strlen($password)>=8&&(preg_match('#[0-9]#',$password))&&($password===$passwordConfirm)){
$valid+=1;
}
else if(empty($password)){
$passwordErr="Please enter a password";
}
else if(!(preg_match('#[0-9]#',$password))){
$passwordErr="Password must contain number";
}
else if(strlen($password)<8){
$passwordErr="Password too short (8 chars)";
}
else if($password!=$passwordConfirm){
$passwordConfirmErr="Passwords don't match";
}
}
if($valid==6){

$sql="INSERT INTO Users(FirstName, LastName, DOB, Gender, EMail, Password) VALUES('$firstname','$lastname','$yob-$mob-$dob', '$gender','$email','$password')";

if($connect->connect_error){
    $connectionCheck= "There is a problem";
}
else{
    $connectionCheck= "Connection succesful";
}
if($connect->query($sql)){
$connectionCheck="Account Created";
}
else{
$connectionCheck="Query failed";
die();
}
}
function cleanString($string){
 $string=htmlspecialchars($string);
 $string=trim($string);
 $string=stripslashes($string);
 return $string;
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="signupStyle.css">
<title>Shopper NG- Sign Up</title>
</head>
<body>
<div id="signupContainer">
<table id="mainPanel">
<tr id="titlePanel">
<td id="titlePanelText">Create a new account</td>
</tr>
<tr>
<td>

<table id="signupForm">
<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
<tr id="firstnameRow"><td>First Name: </td><td><input class="inputs"  type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>"></input><span class="required"> *<?php echo $firstnameErr; ?></span> </td></tr>
<tr id="lastnameRow"><td>Last Name: </td><td><input class="inputs" type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>"></input><span class="required"> *<?php echo $lastnameErr; ?></span></td></tr>

<tr id="dobRow"><td>Date of Birth: </td><td><select class="dob" name="dob" id="dob" >
<option value=""> - Day - </option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>


</select>
<select class="dob" name="mob" id="mob" >
<option value=""> - Month - </option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>
<select class="dob" name="yob" id="yob" >
<option value=""> - Year - </option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
</select>
<span class="required"> *<?php echo $dobErr; ?></span>
</td>
</tr>
<tr id="genderRow"><td>Gender: </td><td><select id="gender" name="gender"><option value="">-Gender-</option><option value="male" <?php if(isset($_POST["gender"])){if($_POST["gender"]=="male"){echo "selected";}} ?>>Male</option>
<option value="female" <?php if(isset($_POST["gender"])){if($_POST["gender"]=="female"){echo "selected";}} ?> >Female</option></select><span class="required"> *<?php echo "$genderErr"; ?></span></td></tr>
<tr id="emailRow"><td>E-Mail: </td><td><input class="inputs" type="text" name="email" id="email" value="<?php echo $email; ?>"></input><span class="required"> *<?php echo $emailErr; ?></span> </td></tr>
<tr id="passwordRow"><td>Password: </td><td><input class="inputs" type="password" name="password" id="password"></input><span class="required"> *<?php echo $passwordErr; ?></span></td></tr>
<tr id="passwordConfirmRow"><td>Retype Password: </td><td><input class="inputs" type="password" name="passwordConfirm" id="passwordConfirm"></input><span class="required"> *<?php echo $passwordConfirmErr; ?></span></td></tr>
<tr><td><?php echo $connectionCheck ?></td><td><input type="submit" name="submitSignUp" id="submitSignUp" value="SIGN UP"></input></td></tr>
</form>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>