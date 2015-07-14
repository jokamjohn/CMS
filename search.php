<html>
<head>
    <title>CMS Project</title>
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
   include "includes/connection.php";

   if(isset($_GET['search'])){
       $search_value = $_GET['value'];

       $search_query = "SELECT * from posts WHERE post_keywords LIKE '%$search_value%'";
       $query_posts = mysqli_query($connect,$search_query,MYSQLI_STORE_RESULT);

       while($row = mysqli_fetch_array($query_posts,MYSQLI_BOTH)) {
           $post_title = $row["post_title"];
           $post_image = $row["post_image"];
           $post_content = $row["post_content"];


       }
   }
   ?>

</div>

<div><?php include("includes/sidebar.php")?></div>

<div id="footer">Footer</div>
</body>
</html>