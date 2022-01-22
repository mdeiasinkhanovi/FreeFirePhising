<?php

include_once('header.php');

?>

<div class="Top">

Top-up Details

</div>

<div class="alert alert-light m-0" role="alert">

<strong>Free Fire ID : </strong>

<?php 

$id = $_POST['id'];

echo $id ;

?>

<br/><br/>

<strong>Diamonds : </strong>

<?php 

$diamonds = $_POST['diamonds'];

echo $diamonds;

echo '<br/><br/>';

switch ($diamonds){
	
	case "50":
	echo '<strong>' . "Price : " . '</strong>' . "Free (Corona Offer)";
	break;

case "100":
	echo '<strong>' . "Price : " . '</strong>' . "50৳";
	break;
	
	case "150":
	echo '<strong>' . "Price : " . '</strong>' . "75৳";
	break;
	
	case "200":
	echo '<strong>' . "Price : " . '</strong>' . "100৳";
	break;
	
	case "250":
	echo '<strong>' . "Price : " . '</strong>' . "125৳";
	break;
	
	case "300":
	echo '<strong>' . "Price : " . '</strong>' . "150৳";
	break;
	
	case "350":
	echo '<strong>' . "Price : " . '</strong>' . "175৳";
	break;
	
	case "400":
	echo '<strong>' . "Price : " . '</strong>' . "200৳";
	break;
	
	case "450":
	echo '<strong>' . "Price : " . '</strong>' . "225৳";
	break;
	
	case "500":
	echo '<strong>' . "Price : " . '</strong>' . "250৳";
	break;
	
default:
        echo "Fuck You";
}

if($diamonds>50){
	echo '<br/><br/>' . '<strong>' . "Payment Type : " . '</strong>' . '<a href="https://www.clipart.email/download/11506011.html" title="Image from clipart.email"><img src="https://cdn.clipart.email/6015a50c72ef7db8fafa8edad87b70e2_bkash-logo-png-png-image_345-172.png" width="80px" alt="Bkash Logo Png File" /></a>' .  " (" . '<a href="bkash" target="_blank">' .  "How To Pay" . '</a>' . ")" .  '<br/>';
echo <<<_END

<br/>

<div class="form-group">

<form action="connect.php" method="post">


<strong>Bkash Transection ID : </strong>

<br/>

<input name="tid" type="text" class="form-control" placeholder="Transection ID" required>

<input name="submit" type="submit" class="btn btn-dark mt-3" value="Submit">

</div>

</form>


</div>

_END;
}

if($diamonds=50){
echo <<<_END

<br/>
<br/>

<div class="form-group">

<form action="connect.php" method="post">
 
<input name="tid" type="text" class="form-control" value="Free (Corona Offer)" hidden>

<input name="submit" type="submit" class="btn btn-dark mt-3" value="Submit">

</div>

</form>


</div>

_END;
}

?>

<?php

include_once('footer.php');

?>
