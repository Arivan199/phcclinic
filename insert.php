<?php
include 'configure.php';

if(isset($_POST['submit'])){
    $Donor_ID=$_POST['Donor_ID'];
    $Aadhar_no=$_POST['Aadhar_no'];
    $Age=$_POST['Age'];
    $Name=$_POST['Name'];
    $Blood_Group=$_POST['Blood_Group'];

    $query ="insert into form(Donor_Id,Aadhar_no,Age,Name,Blood_group) values('$Donor_ID','$Aadhar_no','$Age','$Name','$Blood_Group')";
    $run=mysqli_query($conn,$query) ;
    if($run){
        echo "Succesfully inserted";
    }

}
?>
<html>
<form action="/" method="post">
        <fieldset>
            <div class="wrapper">
        <button>Go to Main Page</button>
        </div>    
    </fieldset>
        </form>

</html>