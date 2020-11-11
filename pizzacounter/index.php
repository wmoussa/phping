<html>
<head>
  <style>
  .btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 30px 32px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 50%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
      font-size: 24px;
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
</head>
<body>

  <form action='' method='post'>
      <div class='btn-group'>
    <button class="button" name='submit' value='1'>Pizza 1</button>
    <button class="button" name='submit' value='2'>Pizza 2</button>
    <button class="button" name='submit' value='3'>Pizza 3</button>
    <button class="button" name='submit' value='4'>Pizza 4</button>
    <button class="button" name='submit' value='5'>Pizza 5</button>
    <button class="button" name='submit' value='6'>Pizza 6</button>
    </div>
  </form>

</body>
</html>

<?php
$myfile = fopen("log.htm", "a") or die("Unable to open file!");
date_default_timezone_set('America/New_York');

$date = date('Y/m/d H:i:s');

if($_POST['submit']==1)      { fwrite($myfile, "Pizza 1 nouvellement servi ".$date.'<br \>'); }
else if($_POST['submit']==2) { fwrite($myfile, "Pizza 2 nouvellement servi ".$date.'<br \>'); }
else if($_POST['submit']==3) { fwrite($myfile, "Pizza 3 nouvellement servi ".$date.'<br \>'); }
else if($_POST['submit']==4) { fwrite($myfile, "Pizza 4 nouvellement servi ".$date.'<br \>'); }
else if($_POST['submit']==5) { fwrite($myfile, "Pizza 5 nouvellement servi ".$date.'<br \>'); }
else if($_POST['submit']==6) { fwrite($myfile, "Pizza 6 nouvellement servi ".$date.'<br \>'); }

fclose($myfile);

?>
