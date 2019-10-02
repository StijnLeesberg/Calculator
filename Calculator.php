<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>

    <meta name="description" content="My first page!">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <title>Calculator++</title>
</head>
<body>

    <div class="container">
        <div class="top-part">    
<?php
         $num1 = 0;
         $num2 = 0;
         $total = 0;
         $option = "";
         $error = "";
     
         
     
         if (isset($_GET['submit']))
         {
             $num1 = $_GET['num1'];
             $num2 = $_GET['num2'];
             $option = $_GET['choice'];

                     if(is_numeric($num1) && is_numeric($num2))
                     {
                        if ($option == 'plus')
                        {
                        $total = $num1 + $num2;
                        }
                        if ($option == 'minus')
                        {
                        $total = $num1 - $num2;
                        }
                        if ($option == 'multiply')
                        {
                        $total = $num1 * $num2;
                        }
                        if ($option == 'divide')
                        {
                        $total = $num1 / $num2;
                        }   
                        if ($option == 'sqrt') 
                        {
                        $total = sqrt($num1);
                        }
                        if ($option ==  'powerof')
                        {
                        $total = pow($num1, $num2);
                        }
                        if ($option ==  'mtokm')
                        {
                        $total = $num1 * 1.609344;
                        }
                        if ($option ==  'kmtom')
                        {
                        $total = $num1 * 0.621371192;
                        }
                     }
                 }
                 else {
                 $error = "Only numbers!";
                 echo $error; 
                 }

        echo $total;
        ?>
        </div>
        <div class="bottom-part">
                <form method="get">
                            <div>
                                <label for="DecimalSlider">Decimals</label>
                                <input type="range" id="DecimalSlider" name="Decimals" 
                                min="0" max="10" value="0" step="1">
                            </div>
                    
                
                            <label>Number one:</label>
                            <input name="num1" class="input-numbers" type="number" value="" placeholder="Your first number">


                        <label>Operator</label> 
                        <select name ="choice">
                            <option value="plus">+</option>
                            <option value="minus">-</option>
                            <option value="divided">/</option>
                            <option value="multiply">*</option>
                            <option value="sqrt">√</option>
                            <option value="powerof">^</option>
                            <option value="mtokm">Miles > Kilometers</option>
                            <option value="kmtom">Kilometers > Miles</option>
                        </select>
                        <label>Number two:</label>
                        <input name="num2" class="input-numbers" type="number" value="" placeholder="Your second number">
                        <input type="submit" name="submit" type="submit" value="Calculate" class="Submit">
                        <input type="reset" name="reset" type="reset" value="Reset">
                        
            </form>
        </div>
     </div>
    </body>
</html> 
