<html>
    <head>
    <link href="style.css" rel="stylesheet"></link>
    </head>
<body>
    <?php
    include 'configure.php';
    //phpinfo();
    if(isset($_POST['submit'])){
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
    $query ="insert into patient(Aadhar_number,patient_name,address,dp,mobile,dob,medical_history) values('$Aadhar_no','$name','$addr','$dp','$phone','$dob','$his')";
    $run=mysqli_query($conn,$query) ;
    if($run){
        echo "Succesfully inserted";
    }
    else{
        echo "Insertion failde";
    }
    }
    ?>
</body>
<form action="/" method="post">
        <fieldset>
            <div class="wrapper">
        <button>Go to Main Page</button>
        </div>    
    </fieldset>
        </form>

</html>
