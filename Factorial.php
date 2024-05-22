<html>
    <head>
        <title>Factorial Program using loop in PHP</title>
    </head>
    <body>
        <form method="post">
            Enter the number:<br>
            <input type="number" name="number" id="no">
            <input type="submit"/>
        </form>
        <?php
            if($_POST)
            {
                $fact = 1;
                //Getting value from input text box 'number'
                $n = $_POST['number'];
                echo "Factorial of $n:<br><br>";
                //Start of LOOP
                for($i = 1; $i<= $n; $i++)
                {
                    $fact = $fact * $i;
                }
                echo $fact . "<br>";
            }
        ?>
    </body>
</html>
