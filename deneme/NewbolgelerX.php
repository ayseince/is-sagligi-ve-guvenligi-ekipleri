<?php
require_once("isgpro.php");

$sql = "SELECT  id, adi, soyadi, aktiflik, resim, bolgeNo FROM ekipler  WHERE  ekipNo=1";
$result = $conn->query($sql);

echo'
<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="./style.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}


/* Style the header */
header {
  background-image: url(images/bolgelerHead.jpg);+
  background-size: 100% 100%;
  padding: 4vw;
}

/* Clear floats after the columns */
section{
   background-image: url(images/kisiSayilariBody.jpg);
   background-repeat: round;
  background-size: 100% 100%;
}

/* Style the footer */
footer {
  background-image: url(images/kisiSayilariFooter.jpg);
  background-size: 100% 100%;

    padding:3.2vw ;
}

--------------------------------------------------------------------------------------------------------------------------------------------
******************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------
div.polaroid2 {
	margin-top:-20px;
  width: 300%;
}

#NE2 {
	
    position:relative ;
    width:100%;
    height:360%;
  

}
div.polaroid {
  width: 80%;
  background-color: black;
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 3), 0 12px 40px 0 rgba(0, 0, 0, 3);
  margin-bottom: 25px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
  margin: 0 auto;
  
 
}

td, th {
 border-bottom: 1px solid #000;
  text-align: left;
  padding: 16px;
  
}



#NW {
    position:relative ;
    width:95%;
    height:21%;
    top:5%;
    margin-left:auto; margin-right:0;
    background:black
}
#NE {
    position:relative ;
    width:95%;
    height:21%;
    top:5%;
    margin-left:auto; margin-right:0;
    background:green
}
#SW {
    position:relative ;
    width:95%;
    height:21%;
   top:5%;
    margin-left:auto; margin-right:0;
    background:blue
}
#SE {
    position:relative ;
    width:95%;
    height:21%;
   top:5%;
    margin-left:auto; margin-right:0;
    background:orange
}
#SE, #SW {
    border-top:0px solid white;
}
#NE, #SE {
    border-left:0px solid white;
}

</style>
</head>
<body background="kisiSayilariBody.jpg">

<header>
</header>

<section>
		<div id="NW" class="polaroid" style= "background-image: url(arka12.jpg); background-repeat:no-repeat; background-size: cover;"><p style="color: #ffffff; font-size:90%; padding-left:0.5em; padding-top:0.5em;" >AKTİF YANGIN SÖNDÜRME EKİBİ</p>
<br><br><br><br>
<table><tr><td >
			'; 
for($i = 1; $i < 8; $i++) {
	switch($i){
	case 1:
	$bolgeAdı="NİZAMİYE";
	break;
	case 2:
	$bolgeAdı="SLASHER";
	break;
	case 3:
	$bolgeAdı="KLİMA";
	break;
	case 4:
	$bolgeAdı="HASİL";
	break;
	case 5:
	$bolgeAdı="İDARİ OFİSLER";
	break;
	case 6:
	$bolgeAdı="YANGIN DAİRESİ";
	break;
	case 7:
	$bolgeAdı="DENİM ELEKTRİK";
	break;
	}
	
  $sql = "SELECT  id, adi, soyadi, aktiflik FROM ekipler  WHERE  ekipNo=1 AND aktiflik=1 AND bolgeNo=".$i."";
$result = $conn->query($sql);


			echo'
	
	<table ><th bgcolor="#ffffff" style="  font-size:90%;"> '.$bolgeAdı.' </th>

 
	
			'; 
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {			
	echo'
			<tr>
				<td style="color: #000000; background:#ffffff; font-size:90%;" >-'.$row["adi"]. ' ' . $row["soyadi"].'</td>	
			</tr>
			
			
			'; 
			 }
			  echo'</table></td> <td>';
} 
 
 
}
			echo'
			</td></tr></table>
</div>
<div id="NE" class="polaroid" style= "background-image: url(arka13.jpg); background-repeat:no-repeat; background-size: cover;">><p style="color: #ffffff; font-size:90%; padding-left:0.5em; padding-top:0em;" >AKTİF İLK YARDIM MÜDAHALE EKİBİ</p>
<br><br><br><br>
<table><tr><td >
			'; 
