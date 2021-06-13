<html>
<head>
    <title>MY PHP</title>
    <script type="text/javascript">
function findselected(val) { 
    var cat = val;
   if (cat == "part_time") {
      document.getElementById("hours").disabled = false;
      document.getElementById("sal").disabled = true;
   } else {
     document.getElementById("hours").disabled=true;
     document.getElementById("sal").disabled = false;
   }
} 
</script> 
</head>
<body style="background-color: lightblue;color: red;">
<center>
     <h1>
        Employee Details
    </h1>
     
    <form method="post" action="show.php" enctype="multipart/form-data">
        <table border="0">            
            <tr>
                <td>Photo</td><td><input type="file" name="file"  placeholder="Photo"/></td>
            </tr>
            <tr>
                <td>Employee No</td><td><input type="text" name="eno"  placeholder="Employee Number"/></td>
            </tr>
            <tr>
                <td>First Name</td><td><input type="text" name="fname" placeholder="First Name"/></td>
            </tr>
            <tr>
                <td>Last Name</td><td><input type="text" name="lname"  placeholder="Last Name"/></td>
            </tr>
            <tr>
                <td>Address</td><td><textarea name="address" placeholder="Address"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td><td><input type="radio" name="gender"  value="male"/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Designation</td><td><input type="text" name="desig"  placeholder="Designation"/></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><input type="number" name="phone"  placeholder="Contact Number"/></td>
            </tr>
            <tr>
                <td>Employee Category</td><td><input type="radio" name="cat" id="cat" value="part_time"  onChange="findselected(this.value)"/>Part Time
                    <input type="radio" name="cat"  id="cat" value="full_time"  onChange="findselected(this.value)" />Full Time
                    <input type="radio" name="cat"  id="cat" value="contract"   onChange="findselected(this.value)"/>Contract</td>
            </tr>
            <tr id="hrs" >
                <td>Number Of Hours</td><td><input type="text" name="hours"  id="hours" value="0" placeholder="Number of Hours"  disabled /></td>
            </tr>
            <tr>
                <td>Basic Salary</td><td><input type="number" id="sal" name="salary" value="0" placeholder="Basic salary" disabled /></td>
            </tr>
            <tr>
               <td></td> <td> <input type="submit" name="submit" value="Submit"/></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>


