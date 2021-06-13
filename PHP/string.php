<html>
<head><title>Assignmen4</title></head>
<body style="background-color: lightblue;color: red;">
<center>
     <h2>
        <u>STRING OPERATIONS</u>
    </h2>
     
    <form method="post">
        <input type="text" name="txt" placeholder="Enter the String" required />
        <br><br>
        <input type="radio" name="string"  value="reverse" required/>REVERSE
        <input type="radio" name="string"  value="length"/>LENGTH
        <input type="radio" name="string"  value="substring"/>SUBSTRING
        <input type="radio" name="string"  value="upper"/>UPPERCASE
        <input type="radio" name="string"  value="lower"/>LOWERCASE
        <input type="radio" name="string"  value="words"/>NUMBER OF WORDS
        <br><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>

 
<?php   
    if($_POST)  
    {   
        $string =$_POST['string'];
        $txt = $_POST['txt'];

        switch($string){
            case 'reverse': $rev = strrev($txt);
                            echo 'The reversed string of '. $txt. ' is: '. $rev;
                            break;
            case 'length': $len = strlen($txt);
                            echo "The length of the string ".$txt. " is: ". $len;
                            break;
            case 'substring':$sub = substr($txt, 5, 13);
                            echo "The substring of the string ".$txt. " is: ". $sub;
                            break;
            case 'upper': $up = strtoupper($txt);
                            echo "The string ".$txt. " in uppercase is: ". $up;
                            break;
            case 'lower':$low = strtolower($txt);
                            echo "The string ".$txt. " in lowercase is: ". $low;
                            break;
            case 'words':$wrd = str_word_count($txt);
                            echo "The number of words in the string ".$txt. " is: ". $wrd;
                            break;

        }
       
    }     
?> 
</center>
</body>
</html>


