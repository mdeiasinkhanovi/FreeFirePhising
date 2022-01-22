<?php

include_once('header.php');

?>

<div class="Top">

Contact

</div>

<div class="container-fluid p-3">

<form>
<div class="form-group">
    <label for="exampleInputEmail1">Your Name : </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address : </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Your Message : </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <button name="submit" type="submit" class="btn btn-primary">Send</button>
</form>

</div>

<?php

include_once('footer.php');

?>