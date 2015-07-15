<html>
<head>
    <title>Admin Panel</title>
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
    <h2><a href="../admin/index.php?id=insert">Insert New posts</a></h2>
    <h2><a href="#">View Comments</a></h2>
</div>
<!--sidebar-->

<!--table-->
<table width="1000" border="5" align="center">
    <tr>
        <td colspan="10" align="center" bgcolor="aqua"><h1>View all Posts</h1></td>
    </tr>
<!--table heading-->
        <tr bgcolor="#f5f5dc">
            <th>Post No:</th>
            <th>Post Date:</th>
            <th>Post Author:</th>
            <th>Post Title:</th>
            <th>Post Image:</th>
            <th>Post Content:</th>
            <th>Delete Post:</th>
            <th>Edit Post:</th>
        </tr>
    <?php
    $connect = mysqli_connect("localhost","root","Kags02244","cms");
    mysqli_select_db($connect,"cms");
    $select_posts = "SELECT * from posts";
    $query_posts = mysqli_query($connect,$select_posts,MYSQLI_STORE_RESULT);

    while($row = mysqli_fetch_array($query_posts,MYSQLI_BOTH)) {

        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_author = $row['post_author'];
        $post_image = $row['post_image'];
        $post_keywords = $row['post_keywords'];
        $post_content = substr($row['post_content'], 0, 100);

        ?>

        <tr align="center">
            <td>
                <?php echo $post_id ?>
            </td>

            <td>
                <?php echo $post_date ?>
            </td>

            <td>
                <?php echo $post_author ?>
            </td>

            <td>
                <?php echo $post_title ?>
            </td>

            <td>
                <img src="../images/<?php echo $post_image ?>" alt="image" height="80" width="80"/>
            </td>

            <td>
                <?php echo $post_content ?>
            </td>

            <td>
                <a href="delete.php?del=<?php echo $post_id ?>">Delete</a>
            </td>

            <td>
                <a href="edit.php?edit=<?php echo $post_id ?>">Edit</a>
            </td>
        </tr>
        <?php } ?>
</table>
<!--table-->

</body>
</html>