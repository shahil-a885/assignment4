<html>
<head><title>MY PHP</title></head>
<body style="background-color: black;color: yellow;">
     <h2>
        Student Detail
    </h2>
      <?php   
    if($_POST)  
    {   
        $pname=$_FILES['file']['name'];
        $ftype=$_FILES['file']['type'];
        $fsize=$_FILES['file']['size'];
        $floc=$_FILES['file']['tmp_name'];
        $fstore="upload/".$pname;
        move_uploaded_file($floc,$fstore);

        $fname =$_POST['fname'];
        $mname =$_POST['mname'];
        $lname =$_POST['lname'];
        $father =$_POST['father'];
        $addr =$_POST['address'];
        $phone =$_POST['phone'];
        $email =$_POST['email'];
        $dob =$_POST['dob'];
        $dte=date('d-m-Y',strtotime($dob));
        $gender =$_POST['gender'];
        $clg =$_POST['clg'];
        $opt =$_POST['opt'];
        $crs = $_POST['course'];
        $ug = $_POST['ug'];
    }     
?>  
<br>
    <form method="post" action="register.php">
        <table border="0">
            <tr>
                <td>First Name</td><td><?php echo $fname;?></td>
            </tr>
            <tr>
                <td>Middle Name</td><td><?php echo $mname;?></td>
            </tr>
            <tr>
                <td>Last Name</td><td><?php echo $lname;?></td>
            </tr>
            <tr>
                <td>Photo</td><td><img src="<?php echo $fstore;?>" height="100" width="100"></td>
            </tr>
            <tr>
                <td>Father Name</td><td><?php echo $father;?></td>
            </tr>
            <tr>
            <tr>
                <td>Address</td><td><?php echo $addr;?></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><?php echo $phone;?></td>
            </tr>
            <tr>
                <td>Email-Id</td><td><?php echo $email;?></td>
            </tr>
            <tr>
                <td>Date of Birth</td><td><?php echo $dte;?></td>
            </tr>
            <tr>
                <td>Gender</td><td><?php echo $gender;?></td>
            </tr>
            <tr>
                <td>Degree Percent</td><td><?php echo $ug;?></td>
            </tr>
            <tr>
                <td>Hobbies</td><td><?php 
                    $value="";
        $hobby =$_POST['hobby'];
        foreach ($hobby as $value){
echo $value." ";
}

?></td>
            </tr>
            <tr>
                <td>Institution Studied</td><td><?php echo $clg;?></td>
            </tr>
            <tr>
                <td>Course Studied</td><td><?php echo $crs;?></td>
            </tr>
            <tr>
                <td>Course Offered</td><td><?php echo $opt;?></td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Back"/>
    </form>
</body>
</html>
