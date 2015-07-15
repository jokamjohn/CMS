<html>
<head>
    <title>Post title</title>
    <link rel="stylesheet" href="css/style.css" media="all"/>
</head>
<!-- Created by John Kagga.-->
<!-- User: DELL-->
<!-- Date: 7/13/2015-->
<!-- Time: 9:33 AM-->
<body>
<div><?php include("includes/header.php")?></div>
<div><?php include("includes/navbar.php")?></div>

<div id="main_content">
    <?php

    if (isset($_GET['id'])){
        $get_id = $_GET['id'];

    $connect = mysqli_connect("localhost","root","Kags02244","cms");
    mysqli_select_db($connect,"cms");

    $select_post = "SELECT * from posts where post_id = '$get_id'";

    $query_post = mysqli_query($connect,$select_post,MYSQLI_STORE_RESULT);

    while($row = mysqli_fetch_array($query_post,MYSQLI_BOTH)){
        //prints the array
        //    print_r($row);
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_author = $row['post_author'];
        $post_image = $row['post_image'];
        $post_keywords = $row['post_keywords'];
        $post_content = $row['post_content'];

        ?>



        <p align="left">Published on:<b><?php echo $post_date ?></b></p>

        <p align="right">Posted by:<b><?php echo $post_author ?></b></p>

        <center><img src="images/<?php echo $post_image; ?>" alt="image" width="500" height="400"/></center>

        <p align="justify"><?php echo $post_content ?></p>
    <?php } } ?>

</div>

<div><?php include("includes/sidebar.php")?></div>

<div id="footer">Footer</div>

</body>
</html>