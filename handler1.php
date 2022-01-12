<?php
    if(isset($_POST["submit"]))
    {
        echo 'You are welcome, '.$_POST["username"].
            '! Your password is '.$_POST["userpass"].'<br/>';
    }
    else
    {
        echo 'No data were received!<br/>';
    }
?>


<!--    if(isset($_GET["submit"]))
    {
        echo 'You are welcome, '.$_GET["username"].
            '! Your password is '.$_GET["userpass"].'<br/>';
    }
    else
    {
        echo 'No data were received!<br/>';
    }-->

