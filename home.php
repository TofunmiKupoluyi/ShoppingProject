<?php 
include("menuBar.php");
$servername="127.0.0.1:3388";
$username="root";
$password="";
$db="shopperng";
$connect= new mysqli($servername, $username, $password, $db);
$name= Array();
$price= Array();
$image= Array();
$manufacturer= Array();
$category= Array();

$sql1="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products
ORDER BY Product_ID DESC
LIMIT 1;";

$result1=$connect->query($sql1);

while($rows1= $result1->fetch_assoc()){
$name[0]=$rows1["Product_Name"];
$price[0]=$rows1["Price"];
$image[0]=$rows1["Image"];
$manufacturer[0]=$rows1["Manufacturer"];
$category[0]= $rows1["Category"];
}

$sql2="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products
ORDER BY Product_ID DESC
LIMIT 2;";

$result2=$connect->query($sql2);

while($rows2= $result2->fetch_assoc()){
$name[1]=$rows2["Product_Name"];
$price[1]=$rows2["Price"];
$image[1]=$rows2["Image"];
$manufacturer[1]=$rows2["Manufacturer"];
$category[1]= $rows2["Category"];
}

$sql3="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products
ORDER BY Product_ID DESC
LIMIT 3;";

$result3=$connect->query($sql3);

while($rows3= $result3->fetch_assoc()){
$name[2]=$rows3["Product_Name"];
$price[2]=$rows3["Price"];
$image[2]=$rows3["Image"];
$manufacturer[2]=$rows3["Manufacturer"];
$category[2]= $rows3["Category"];
}

$sql4="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products
ORDER BY Product_ID DESC
LIMIT 4;";

$result4=$connect->query($sql4);

while($rows4= $result4->fetch_assoc()){
$name[3]=$rows4["Product_Name"];
$price[3]=$rows4["Price"];
$image[3]=$rows4["Image"];
$manufacturer[3]=$rows4["Manufacturer"];
$category[3]= $rows4["Category"];
}

$sql5="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products
ORDER BY Product_ID DESC
LIMIT 5;";

$result5=$connect->query($sql5);

while($rows5= $result5->fetch_assoc()){
$name[4]=$rows5["Product_Name"];
$price[4]=$rows5["Price"];
$image[4]=$rows5["Image"];
$manufacturer[4]=$rows5["Manufacturer"];
$category[4]= $rows5["Category"];
}
?>
<html>
<head>
<style>
#homeContainer{
height:200%;
width:94%;
left:3%;
position:relative;
top:16.5%;
display:block;
background-color:#f2f2f2;
overflow:hidden;
}
@keyframes myFrame{
from{left:0;}
to{left:100%}
}
@keyframes myFrame1{
from{left:-100%;}
to{left:0}
}
@keyframes leftMyFrame{
from{left:100%;}
to{left:0}
}
@keyframes leftMyFrame1{
from{left:0;}
to{left:-100%};
}
#carouselContainer{
height:30%;
width:100%;
left:0;
position:absolute;
top:0%;
border-top:none;
overflow:hidden;
}

#leftButton{
position:absolute;
height:100%;
width:5%;
left:0;
-webkit-appearance:none;
border-style:none;
background-color:transparent;
background-image:url("images/leftCarousel.png");
background-size:100% 50%;
background-position:50%;
background-repeat:no-repeat;
color:#ff9224;
font-weight:bold;
font-size:5vw;
z-index:1;
}
#rightButton{
position:absolute;
height:100%;
width:6%;
right:0;
-webkit-appearance:none;
border-style:none;
background-color:transparent;
background-image:url("images/rightCarousel.png");
background-size:100% 50%;
background-position:50%;
background-repeat:no-repeat;
color:#ff9224;
font-weight:bold;
font-size:5vw;
z-index:1;
}
.carouselImages{
width:100%;
height:100%;
position:absolute;

}
#image1{
left:0;
}
#image2{
left:-100%;
}
#image3{
left:-100%;
}
#image4{
left:-100%;
}
#image5{
left:-100%;
}
#latestArrivals{
position:relative;
top:32%;
left:0;
width:100%;
height:12%;
vertical-align:middle;
background-color:white;
}
#titlePanel{
background-image:url("images/latestImage.jpg");
background-size:100% 100%;
color:white;
top:0;
position:absolute;
width:15%;
height:100%;
font-size:1vw;
font-weight:bold;

}
.recentImage{
position:absolute;
width:20%;
height:60%;
top:20%;
left:5%;
}
.latestInfoName{
color:#404040;
position:absolute;
left:40%;
top:20%;
overflow:hidden;
max-width:50%;
max-height:22%;
font-size:1.0vw;
}
.latestInfoPrice{
color:red;
position:absolute;
top:44%;
left:40%;
font-size:1.3vw;
}
#firstTable{
position:absolute;
height:100%;
width:28.33%;
left:15%;
border-left:solid;
border-color:#f2f2f2;
font-size:1.1vw;
background-color:white;
}

