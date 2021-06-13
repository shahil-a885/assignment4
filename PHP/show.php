<html>
<head><title>MY PHP</title></head>
<body style="background-color: lightblue;color: red;">
    
<center>
     <h2>
        EMPLOYEE DETAIL
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

        $eno =$_POST['eno'];
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $addr =$_POST['address'];
        $gender =$_POST['gender'];
        $desig =$_POST['desig'];
        $phone =$_POST['phone'];
        $cat = $_POST['cat']; 
    }     
?>  
<br>
    <form method="post" action="salary.php">
        <table border="0">
            <tr>
                <td>Photo</td><td><img src="<?php echo $fstore;?>" height="100" width="100"></td>
            </tr>
            <tr>
                <td>Employee Number</td><td><?php echo $eno;?></td>
            </tr>
            <tr>
                <td>First Name</td><td><?php echo $fname;?></td>
            </tr>
            <tr>
                <td>Last Name</td><td><?php echo $lname;?></td>
            </tr>
            <tr>
                <td>Address</td><td><?php echo $addr;?></td>
            </tr>
            <tr>
                <td>Gender</td><td><?php echo $gender;?></td>
            </tr>
            <tr>
                <td>Designation</td><td><?php echo $desig;?></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><?php echo $phone;?></td>
            </tr>
            <tr>
                <td>Employee Category</td><td><?php echo $cat;?></td>
            </tr>
        </table>
        <?php
            $salary=0;  
        $da=0;
        $hra=0;
        $pf=0;
        $tax=0;
        if ($cat == 'part_time')
        {

        $hrs = $_POST['hours'];
            $salary = $hrs * 100;
        }
        elseif ($cat == 'full_time')
        {
            
        $basic = $_POST['salary'];
            if($basic < 1000){

            $da= $basic * 0.45;
            $hra= $basic * 0.10;
            $pf=$basic * 0;
            $tax=$basic * 0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic < 5000 and $basic >=1000){
                            
            $da= $basic * 0.75;
            $hra= $basic * 0.20;
            $pf=1200;
            $tax=$basic * 0.05;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
            elseif($basic > 5000){
                            
            $da= $basic * 0.90;
            $hra= $basic * 0.30;
            $pf=$basic * 0.05;
            $tax=$basic * 0.15;
            $gross=$basic + $da + $hra;
            $salary= $gross - $pf - $tax;
            }
        }
        elseif ($cat == 'contract')
        {
            
        $basic = $_POST['salary'];
            if($basic < 5000){

            $da= 200;
            $hra= 0;
            $tax=0;
            $gross=$basic + $da + $hra;
            $salary= $gross - $tax;
            }
            elseif($basic > 5000 and $basic <=25000){
                            
            $da= $basic * 0.15;
            $hra= 1000;
            $tax=$basic * 0.03;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
            elseif($basic > 25000){
                            
            $da= $basic * 0.20;
            $hra= $basic * 0.00;
            $tax=$basic * 0.09;
            $gross=$basic + $da + $hra;
            $salary= $gross  - $tax;
            }
        }
        if($cat == 'part_time'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The Salary is $salary";          
        }
        elseif($cat == 'full_time'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The DA is $da"; 
        echo "</br>";        
        echo "The HRA is $hra"; 
        echo "</br>";
        echo "The PF is $pf"; 
        echo "</br>";
        echo "The Tax is $tax"; 
        echo "</br>";
        echo "The Gross Salary is $gross"; 
        echo "</br>";
        echo "The Net Salary is $salary"; 
        echo "</br>";            
        }
        elseif($cat == 'contract'){
        echo "The Basic Salary is $basic"; 
        echo "</br>";
        echo "The DA is $da"; 
        echo "</br>";        
        echo "The HRA is $hra"; 
        echo "</br>";
        echo "The Tax is $tax"; 
        echo "</br>";
        echo "The Gross Salary is $gross"; 
        echo "</br>";
        echo "The Net Salary is $salary"; 
        echo "</br>";            
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Back"/>
    </form>
    </center>
</body>
</html>
