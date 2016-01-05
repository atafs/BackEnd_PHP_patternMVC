<html>
    <head>
        <title>Information Gathered</title>
    </head>
    
    <body>
        <?php
            //VARIABLES
            $userName = $_POST['username'];
            $streetAddress = $_POST['streetaddress'];
            $cityAddress = $_POST['cityaddress'];

            //PRINT  
            echo $userName . "</br>"
            echo streetAddress . "</br>"
            echo $cityAddress . "</br>"
                
            //STRING
            $str = <<<EOD
            The customers name is
            $userName and they
            live at $streetAddress
            in $cityAddress
            EOD;

            //PRINT
            echo $str;
        ?>
    </body>
</html>