for($i = 1; $i < 8; $i++) {
	switch($i){
	case 1:
	$bolgeAdı="NİZAMİYE";
	break;
	case 2:
	$bolgeAdı="SLASHER";
	break;
	case 3:
	$bolgeAdı="KLİMA";
	break;
	case 4:
	$bolgeAdı="HASİL";
	break;
	case 5:
	$bolgeAdı="İDARİ OFİSLER";
	break;
	case 6:
	$bolgeAdı="YANGIN DAİRESİ";
	break;
	case 7:
	$bolgeAdı="DENİM ELEKTRİK";
	break;
	}
	
  $sql = "SELECT  id, adi, soyadi, aktiflik FROM ekipler  WHERE  ekipNo=2 AND aktiflik=1 AND bolgeNo=".$i."";
$result = $conn->query($sql);


			echo'
	
	<table ><th bgcolor="#ffffff" style="  font-size:90%;"> '.$bolgeAdı.' </th>

 
	
			'; 
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {			
	echo'
			<tr>
				<td style="color: #000000; background:#ffffff; font-size:90%;" >-'.$row["adi"]. ' ' . $row["soyadi"].'</td>	
			</tr>
			
			'; 
			 }
			  echo'</table></td> <td>';
} 
 
 
}
			echo'
			</td></tr></table>
</div>
<div id="SW" class="polaroid" style= "background-image: url(arka11.jpg); background-repeat:no-repeat; background-size: cover;">><p style="color: #ffffff; font-size:90%; padding-left:0.5em; padding-top:0em;" >AKTİF ARAMA KURTARMA TAHLİYE EKİBİ</p>
<br><br><br><br>
<table><tr><td >
			'; 
for($i = 1; $i < 8; $i++) {
	switch($i){
	case 1:
	$bolgeAdı="NİZAMİYE";
	break;
	case 2:
	$bolgeAdı="SLASHER";
	break;
	case 3:
	$bolgeAdı="KLİMA";
	break;
	case 4:
	$bolgeAdı="HASİL";
	break;
	case 5:
	$bolgeAdı="İDARİ OFİSLER";
	break;
	case 6:
	$bolgeAdı="YANGIN DAİRESİ";
	break;
	case 7:
	$bolgeAdı="DENİM ELEKTRİK";
	break;
	}
	
  $sql = "SELECT  id, adi, soyadi, aktiflik FROM ekipler  WHERE  ekipNo=3 AND aktiflik=1 AND bolgeNo=".$i."";
$result = $conn->query($sql);


			echo'
	
	<table ><th bgcolor="#ffffff" style="  font-size:90%;"> '.$bolgeAdı.' </th>

 
	
			'; 
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {			
	echo'
			<tr>
				<td style="color: #000000; background:#ffffff; font-size:90%;" >-'.$row["adi"]. ' ' . $row["soyadi"].'</td>	
			</tr>
			
			'; 
			 }
			  echo'</table></td> <td>';
} 
 
 
}
			echo'
			</td></tr></table>
</div>
<div id="SE" class="polaroid" style= "background-image: url(arka14.jpg); background-repeat:no-repeat; background-size: cover;">><p style="color: #ffffff; font-size:90%; padding-left:0.5em; padding-top:0em;" >AKTİF KBRN-ÇEVRE EKİBİ</p>
<br><br><br><br> 
<table><tr><td >
			'; 
for($i = 1; $i < 8; $i++) {
	switch($i){
	case 1:
	$bolgeAdı="NİZAMİYE";
	break;
	case 2:
	$bolgeAdı="SLASHER";
	break;
	case 3:
	$bolgeAdı="KLİMA";
	break;
	case 4:
	$bolgeAdı="HASİL";
	break;
	case 5:
	$bolgeAdı="İDARİ OFİSLER";
	break;
	case 6:
	$bolgeAdı="YANGIN DAİRESİ";
	break;
	case 7:
	$bolgeAdı="DENİM ELEKTRİK";
	break;
	}
	
  $sql = "SELECT  id, adi, soyadi, aktiflik FROM ekipler  WHERE  ekipNo=4 AND aktiflik=1 AND bolgeNo=".$i."";
$result = $conn->query($sql);


			echo'
	
	<table ><th bgcolor="#ffffff" style="  font-size:90%;"> '.$bolgeAdı.' </th>

 
	
			'; 
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {			
	echo'
			<tr>
				<td style="color: #000000; background:#ffffff; font-size:90%;" >-'.$row["adi"]. ' ' . $row["soyadi"].'</td>	
			</tr>
			
			'; 
			 }
			  echo'</table></td> <td>';
} 
 
 
}
			echo'
			</td></tr></table>
</div>
</section>

<footer>
</footer>

</body>
</html>

';
?>