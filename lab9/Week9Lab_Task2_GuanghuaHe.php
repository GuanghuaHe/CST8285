<?php
    function fahrenheit_to_celsius($given_value)
    {
        $celsius=5/9*($given_value-32);
        return $celsius ;
    }

    function celsius_to_fahrenheit($given_value)
    {
        $fahrenheit=$given_value*9/5+32;
        return $fahrenheit ;
    }

?>
<!DOCTYPE html>
    <html>

    <head>
        <title>Lab9 - Temperature Converter by Guanghua He</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="container">
    <div class="main">
    <h2 class="center">Temperature Converter</h2>



        <form action="#" method="post">
            <table>

                <tr>
                    <td>
                        <select name="first_temp_type_name">
                            <option value="fahrenheit">Fahrenheit to Celsius</option>
                            <option value="celsius">Celsius to Fahrenheit</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="given_value">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btn" value="Convert">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                    if(isset($_POST['btn']))
                    {
                        $first_temp_type_name=$_POST['first_temp_type_name'];
                       
                        $given_value=$_POST['given_value'];
						if (is_numeric($given_value)) {
                        echo "You input $given_value degrees in $first_temp_type_name.";
                        
						} 
						else {
                        echo var_export($given_value, true) . " is NOT numeric. ", PHP_EOL;
						echo "<span class='success'>Please input a numeric temperature.</span>";
						return false; 
						                        }

                        if($first_temp_type_name=='fahrenheit')
                        {
                            $celsious=fahrenheit_to_celsius($given_value);
                            echo "<span class='success'>Fahrenheit $given_value = $celsious Celsious.</span>";
                        }
                        if($first_temp_type_name=='celsius')
                        {
                            $fahrenheit=celsius_to_fahrenheit($given_value);
                            echo "<span class='success'>Celsious  $given_value = $fahrenheit Fahrenheit.</span>";
                        }

                    }

                    ?>
                    </td>
                </tr>
            </table>

        </form>
        </div>
</div>
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