<html>
<head><title>MY PHP</title></head>
<body style="background-color: lightblue;color: red;">
<center>
    <h1><u>
        ARITHMETIC OPERATIONS:
    </u></h1>
     
    <form method="post">
        <table border="0">
            <tr>
                <td>enter the number <input type="text" name="num1" placeholder="Enter value 1"/>
                </td>
            </tr>
            <tr>
            <td>enter the number <input type="text" name="num2"  placeholder="Enter value 2"/>
                </td>
            </tr>
            <tr>
                <td>enter the operator <input type="text" name="opr" placeholder="Enter the arithmetic operator"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>
 
<?php
 
if(isset($_POST['submit'])) {
 
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = $_POST['opr'];
 
    echo "The first number is $a"; 
    echo "</br>";
    echo "The second number is $b"; 
    echo "</br>";

    switch($ch) {
        case '+':
            $r = $a + $b;
            echo " Addition of two numbers = " . $r ;
            break;
 
        case '-':
            $r = $a - $b;
            echo " Subtraction  of two numbers= " . $r ;
            break;
 
        case '*':
            $r = $a * $b;
            echo " Multiplication of two numbers = " . $r ;
            break;
 
        case '/':
            $r = $a / $b;
            echo " Division of two numbers = " . $r ;
            break;
 
        default:
            echo ("invalid option\n");
    }
}
?>

</center>
</body>
</html>