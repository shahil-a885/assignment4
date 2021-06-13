<html>
<head>
    <title>MY PHP</title>
    <style type="text/css">
        p {
color:blue;
font-size:50px;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: lightblue;color: yellow;">
<p>
     Current  Time is :
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</body>
</html>