#secondTable{
position:absolute;
height:100%;
width:28.33%;
left:43.33%;
border-left:solid;
border-color:#f2f2f2;
font-size:1.1vw;
background-color:white; 
}
#thirdTable{
position:absolute;
height:100%;
width:28.33%;
left:71.66%;
border-left:solid;
border-color:#f2f2f2;
font-size:1.1vw;
background-color:white;    
}
#fourthTable{
position:absolute;
top:70%;
border-left:solid; 
font-size:1.1vw; 
}
#fifthTable{
position:absolute;
top:90%;
border-left:solid; 
font-size:1.1vw; 
}
#catPhonesTablets{
position:absolute;
top:46%;
width:100%;
height:30%;
background:red;
}
.titleImage{
position:absolute;
height:100%;
width:20%;
top:0;
left:0;
}
.brandsDiv{
position:absolute;
height:100%;
width:20%;
top:0;
background-color:white;
left:20%;
}
.latestInfoButton{
color:white;
width:40%;
height:20%;
position:absolute;
top:70%;
left:40%;
background-color:#ff9224;
border-style:none;
border-radius:0 0 10px 10px;
border-radius:0 0 1vw 1vw;
font-size:12;
font-size:1vw;
font-weight:bold;
}
</style>
</head>
<body>
<div id="homeContainer">
<div id="carouselContainer">
<button id="leftButton"></button>
<button id="rightButton"> </button>
<img class="carouselImages" id="image1" src="images/carouselImage1.png"></img>
<img class="carouselImages" id="image2" src="images/carouselImage2.png"></img>
<img class="carouselImages" id="image3" src="images/carouselImage3.png"></img>
<img class="carouselImages" id="image4" src="images/carouselImage4.png"></img>
<img class="carouselImages" id="image5" src="images/carouselImage5.png"></img>
</div>
<div id="latestArrivals">
<div id="titlePanel">
</div>
<table id="firstTable">
<?php if($result1->num_rows>0){
echo "<tr><td><img src='images/".$image[0]."' class='recentImage'></img></td>";
echo "<td><span class='latestInfoName'>".$name[0]." - ".$manufacturer[0]." - ".$category[0]."</span></td></tr>";
echo "<td><span class='latestInfoPrice'> &#8358; ".$price[0]." </span></td>";
echo "<td><button class='latestInfoButton' id='latestInfoButton1'> BUY NOW </button></td></tr> ";
}
else{
die("unsuccesful");
} ?>
</table>
<table id="secondTable">
<?php if($result2->num_rows>0){
echo "<tr><td><img src='images/".$image[1]."' class='recentImage'></img></td>";
echo "<td><span class='latestInfoName'>".$name[1]." - ".$manufacturer[1]." - ".$category[1]."</span></td></tr>";
echo "<td><span class='latestInfoPrice'> &#8358; ".$price[1]."</span></td></tr>";
echo "<td><button class='latestInfoButton' id='latestInfoButton2'> BUY NOW </button></td></tr> ";
}
else{
die("unsuccesful");
} ?>
</table>
<table id="thirdTable">
<?php if($result3->num_rows>0){
echo "<tr><td><img src='images/".$image[2]."' class='recentImage'></img></td>";
echo "<td><span class='latestInfoName'>".$name[2]." - ".$manufacturer[2]." - ".$category[2]."</span></td></tr>";
echo "<td><span class='latestInfoPrice'> &#8358; ".$price[2]."</span></td></tr>";
echo "<td><button class='latestInfoButton' id='latestInfoButton3'> BUY NOW </button></td></tr> ";
}
else{
die("unsuccesful");
} ?>
</table>


<table id="fourthTable">
<?php if($result4->num_rows>0){

}
else{
die("unsuccesful");
} ?>
</table>

