<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($_POST['submit'] == 'submit')
        {
            include('data_connect.php');
            $que = "select user_name from login";
            $res = mysqli_query($db, $que);
            if(isset($res))
            {
                while($row = mysqli_fetch_array($res))
                {
                    if($row['user_name'] == $_POST['user_name'])
                    {
                        $que = "select * from login where user_name = '".$_POST['user_name']."'";
                        $res = mysqli_query($db, $que);

                        $row = mysqli_fetch_array($res);

                        if($row['password'] == $_POST['password'])
                        {
                            //setting cookie..
                            setcookie('user_name', $_POST['user_name'], mktime() + 256000, '/');

                            header('Location: main_code.php');
                        }
                        else
                        {
                            // header('Location: log_in.php');
                            echo('<script>alert("Wrong Password");</script>');
                            die('Wrong Password for '.$row['user_name']);
                            echo('<a href = "log_in.php">Back..</a>');
                        }
                    }
                    else
                    {
                        echo('<script>alert("User name not found in data base");</script>');
                    }

                }
            }
            else
            echo('<script>alert("Cannot connect to database, Please try later");</script>');
        }
    }

    mysqli_close($db);
?>