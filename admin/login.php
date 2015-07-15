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

</body>
</html>