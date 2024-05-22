<html>
    <head>
        <title>Sum of N Integers Program using loop in PHP</title>
    </head>
    <body>
        <form method="post">
            Enter the number of Integer:<br>
            <input type="number" name="number" id="no">
            <input type="submit"/>
        </form>
        <?php
            if($_POST)
            {
                $sum = 0;
                //Getting value from input text box 'number'
                $n = $_POST['number'];
                echo "Factorial of $n:<br><br>";
                //Start of LOOP
                for($i = 1; $i<= $n; $i++)
                {
                    $sum = $sum + $i;
                }
                echo $sum . "<br>";
            }
        ?>
    </body>
</html>
