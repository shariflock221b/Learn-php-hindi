

<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Marks: <input type="text" name="marks" autocapitalize="off">
            <input type="submit" name="submit" value="Submit">
       </form>
       <br>
       <?php
        if(isset($_REQUEST['submit'])) {
            $options = array(
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 100
                )
            );
            if(filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT,$options)) {
                echo "Masks is valid";
            }else {
                echo "Masks is not valid";
            }
            
        }
       ?>
    </body>
</html>


<!-- <form method="get" action="<?php //echo $_SERVER['PHP_SELF']; ?>">
            E-mail: <input type="text" name="email" autocapitalize="off">
            <input type="submit" name="submit" value="Submit">
       </form>
       <br> -->
       <?php
        // if(isset($_REQUEST['submit'])) {
        //     if(filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL)) {
        //         echo "Email is valid";
        //     }else {
        //         echo "Email is not valid";
        //     }
            
        // }