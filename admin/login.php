    <?php
        /*
         * start session in order to use it in the page
         */
        session_start();
    ?>

<html>
<head>
    <title>
        Admin Login
    </title>
    <link rel="stylesheet" href="../css/admin_style.css"/>
</head>
<body>
    <div id="header">
        <h1>Welcome To The Admin Panel</h1>
    </div>

    <div>
        <form action="login.php" method="post">

            <table align="center" border="5" bgcolor="#a52a2a">

                <tr>
                    <td align="center" colspan="10">
                        Please Signin
                    </td>
                </tr>

                <tr>
                    <td>
                        Username:
                    </td>

                    <td>
                        <label>
                            <input type="text" name="user_name"/>
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password
                    </td>

                    <td>
                        <label>
                            <input type="password" name="pass_word"/>
                        </label>
                    </td>

                </tr>

                <tr>
                    <td align="center" colspan="10">
                        <input type="submit" name="login" value="Login"/>
                    </td>
                </tr>

            </table>
        </form>
    </div>
            <?php

                $connect = mysqli_connect("localhost","root","Kags02244","cms");
                mysqli_select_db($connect,"cms");

                if(isset($_POST['login'])){

                    $user_name = $_POST['user_name'];
                    $pass_word = $_POST['pass_word'];

                    $login_select = "SELECT * FROM admin_login WHERE user_name = '$user_name' AND pass_word = '$pass_word'";
                    $login_query = mysqli_query($connect,$login_select,MYSQLI_STORE_RESULT);

                        if(mysqli_num_rows($login_query) > 0){
                            /*
                             * if true create a session for that user_name
                             */
                            $_SESSION['user_name'] = $user_name;
                            echo "<script>window.open('index.php','_self')</script>";
                        }
                        else {

                            echo "<script>alert('Wrong username or password')</script>";

                        }
                }


            ?>
</body>
</html>