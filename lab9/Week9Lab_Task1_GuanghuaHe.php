<!DOCTYPE html>
<html>
<head>
   <title>Lab 9 Task 1 - Hello World by Guanghua He</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="stylesheet" href="style.css">
   </head>
   <body>
   <form method="GET" action="/~he000068/lab9/Week9Lab_Task1_GuanghuaHe.php">
   <b>Please input your name:</b>
 <input type="text" name="fname">
 <input type="text" name="lname">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$fname = isset($_GET['fname']) ? $_GET['fname']: '';
$lname = isset($_GET['lname']) ? $_GET['lname']: '';


  
if (empty($fname)) echo "Welcome <b>Guest</b>,";

else 
	
{ if (empty($lastName)) 
{echo "Welcome <b>$fname</b>,"; }
 
else { echo "Welcome <b>$fname $lastName</b>,";}
 }

?>

    <p>
        <a href="http://validator.w3.org/check?uri=referer"
           onclick="this.href='http://validator.w3.org/check?uri=' + 
      document.URL"><img
            src="http://www.w3.org/Icons/valid-xhtml10"
            alt="Valid XHTML 1.0!" height="31" width="88" /></a>
      </p>

<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer"
           onclick="this.href='http://jigsaw.w3.org/css-validator/check?uri=' + 
      document.URL">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
      
</body>
</html>