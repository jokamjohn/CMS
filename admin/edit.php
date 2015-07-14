<html>
<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="../css/admin_style.css"/>
</head>
<body>

<!--header-->
<div id="header">
    <a href="index.php">
        <h1>Welcome to the Admin Panel</h1>
    </a>
</div>
<!--header-->

<!--sidebar-->
<div id="sidebar">
    <h2><a href="#">Logout</a></h2>
    <h2><a href="../admin/viewpost.php">View Posts</a></h2>
    <h2><a href="#">Insert New posts</a></h2>
    <h2><a href="#">View Comments</a></h2>
</div>
<!--sidebar-->

<!--php code-->
<?php
$connect = mysqli_connect("localhost","root","Kags02244","cms");
mysqli_select_db($connect,"cms");

    if(isset($_GET['edit'])) {
        $edit_post = $_GET['edit'];

        $edit_select = "select * from posts where post_id = '$edit_post'";

        $edit_query = mysqli_query($connect, $edit_select, MYSQLI_STORE_RESULT);

        while ($row = mysqli_fetch_array($edit_query, MYSQLI_BOTH)) {

            $post_id = $row['post_id'];
            $post_title = $row['post_title'];
            $post_date = $row['post_date'];
            $post_author = $row['post_author'];
            $post_image = $row['post_image'];
            $post_keywords = $row['post_keywords'];
            $post_content = $row['post_content'];



?>



<!--php code-->

<!--form-->
<form action="edit.php" method="post" enctype="multipart/form-data">

    <table align="center" border="5" width="400" >
        <tr>
            <td align="center" colspan="10" bgcolor="#deb887" ><h1>Edit Post</h1></td>
        </tr>

        <tr>
            <td>Post Title</td>
            <td><label>
                    <input type="text" name="title" value="<?php echo $post_title ?>"/>
                </label></td>
        </tr>

        <tr>
            <td>Post Author</td>
            <td><label>
                    <input type="text" name="author" value="<?php echo $post_author ?>" />
                </label></td>
        </tr>

        <tr>
            <td>Post Keywords</td>
            <td><label>
                    <input type="text" name="keywords" value="<?php echo $post_keywords ?>" />
                </label></td>
        </tr>

        <tr>
            <td>Post Image</td>
            <td><label>
                    <input type="file" name="image" />
                    <img src="../images/<?php echo $post_image ?>" alt="post image" width="80" height=" 80"/>
                </label></td>
        </tr>

        <tr>
            <td>Post Content</td>
            <td><label>
                    <textarea name="content" id="content"  cols="30" rows="10"><?php echo $post_content ?></textarea>
                </label></td>
        </tr>

        <tr>
            <td align="center" colspan="10"><label>
                    <input type="submit" value="Update post" name="submit"/>
                </label></td>
        </tr>

    </table>
</form>
<!--form-->
<?php
        }
        }
             ?>
</body>
</html>





