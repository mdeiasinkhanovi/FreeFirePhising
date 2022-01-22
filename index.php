<?php

include_once('header.php');

?>

<title>Home | Wikiamer.CF - Garena Free Fire Top Up</title>


<div class="Top">


Top-up Now !

</div>

<div class="container-fluid p-3">


<form action="payment.php"  method="post">

  <div class="form-group">
  
    <label>Free Fire ID : </label>
	
    <input name="id" type="text" class="form-control" placeholder="Free Fire ID" required>
	
  </div>
  
  <div class="form-group">
  
    <label>Diamonds Amount : </label>
	
    <select name="diamonds" class="form-control" required>
	
      <option value="50">50 Diamonds</option>
	  
      <option value="100">100 Diamonds</option>
	  
      <option value="150">150 Diamonds</option>
	  
      <option value="200">200 Diamonds</option>
	  
      <option value="250">250 Diamonds</option>
	  
	  <option value="300">300 Diamonds</option>
	  
	  <option value="350">350 Diamonds</option>
	  
	  <option value="400">400 Diamonds</option>
	  
	  <option value="450">450 Diamonds</option>
	  
	  <option value="500">500 Diamonds</option>
	  
    </select>
	
	<button name="submit" type="submit" class="btn btn-dark mt-3">Submit</button>
	
  </div>
  
  
</form>

</div>

<?php

include_once('footer.php');

?>
