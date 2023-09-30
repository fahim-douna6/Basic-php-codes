
<h1>Calculator</h1>
    <form method="Get">
        
    <label> Enter First Number:</label> <input type="text" name="v1" placeholder="Enter first number" required><br>
    <label> Operator:</label><input type="text" name="opr" required><br>
    <label> Enter Second Number:</label><input type="text" name="v2" placeholder="Enter second number" required><br>
    
    
    <input type="submit" name="calculate" value="calculate">
    </form>

    <?php
    if (isset($_GET['calculate'])) {
        $num1 = $_GET['v1'];
        $num2 = $_GET['v2'];
        $oppr= $_GET['opr'];

        if ($oppr == '+') 
                echo $num1 + $num2;
        elseif ($oppr == '-') 
                echo $num1 - $num2;
        elseif ($oppr == '*') 
            
                echo $num1 * $num2;
        
        elseif ($oppr == '/') 
            
            echo $num1 / $num2;
        
        
        else 
            
            echo "Invalid operator ,<br>";
            echo "Please Enter a valid Operator";
    }

    ?>

