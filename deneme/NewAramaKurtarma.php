<?php
require_once("isgpro.php");

$sql = "SELECT  id, adi, soyadi, aktiflik, resim, bolgeNo FROM ekipler  WHERE  ekipNo=3";
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
  background-image: url(images/aramaKurtarmaHead.jpg);
  background-size: 100% 100%;
  padding: 4vw;
}

/* Clear floats after the columns */
section{
 
  //display: table;
  //clear: both;
   background-image: url(images/AramaKurtarmaBody.jpg);
   background-repeat: round;
  background-size: 100% 15vw;
}

/* Style the footer */
footer {
  background-image: url(images/AramaKurtarmaFooter.jpg);
  background-size: 100% 100%;

    padding:10vw ;
}

--------------------------------------------------------------------------------------------------------------------------------------------
******************************************************************************************************************************************
--------------------------------------------------------------------------------------------------------------------------------------------


</style>
</head>
<body bgcolor="6F0D0D">

<header>

</header>

<section>
<div class="section_container third_section_container flex_container flex_center">		';
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 if(empty($row["resim"])){
			 $imgs='images/initial.jpg';
		 }else{  $imgs=$row["resim"];}
		 
		
		echo'</a>
		<a href="#link2">
			<div class="featureX flex_feature_item featureX2" style="text-align: center;">
							<br><div  style=" box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 3), 0 2px 4px 0 rgba(0, 0, 0, 3); margin-left:10px; background-color: #ffffff; height: %50; width: 90%;"><p style=" margin-top:-17px; font-weight: 600; color:#000000; font-size:100%; padding-top:0.01em; " > ' . $row["adi"]. ' ' . $row["soyadi"]. '</p></div>

				';
				$bolgeAdı='';
				switch($row["bolgeNo"]){
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
	} echo'
	<br>
	
	
	               <div class="google_map">
					<img src="./'.$imgs.'" height="100vw" weight="100vw" style=" box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 3), 0 2px 4px 0 rgba(0, 0, 0, 3); border: 2px solid #fff;  margin-left: auto; margin-right: auto; display: block;"></img>
					</div>
						<div class="paragraph">
					 <br><div  align="center" style=" box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 3), 0 2px 4px 0 rgba(0, 0, 0, 3); background-color: #ffffff; height: 50%; width: 100%; margin-bottom:1vw; "><p style=" margin-top:-15px; margin-bottom:5px; padding-left:2px; padding-right:60px; color: #4B4848; font-size:90%;" > '.$bolgeAdı.'</p></div>
	<div align="center" style=" box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 3), 0 2px 4px 0 rgba(0, 0, 0, 3); background-color: #ffffff; height: %50; width: 100%;">
	<p style="font-size:55%">Görev Durumu</p>
	';
	
				if($row["aktiflik"]==1){
					
				echo'<span style=" font-size: 130%; font-weight:bolder; color:green;  letter-spacing:2px; ">&#10004;</span> 
				';} else{ echo' <span style="font-family: Lato,sans-serif; font-weight:bolder; font-size: 130%; color:red;">&#10006;</span>'; } echo'
			
			</div>
			<div class="clearfix"></div>
			</div>
			</div>
		</a>
				'; }
} else {
    echo "0 results";
}
$conn->close();
		echo'
</section>

<footer>
</footer>

</body>
</html>

';
?>