<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if($_POST[''log_out] == 'Sign Out')
    {
        setcookie('user_name', $_POST['user_name'], mktime() - 2000, '/');
    }
}
    
?>