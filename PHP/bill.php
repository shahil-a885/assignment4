<html>
<head><title>MY PHP</title></head>
<body style="background-color: lightblue;color: red;">
     <h2>
        BILL SUMMARY
    </h2>
     <?php
     if($_POST)  
    {   
        $item = $_POST['item']; 
        $qty = $_POST['qty'];

        $nme=array("Pen","Pencil","Eraser","A4 Sheets","Color Sets");
        $prc=array("10.00","5.00","3.00","50.00","150.00");
        $cde=array("I002","I003","I005","I006","I009");

        $amt=$qty*$prc[$item];



        echo '<body style="background-color:lightblue;color:red;">
            <h1>A-Mart Stationary Pvt Ltd</h1>
            <table border="2" bgcolor="yellow" style="color:black">
            <tr><th colspan="6">A-Mart Receipt / Bill</th></tr>
            <tr>
                <th>Item Name</th><th>Item Price</th><th>Item Code</th><th>Quantity</th><th>Date Of Purchase</th><th>Total Amount</th>
            </tr>
            <tr>
                <td>'. $nme[$item].' </td><td>Rs '.$prc[$item].'</td><td>'.$cde[$item].'</td><td>'.$qty.'</td><td>'.date("d-M-Y").'</td><td>'.$amt.'</td><tr>';
echo "</table>";

        echo '<br>';
        
}     
?>
<br>
    <form method="post" action="drop.php">
        Thank You for Shopping with A-Mart
        <br><br>
        <input type="submit" name="submit" value="Continue Shopping"/>
    </form>
</body>
</html>
