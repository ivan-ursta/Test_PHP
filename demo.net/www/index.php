<?php
require_once "./includes/head.html";

if(isset($_REQUEST['login']) && isset($_REQUEST['pwd']) && isset($_FILES['avatar'])){
    $user=$_REQUEST['login'];
    echo "Hello $user";

    move_uploaded_file($_FILES['avatar']['tmp_name'], "./uploads/".$_FILES['avatar']['name']);
}
else{
    require_once "./includes/form.html";
}

require_once "./includes/footer.html";

