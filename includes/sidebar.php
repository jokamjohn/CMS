<div id="sidebar">
    
    <div>
        <form action="../search.php" method="get" enctype="multipart/form-data">
            <input type="text" name="value" placeholder="search site"/>
            <input type="submit" name="search" value="Submit"/>
        </form>
    </div>
    
    <?php

    $connect = mysqli_connect("localhost","root","Kags02244","cms");
    mysqli_select_db($connect,"cms");

    $select_posts = "SELECT * from posts ORDER BY post_id DESC";// orderby asc or desc or rand() so that last post comes first

    $query_posts = mysqli_query($connect,$select_posts,MYSQLI_STORE_RESULT);

    while($row = mysqli_fetch_array($query_posts,MYSQLI_BOTH)){
        //prints the array
//    print_r($row);
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];


        ?>

        <a href="../pages.php?id=<?php echo $post_id ?>">
            <h2><b><?php echo "$post_title <br>";?></b></h2>
        </a>
    <?php } ?>






</div>

