<html>
<head>
    <title>MY PHP</title>
    <script type="text/javascript">
function showAlert(){
            var crs= document.querySelector('input[name="course"]:checked').value;
            var ug = document.getElementById("ug").value;
            var opt = document.getElementById("opt").value;

            if( opt == 'MCA' || opt == 'MTech'){
            if( ug >= 70){
                if(opt =='MTech'){
                if( crs == 'BE'){          
                document.getElementById("alert").innerHTML="Registration Successful ";
                document.getElementById("sub").style.display="block";
                }
                else{                 
                document.getElementById("alert").innerHTML="Course Studied should be B.E ";
                }
            }
                if(opt =='MCA' ){
                    if(crs == 'BCA' || crs == 'BSc'){            
                document.getElementById("alert").innerHTML="Registration Successful ";
                document.getElementById("sub").style.display="block";
                }
                else{          
                document.getElementById("alert").innerHTML="Course Studied should be BCA or BSc ";
                }
            }
            }
            else{
                document.getElementById("alert").innerHTML="Percentage in Degree should be atleast 70%";
            }
        }
        else if( opt == 'MBA'){
            if( ug >= 60){
                document.getElementById("alert").innerHTML="Registration Successful ";
                document.getElementById("sub").style.display="block";
            }
            else{
                document.getElementById("alert").innerHTML="Percentage in Degree should be atleast 60%";
            }
        }
        else{
            if( ug >= 40){
                if(opt =='MSc' && (crs == 'BCA' || crs == 'BSc')){                    
                document.getElementById("alert").innerHTML="Registration Successful ";
                document.getElementById("sub").style.display="block";
                }
                else{                    
                document.getElementById("alert").innerHTML="Course Studied should be BCA or BSc ";
                }
            }
            else{
                document.getElementById("alert").innerHTML="Percentage in Degree should be atleast 40%";
            }
        }
        }

        
    </script>
</head>
<body style="background-color: lightblue;color: red;">
<center>
     <h2>
        Student Registration
    </h2>
     
    <form method="post" action="student1.php" enctype="multipart/form-data">
        <table border="0">
            <tr>
                <th colspan="2" id="alert"></th>
            </tr>
            <tr>
                <td>First Name</td><td><input type="text" name="fname" placeholder="First Name" required /></td>
            </tr>
            <tr>
                <td>Middle Name</td><td><input type="text" name="mname"  placeholder="Middle Name" required/></td>
            </tr>
            <tr>
                <td>Last Name</td><td><input type="text" name="lname"  placeholder="Last Name" required/></td>
            </tr>
            <tr>
                <td>Photo</td><td><input type="file" name="file"  placeholder="Photo" required/></td>
            </tr>
            <tr>
                <td>Father Name</td><td><input type="text" name="father"  placeholder="Father Name" required/></td>
            </tr>
            <tr>
            <tr>
                <td>Address</td><td><textarea name="address" placeholder="Address" required></textarea></td>
            </tr>
            <tr>
                <td>Contact Number</td><td><input type="number" name="phone"  placeholder="Contact Number" required/></td>
            </tr>
            <tr>
                <td>Email-Id</td><td><input type="email" name="email"  placeholder="Email Id" required/></td>
            </tr>
            <tr>
                <td>Date of Birth</td><td><input type="date" name="dob"  placeholder="Date Of Birth" required/></td>
            </tr>
            <tr>
                <td>Gender</td><td><input type="radio" name="gender"  value="male" required/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td>Degree Percent</td><td><input type="number" name="ug" id="ug" placeholder="Percentage in degree" required/></td>
            </tr>
            <tr>
                <td>Hobbies</td><td><input type="checkbox" name="hobby[]"  value="sports" required/>Sports
                    <input type="checkbox" name="hobby[]"  value="music"/>Music
                    <input type="checkbox" name="hobby[]"  value="travel"/>Travelling</td>
            </tr>
            <tr>
                <td>Institution Studied</td><td><input type="text" name="clg"  placeholder="Institution Studied" required/></td>
            </tr>
            <tr>
                <td>Course Studied</td><td><input type="radio" name="course"  id="crs" value="BCA"  required/>BCA
                    <input type="radio" name="course"  id="crs" value="BSc"/>BSc
                    <input type="radio" name="course" id="crs" value="BCom"/>BCom
                    <input type="radio" name="course" id="crs" value="BE"/>B.E</td>
            </tr>
            <tr>
                <td>Course Offered</td><td><select name="opt" id="opt" onchange="showAlert()"  required>
                    <option value="">Select Course</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="MTech">MTech</option>
                    <option value="MSc">MSc</option>
                </select></td>
            </tr>
            <tr>
               <td></td> <td> <input type="submit" name="submit" id="sub" value="Submit" hidden /></td>
            </tr>
        </table>
    </form>


</center>
</body>
</html>


