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
  background-image: url(images/kisiSayilariHead.jpg);
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
	margin-top:-40px;
  width: 100%;
}


div.polaroid {
  width: 100%;
  background-color: black;
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 3), 0 12px 40px 0 rgba(0, 0, 0, 3);
  margin-bottom: 25px;
}

#NW {
    position:relative ;
    width:95%;
    height:21%;
    top:5%;
    margin-left:auto; margin-right:0;
  
}
#NE {
	
    position:relative ;
    width:95%;
    height:21%;
    top:5%;
    margin-left:auto; margin-right:0;
}
#SW {
    position:relative ;
    width:95%;
    height:21%;
   top:5%;
    margin-left:auto; margin-right:0;
}
#SE {
    position:relative ;
    width:95%;
    height:21%;
   top:5%;
    margin-left:auto; margin-right:0;
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

';
for($i = 1; $i < 5; $i++) {
	
	$sql4 = "SELECT COUNT(*) AS aktifsayi FROM ekipler WHERE ekipNo='".$i."' AND aktiflik='1' ";
	$result4 = $conn->query($sql4);
	$sql = "SELECT COUNT(*) AS sayi FROM ekipler WHERE ekipNo='".$i."'";
    $result = $conn->query($sql);
    
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  

	if ($result4->num_rows > 0) {
    // output data of each row
	
    while($row4 = $result4->fetch_assoc()) {

	switch($i){
	case 1:
	$ekipAdi="YANGINLA MÜCADELE EKİBİ";
echo'
<div class="polaroid" id="NW" style= "background-image: url(arka12.jpg); background-repeat:no-repeat; background-size: cover;">
<p align="center" style=" padding:40px;  font-family:Monospace; color: #ffffff; font-size:200%;" >'.$ekipAdi.'</p> 
 <div>
				<div class="feature_image"></div>
				<br><a href="#" class="button instagram"><span class="gradient"></span style="font-family: "Source Sans Pro", sans-serif;; ">TOPLAM KİŞİ SAYISI <br> '.$row["sayi"].' </a>
				<br>
				<a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">AKTİF KİŞİ SAYISI<br>'.'  '.''.$row4["aktifsayi"].' </a>
			</div>
		';
		
	  break;
	 case 2:
	 $ekipAdi="İLK YARDIM EKİBİ";
	 echo'
		
</div>

<div class="polaroid" id="NE" style= "background-image: url(arka13.jpg); background-repeat:no-repeat; background-size: cover;">
<p align="center" style=" padding:40px;  font-family:Monospace; color: #ffffff; font-size:200%;" >'.$ekipAdi.'</p> 

<div>
			<div class="feature_image"></div>
				<br><a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">TOPLAM KİŞİ SAYISI <br> '.$row["sayi"].' </a>
				<br>
				<a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">AKTİF KİŞİ SAYISI <br> '.'  '.''.$row4["aktifsayi"].' </a>
			</div>
		
		'; 
	 break;
	 case 3:
	 $ekipAdi="ARAMA KURTARMA EKİBİ";
	 echo'
</div>

<div class="polaroid" id="SW" style= "background-image: url(arka11.jpg); background-repeat:no-repeat; background-size: cover;">
<p align="center" style=" padding:40px;  font-family:Monospace; color: #ffffff; font-size:200%;" >'.$ekipAdi.'</p> 

<div >
			<div class="feature_image"></div>
				<br><a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">TOPLAM KİŞİ SAYISI <br> '.$row["sayi"].' </a>
				<br>
				<a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">AKTİF KİŞİ SAYISI <br> '.'  '.''.$row4["aktifsayi"].' </a>
			</div>
		          ';
	            break;
	            case 4:
	            $ekipAdi="KBRN VE ÇEVRE EKİBİ";
	            echo'
</div>

<div class="polaroid" id="SE" style= "background-image: url(arka14.jpg); background-repeat:no-repeat; background-size: cover;">
<p align="center" style=" padding:40px;  font-family:Monospace; color: #ffffff; font-size:200%;" >'.$ekipAdi.'</p> 

<div>
			<div class="feature_image"></div>
				<br><a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">TOPLAM KİŞİ SAYISI <br>'.$row["sayi"].' </a>
				<br>
				<a href="#" class="button instagram"><span class="gradient"></span style="font-family: Lato,sans-serif; ">AKTİF KİŞİ SAYISI <br> '.'  '.''.$row4["aktifsayi"].' </a>
			</div>
			';
				break;
	}
}
	}
       }}
}
			echo'
		
</section>

<footer>
</footer>

</body>
</html>

';
?>