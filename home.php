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

$sql6="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products WHERE category='phones/tablets'
ORDER BY Product_ID DESC";
$result6= $connect->query($sql6);
$myProductsRaw= Array();
$num=0;
if($result6->num_rows>0){
while($rows=$result6->fetch_assoc()){
$myProductsRaw[$num]=$rows["Manufacturer"];
$num+=1;
}
}


$namePhonesTablets= Array();
$pricePhonesTablets= Array();
$imagePhonesTablets= Array();
$manufacturerPhonesTablets= Array();
$categoryPhonesTablets= Array();

$sqlPhonesTablets1="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products 
WHERE Category='Phones/Tablets'
ORDER BY Product_ID DESC
LIMIT 1;";

$resultPhonesTablets1=$connect->query($sqlPhonesTablets1);

while($rowsPhonesTablets1= $resultPhonesTablets1->fetch_assoc()){
$namePhonesTablets[0]=$rowsPhonesTablets1["Product_Name"];
$pricePhonesTablets[0]=$rowsPhonesTablets1["Price"];
$imagePhonesTablets[0]=$rowsPhonesTablets1["Image"];
$manufacturerPhonesTablets[0]=$rowsPhonesTablets1["Manufacturer"];
$categoryPhonesTablets[0]= $rowsPhonesTablets1["Category"];
}

$sqlPhonesTablets2="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products WHERE Category='Phones/Tablets'
ORDER BY Product_ID DESC
LIMIT 2;";

$resultPhonesTablets2=$connect->query($sqlPhonesTablets2);

while($rowsPhonesTablets2= $resultPhonesTablets2->fetch_assoc()){
$namePhonesTablets[1]=$rowsPhonesTablets2["Product_Name"];
$pricePhonesTablets[1]=$rowsPhonesTablets2["Price"];
$imagePhonesTablets[1]=$rowsPhonesTablets2["Image"];
$manufacturerPhonesTablets[1]=$rowsPhonesTablets2["Manufacturer"];
$categoryPhonesTablets[1]= $rowsPhonesTablets2["Category"];
}

$sqlPhonesTablets3="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products WHERE Category='Phones/Tablets'
ORDER BY Product_ID DESC
LIMIT 3;";

$resultPhonesTablets3=$connect->query($sqlPhonesTablets3);

while($rowsPhonesTablets3= $resultPhonesTablets3->fetch_assoc()){
$namePhonesTablets[2]=$rowsPhonesTablets3["Product_Name"];
$pricePhonesTablets[2]=$rowsPhonesTablets3["Price"];
$imagePhonesTablets[2]=$rowsPhonesTablets3["Image"];
$manufacturerPhonesTablets[2]=$rowsPhonesTablets3["Manufacturer"];
$categoryPhonesTablets[2]= $rowsPhonesTablets3["Category"];
}


$sqlPhonesTablets4="SELECT Product_Name, Price, Image, Manufacturer, Category FROM products WHERE Category='Phones/Tablets'
ORDER BY Product_ID DESC
LIMIT 4;";

$resultPhonesTablets4=$connect->query($sqlPhonesTablets4);

