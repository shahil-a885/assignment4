<html>
<head>
    <title>MY PHP</title>
    <script type="text/javascript">
function showHidden() { 
     document.getElementById("qt").style.display="block";
   
} 

function showForm(){
    var index=parseInt(document.getElementById("item").value);
    var qty=document.getElementById("qty").value;

    var ind= index+1;

    var name=["Pen","Pencil","Eraser","A4 Sheets","Color Sets"];
    var prc=["10.00","5.00","3.00","50.00","150.00"];
    var cde=["I002","I003","I005","I006","I009"];

    document.getElementById("tab").innerHTML="<table border='2' bgcolor='yellow' style='color:black;' cellpadding='5px'><tr><th bgcolor='green' style='color:white'> Description</th><th bgcolor='green' style='color:white'>Values</th></tr><tr><td>Sl No.</td><td>"+(index+1)+"</td></tr><tr><td>Item Name</td><td>"+name[index]+"</td></tr><tr><td>Item Price</td><td>"+prc[index]+"</td></tr><tr><td>Item Code</td><td>"+cde[index]+"</td></tr><tr><td>Quantity</td><td>"+qty+"</td></tr></table> ";


}
</script>
</head>
<body style="background-color: lightblue;color: red;">
<center>
    
    <form method="post" action="bill.php">
        <h2>Please select your Item:</h2>
        <select name="item" id="item" required onchange="showHidden()">
            <option>Select item</option>
                    <option value="0" id="pen">Pen</option>
                    <option value="1" id="pencil">Pencil</option>
                    <option value="2" id="eraser">Eraser</option>
                    <option value="3" id="sheet">A4 Sheets</option>
                    <option value="4" id="color">Color Set</option>
                </select>
        <br><br>
        <div id="qt" hidden onchange="showForm()">
            Enter the Quantity:<input type="text" id="qty" name="qty"  placeholder="Enter the quantity" required/>            
        <br><br>
        </div>
        <div id="tab">
            <br>
        </div>
        <input type="submit" name="submit" value="Bill"/>
    </form>

</center>
</body>
</html>