<table id="fifthTable">
<?php if($result5->num_rows>0){

}
else{
die("unsuccesful");
} ?>
</table>
</div>
<div>
<table id="catPhonesTablets">
<tr>
<td><img class="titleImage" src="images/phonetabletimage.jpg"></img></td>
<td><div class="brandsDiv">
<?php
$sql6="SELECT manufacturer FROM products WHERE category='phones/tablets'";
$result6= $connect->query($sql6);
$myProductsRaw= Array();
$num=0;
if($result6->num_rows>0){
while($rows=$result6->fetch_assoc()){
$myProductsRaw[$num]=$rows["manufacturer"];
$num++;
}
$myProductsClean=array_unique($myProductsRaw);
for($i=0;$i<count($myProductsClean);$i++){
echo "<p>".$myProductsRaw[$i]."</p>";
}
}
?>
</div></td>
<td><table>
<tr>
<td></td>
<td>Hello</td>
<td>Hello</td>
<td>Hello</td>
</tr>
<tr>
<td>Hello</td>
<td>Hello</td>
<td>Hello</td>
<td>Hello</td>
</tr>
</table></td>
</tr>
</table>
</div>
</div>
</body>

</html>
<script>
var rightButton= document.getElementById("rightButton");
var leftButton= document.getElementById("leftButton");
var count=0;
var lcount=0;
var image1=document.getElementById("image1");
var image2=document.getElementById("image2");
var image3=document.getElementById("image3");
var image4=document.getElementById("image4");
var image5=document.getElementById("image5");
function rightButtonClick(){
if(count==0){
image1.style.animationName="myFrame";
image1.style.animationDuration="2s";
image2.style.animationName="myFrame1";
image2.style.animationDuration="2s";
image1.style.animationFillMode="forwards";
image2.style.animationFillMode="forwards";
count+=1;
}
else if(count==1){
image2.style.animationName="myFrame";
image2.style.animationDuration="2s";
image2.style.animationDirection="normal";
image3.style.animationName="myFrame1";
image3.style.animationDuration="2s";
image3.style.animationDirection="normal";
image2.style.animationFillMode="forwards";
image3.style.animationFillMode="forwards";
count+=1;
}
else if(count==2){
image3.style.animationName="myFrame";
image3.style.animationDuration="2s";
image4.style.animationName="myFrame1";
image4.style.animationDuration="2s";
image3.style.animationFillMode="forwards";
image4.style.animationFillMode="forwards";
count+=1;
}
else if(count==3){
image4.style.animationName="myFrame";
image4.style.animationDuration="2s";
image5.style.animationName="myFrame1";
image5.style.animationDuration="2s";
image4.style.animationFillMode="forwards";
image5.style.animationFillMode="forwards";
count+=1;
}
else if(count==4){
image5.style.animationName="myFrame";
image5.style.animationDuration="2s";
image1.style.animationName="myFrame1";
image1.style.animationDuration="2s";
image5.style.animationFillMode="forwards";
image1.style.animationFillMode="forwards";
count=0;
}
}
function leftButtonClick(){
if(count==0){
image5.style.animationName="leftMyFrame";
image5.style.animationDuration="2s";
image1.style.animationName="leftMyFrame1";
image1.style.animationDuration="2s";
image5.style.animationFillMode="forwards";
image1.style.animationFillMode="forwards";
count=4;
}
else if(count==1){
image1.style.animationName="leftMyFrame";
image1.style.animationDuration="2s";
image2.style.animationName="leftMyFrame1";
image2.style.animationDuration="2s";
image1.style.animationFillMode="forwards";
image2.style.animationFillMode="forwards";
count-=1;
lcount+=1;
}
else if(count==2){
image2.style.animationName="leftMyFrame";
image2.style.animationDuration="2s";
image3.style.animationName="leftMyFrame1";
image3.style.animationDuration="2s";
image2.style.animationFillMode="forwards";
image3.style.animationFillMode="forwards";
count-=1;
}
else if(count==3){
image3.style.animationName="leftMyFrame";
image3.style.animationDuration="2s";
image4.style.animationName="leftMyFrame1";
image4.style.animationDuration="2s";
image3.style.animationFillMode="forwards";
image4.style.animationFillMode="forwards";
count-=1;
}
else if(count==4){
image4.style.animationName="leftMyFrame";
image4.style.animationDuration="2s";
image5.style.animationName="leftMyFrame1";
image5.style.animationDuration="2s";
image4.style.animationFillMode="forwards";
image5.style.animationFillMode="forwards";
count-=1;
}
}
rightButton.addEventListener("click", rightButtonClick);
leftButton.addEventListener("click", leftButtonClick);
</script>