while($rowsPhonesTablets4= $resultPhonesTablets4->fetch_assoc()){
$namePhonesTablets[3]=$rowsPhonesTablets4["Product_Name"];
$pricePhonesTablets[3]=$rowsPhonesTablets4["Price"];
$imagePhonesTablets[3]=$rowsPhonesTablets4["Image"];
$manufacturerPhonesTablets[3]=$rowsPhonesTablets4["Manufacturer"];
$categoryPhonesTablets[3]= $rowsPhonesTablets4["Category"];
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
background:white;

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
background-color:#f2f2f2;
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
.brandsTitleImage{
color:white;
position:absolute;
width:100%;
height:10%;
background-color:#74e2be;
}
.brandsTitleText{

font-size:1.2vw;
position:absolute;
left:40%;
top:20%;
}
.brandsText{
position:absolute;
top:10%;
left:10%;
font-size:1.1vw;
}
.phonesTabletsLinks{
color:black;
text-decoration:none;
}
.phonesTabletsLinks:hover{
color:red;
}
.buttonViewAll{
position:absolute;
bottom:0;
left:0;
color:white;
font-size:1vw;
background-color:#c0c0c0;
border-style:none;
width:100%;
height:10%;
}
#phoneBrandIconImage{
position:absolute;
left:25%;
top:10%;
width:10%;
height:60%;
}
#latestPhonesTablets{
position:absolute;
height:100%;
width:60%;
top:0;
background-color:#f2f2f2;
left:40%;
border-left:solid;
border-left-color:#f2f2f2;
border-left-width:0.6vw;
}
.latestPhonesTabletsTabs{
position:absolute;
width:50%;
top:0;
background-color:white;
left:0;
border-top:solid;
border-top-left:0;
border-top-color:#74e2be;
}
#latestPhonesTabletsTab1{
left:0;
width:50%;
height:100%
}
#latestPhonesTabletsTab2{
left:51%;
height:48%;
width:24%;
}
#latestPhonesTabletsTab3{
left:76%;
height:48%;
width:24%;
}
#latestPhonesTabletsTab4{
top:51%;
left:51%;
height:49%;
width:50%;
}
.phonesTabletsTopImage{
position:absolute;
width:100%;
height:100%;
left:0;
top:0;
}
@keyframes iconHover{
0%{opacity:100%;}
100%{opacity:0;}
}
.latestPhonesTabletsInfos{
position:absolute;
background-color:white;
width:100%;
height:100%;
top:0;
left:0;
}
.latestPhonesTabletsTitle{
position:absolute;
top:30%;
font-size:2vw;
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
echo "<tr><td><img src='".$image[0]."' class='recentImage'></img></td>";
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
echo "<tr><td><img src='".$image[1]."' class='recentImage'></img></td>";
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
echo "<tr><td><img src='".$image[2]."' class='recentImage'></img></td>";
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
<div class="brandsTitleImage"><img id="phoneBrandIconImage" src="images/phoneicon.png"></img><span class="brandsTitleText">Brands</span></div>
<div class="brandsText">
<?php
$myProductsClean=Array();
$myProductsClean=array_unique($myProductsRaw);
foreach($myProductsClean as $value){
echo "<p><a class='phonesTabletsLinks' href='phones.php?category=$value'>$value</a></p>";
}
?>
</div>
<div class="brandsViewAll"><button class="buttonViewAll">View All</button></div>
</div></td>
<td><div id="latestPhonesTablets">
<div class="latestPhonesTabletsTabs" id="latestPhonesTabletsTab1">
<div class="latestPhonesTabletsInfos" id="latestPhonesTabletsInfo1">  </div>
<table id='phonesTabletsFirstTable'>
<tr><td><img class="phonesTabletsTopImage" src="images/phonetabletimage1.jpg"></img></td></tr>
</table>
</div>
<div class="latestPhonesTabletsTabs" id="latestPhonesTabletsTab2">
<div class='latestPhonesTabletsInfos' id='latestPhonesTabletsInfo2'><span class='latestPhonesTabletsTitle'><center><?php if($resultPhonesTablets2->num_rows>0){ echo $namePhonesTablets[1];} ?> </center></span>
<span class='latestPhonesTabletsPrice'><?php if($resultPhonesTablets2->num_rows>0){ echo '&#8358;'.$pricePhonesTablets[1];} ?> </span>
  </div>
<table id='phonesTabletsSecondTable'>
<tr><td><img class="phonesTabletsTopImage" src="images/phonetabletimage2.jpg"></img></td></tr>
</table>
</div>
<div class="latestPhonesTabletsTabs" id="latestPhonesTabletsTab3">
<div class="latestPhonesTabletsInfos" id="latestPhonesTabletsInfo3">   </div>
<table id='phonesTabletsThirdTable'>
<tr><td><img class="phonesTabletsTopImage" src="images/phonetabletimage3.jpg"></img></td></tr>
</table>
</div>

<div class="latestPhonesTabletsTabs" id="latestPhonesTabletsTab4">
<div class="latestPhonesTabletsInfos" id="latestPhonesTabletsInfo4">   </div>
<table id='phonesTabletsFourthTable'>
<tr><td><img class="phonesTabletsTopImage" src="images/phonetabletimage4.png"></img></td></tr>
</table>
</div>

</div></td>
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
