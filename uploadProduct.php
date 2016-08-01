<?php
include('menuBar.php');
$productName=$category=$price=$manufacturer=$seller=$tags=$image="";
$productNameErr=$categoryErr=$priceErr=$manufacturerErr=$imageErr="";
$continue=1;
$servername="127.0.0.1:3388";
$username="root";
$password="";
$database="shopperng";
$connect=new mysqli($servername, $username, $password, $database);
if(isSet($_POST["submitProduct"])){
$productName=cleanString($_POST["ProductName"]);
if(empty($productName)){
$continue=0;
$productNameErr="Required";
}
$category=$_POST["Category"];
if(empty($category)){
$continue=0;
$categoryErr="Required";
}
$price=$_POST["price"];
if(empty($price)){
$continue=0;
$priceErr="Required";
}
else if(!is_numeric($price)){
$continue=0;
$priceErr="Error- Number required";
}
$manufacturer=$_POST["manufacturer"];
if(empty($manufacturer)){
$manufacturerErr="Required";
}
$seller=$_POST["seller"];
$tags=$_POST["tags"];
$file_dir="images/productImages/";
$file_name=$file_dir.basename($_FILES["fileToUpload"]["name"]);
$file_type=strtolower(pathinfo($filename, PATHINFO_EXTENSION));
if($_FILES["fileToUpload"]["size"]==0){
$continue=0;
$imageErr="Required";
}
else if(!getImageSize($_FILES["fileToUpload"]["tmp_name"])){
$continue=0;
$imageErr="Error- File uploaded not image";
}
else {
$image=$file_name;
}

if($continue==1){
$imageErr="Complete";
$sql="INSERT INTO products(Product_Name, Category, Price, Date_Posted, Manufacturer, seller, tags, Image) VALUES('$productName','$category',$price, ".Date('Y-m-d').", '$manufacturer', '$seller', '$tags', '$image') ";
if($connect->query($sql)){
$imageErr="succesful";
if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_name)){
$imageErr="upload successful and updated";
}
else{
$imageErr="upload unsuccesful";
}
}

else{
$imageErr=$connect->error;
}
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
<style>
#signupContainer{
height:100%;
width:100%;
position:relative;
top:16.5%;
display:block;
background-color:white;
}
.required{
color:red;
font-size:11;
font-size:1vw;

}
#mainPanel{
height:85%;
width:80%;
position:relative;
top:10%;
left:10%;
right:10%;
border-style:solid;
border-color:#a6a6a6;
border-width:1;
border-width:0.1vw;
}
#titlePanel{
color:#666666;
width:98%;
height:10%;
font-size:1vw;
position:absolute;
top:15%;
left:1%;
right:1%;
border-bottom:solid;
border-width:1;
border-width:0.1vw;
}
#titlePanelText{
position:absolute;
bottom:2%;
font-size:24;
font-size:2vw;
}
#signupForm{
color:#666666;
width:70%;
height:70%;
left:25%;
position:absolute;
top:30%;
font-size:12;
font-size:1vw;
border-color:#a6a6a6;
overflow:hidden;
}

.inputs{
width:40%;
height:100%;
border-style:solid;
border-width:1;
border-width:0.1vw;  
border-color:#a6a6a6;
padding:1%;
font-size:12;
font-size:1vw;
}
.dob{
height:100%;
width:10%;
border-style:solid;
border-width:1;
border-width:0.1vw;
border-color:#a6a6a6;
padding:1%;
font-size:12;  
font-size:1vw; 
-moz-appearance: none;
-webkit-appearance: none;
}

#category{
height:100%;
width:30%;
border-style:solid;
border-width:0.1vw;
border-color:#a6a6a6;
font-size:12;
font-size:1vw;
padding:1%;
-moz-appearance: none;
-webkit-appearance: none;
}

#submitProduct{
width:40%;
height:90%;
background-color:#ff9224;
border-style:none;
color:white;
font-weight:bold;
font-size:1vw;   
-webkit-appearance:none;
border-radius:0px; 
}
#fileToUpload{
font-size:1vw;
}
</style>
</head>
<body>
<div id="signupContainer">
<table id="mainPanel">
<tr id="titlePanel">
<td id="titlePanelText">Upload a Product</td>
</tr>
<tr>
<td>

<table id="signupForm">
<form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
<tr><td>Product Name: </td><td><input name="ProductName" class="inputs" value="<?php echo $productName ?>"></input><span class="required"> *<?php echo $productNameErr ?></span></td></tr>
<tr><td>Category: </td><td><select name="Category" id="category" ><option>Select</option><option name="Phones/Tablets" value="Phones/Tablets" <?php if($_POST['Category']=='Phones/Tablets'){echo "selected";} ?> >Phones/Tablets</option><option name="Fashion" value="Fashion" <?php if($_POST['Category']=='Fashion'){echo "selected";} ?>>Fashion</option><option name="Home_Appliances" value="Home Appliances" <?php if($_POST['Category']=='Home Appliances'){echo "selected";} ?>>Home Appliances</option></select><span class="required"> *<?php echo $categoryErr ?></td></tr>
<tr><td>Price: </td><td><input name="price" class="inputs"></input><span class="required"> *<?php echo $priceErr ?></span></td></tr>
<tr><td>Manufacturer: </td><td><input name="manufacturer" class="inputs"></input><span class="required"> *<?php echo $manufacturerErr ?></span></td></tr>
<tr><td>Seller: </td><td><input name="seller" class="inputs"></input></td></tr>
<tr><td>Tags: </td><td><input name="tags" class="inputs"></input></td></tr>
<tr><td>Image: </td><td><input type="file" name="fileToUpload" id="fileToUpload"></input><span class="required"> *<?php echo $imageErr ?></span></td></tr>
<tr><td></td><td><input type="submit" name="submitProduct" id="submitProduct" value="SUBMIT"></input></td></tr>
</form>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>