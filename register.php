<?php
    $servername = 'us-cdbr-east-05.cleardb.net';
    $username = 'b0853c579d7b5d';
    $password = '3551bcb1';
    $db = 'heroku_04551752c2bc552';
    // Create connection
    $conn =new mysqli($servername,$username,$password,$db);
    if(!$conn)
    echo 'Connection failed';
    else
    echo 'connected';
    //phpinfo();
    echo 'shit';
    if(isset($_POST['submit'])){
        echo 'shit';
    $name=$_POST['name'];
    $Aadhar_no=$_POST['Aadhar'];
    $phone=$_POST['mobile'];
    $dob=$_POST['dob'];
    $addr1=$_POST['add1'];
    $addr2=$_POST['add2'];
    $addr3=$_POST['add3'];
    $addd=$addr1.$addr2;
    $addr=$addd.$addr3;
    $his=$_POST['his'];
    $dp=$_POST['image'];
    echo 'shit'; 
    $query ="insert into patient(Aadhar_number,patient_name,address,dp,mobile,dob,medical_history) values('$Aadhar_no','$name','$addr','$dp','$phone','$dob','$his')";
    
    $run=mysqli_query($conn,$query);
    echo 'shit';
    if($run){
        header("Location: https://phcclinic.herokuapp.com/");
    }
    else{
        echo 'Insertion failed';
    }
    }
    echo 'shit';
?>
