<?php
$connect = mysqli_connect("localhost","root","Kags02244","cms");
mysqli_select_db($connect,"cms");

    if(isset($_GET['del'])){
        $delete_post = $_GET['del'];

        $delete_query = "DELETE FROM posts WHERE post_id = '$delete_post' ";

        if(mysqli_query($connect,$delete_query)) {
            echo "<script>alert('Post has been deleted')</script>";
            echo "<script>window.open('viewpost.php','_self')</script>";
        }
    }