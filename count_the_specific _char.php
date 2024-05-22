<html>
    <head>
        <title>Check occurence of a letter in a String</title>
    </head>
    <body>
        <form method="post">
            Enter a String:
            <input type="text" name="string" id="no"><br>
            Enter letter to be Searched:
            <input type="text" name="check" id="chk">
            <input type="submit"/>
        </form>
        
        <?php
            if($_POST)
            {
                //Getting value from input text box 'number'
                $string = $_POST['string'];
                $c = $_POST['check'];
                //Use substr_count to count the occurence of letter
                $count = substr_count($string,$c);
                echo $count;
            }
        ?>
    </body>
</html>