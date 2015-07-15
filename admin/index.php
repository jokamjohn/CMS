    <?php
        session_start();
        if(!isset($_SESSION['user_name'])){
            /*
             * Redirect to the login page
             */
            header("location: login.php");
        }
        else {


    ?>


<html>

    <head>

        <title>
            Admin Panel
        </title>

        <link rel="stylesheet" href="../css/admin_style.css"/>

    </head>

<body>

<!--header-->
    <div id="header">
        <a href="index.php">
        <h1>Welcome to the Admin Panel</h1>
        </a>
    </div>

<!--sidebar-->
    <div id="sidebar">
        <h2><a href="#">Logout</a></h2>
        <h2><a href="../admin/viewpost.php">View Posts</a></h2>
        <h2><a href="../admin/index.php?id=insert">Insert New posts</a></h2>
        <h2><a href="#">View Comments</a></h2>
    </div>
<!--body-->
    <div id="welcome">
        <h1>Welcome to the Admin Panel</h1>
        <p>This is where you manage your blog</p>

        <?php
                if(isset($_GET['id'])){
                    include("../admin/insert_post.php");
                }
        ?>
    </div>

<!--body-->

</body>

</html>

    <?php  } ?>