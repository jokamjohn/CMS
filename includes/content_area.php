<div id="main_content">Content
<?php

$connect = mysqli_connect("localhost","root","Kags02244","cms");
mysqli_select_db($connect,"cms");

$select_posts = "SELECT * from posts ORDER BY post_id DESC";// orderby asc or desc or rand() so that last post comes first

$query_posts = mysqli_query($connect,$select_posts,MYSQLI_STORE_RESULT);

while($row = mysqli_fetch_array($query_posts,MYSQLI_BOTH)){
    //prints the array
    //print_r($row);
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_author = $row['post_author'];
    $post_image = $row['post_image'];
    $post_keywords = $row['post_keywords'];
    $post_content = substr($row['post_content'],0,200);//show only the first 200 characters

?>

    <a href="../pages.php?id=<?php echo $post_id ?>">
    <h2><b><?php echo "$post_title <br>";?></b></h2>
    </a>
    <p align="left">Published on:<b><?php echo $post_date ?></b></p>

    <p align="right">Posted by:<b><?php echo $post_author ?></b></p>

    <center><img src="images/<?php echo $post_image; ?>" alt="image" width="500" height="400"/></center>

    <p align="justify"><?php echo $post_content ?><a href="../pages.php?id=<?php echo $post_id ?>"> Read more</a></p>





<?php } ?>

</div>