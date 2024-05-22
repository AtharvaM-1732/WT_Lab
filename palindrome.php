<html>
    <head>
        <title>Palindrome number</title>
    </head>
    <body>
        <form method="post">
            Enter a number to check whether it is Palindrome:<br>
            <input type="number" name="string" id="no">
            <input type="submit"/>
        </form>
        <?php
            if($_POST)
            {
                //Getting value from input text box 'number'
                $string = $_POST['string'];
                $rev = strrev($string);
                //Use if else to check Palindrome
                if($rev==$string)
                    echo "Palindrome<br>";
                else
                    echo "Not a Palindrome<br>";
            }
        ?>
    </body>
</html>