<!DOCTYPE html>
<html>
  <head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="style.css" rel="stylesheet"></link>
    <style>
      
    </style>
  </head>
  <body>
    <div class="main-block">
    <form action="insert.php" method="post">
      <h1>Register</h1>
      <fieldset>
        <legend>
          <h3>Enter Details</h3>
        </legend>
        <div  class="account-details">
          <div><label>Donor_ID<input type="number" name="Donor_ID" required></label></div><br>
          <div><label>Aadhar_no<input type="text" name="Aadhar_no" required></label></div><br>
          <div><label>Age<input type="number" name="Age" required></label></div><br>
          <div><label>Name<input type="text" name="Name" required></label></div><br>
          <div><label>Blood_Group<input type="text" name="Blood_Group" required></label></div>
        </div>
      </fieldset>
      <fieldset>
        <div class="wrapper">
      <button type="submit" name="submit">Submit</button>
        </div>
    </form>
    <form action="display.html">
    <div class="wrapper"><button onclick="display.html" type="submit" name="display">Query Options</button>
    </div>  
  </form>  
  </div> 
  </body>
</html>