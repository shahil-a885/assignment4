<html>
<head><title>MY PHP</title></head>
<body style="background-color:lightblue;color: red;">
<h2><p>Number generated randomly is  <?php
    $choice = rand(5, 100);
    echo $choice;
?>.</p><p> And its square root is <?php
    echo round(sqrt($choice),4);
?>.</p></h2>
</body>
</html>