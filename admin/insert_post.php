
<html>
<head>
    <title>Insert Post</title>
</head>
<body>
<form action="insert_post.php" method="post" enctype="multipart/form-data">

    <table align="center">
        <tr>
            <td align="center"><h1>New Post</h1></td>
        </tr>
        
        <tr>
            <td>Post Title</td>
            <td><label>
                    <input type="text" name="title" />
                </label></td>
        </tr>

        <tr>
            <td>Post Author</td>
            <td><label>
                    <input type="text" name="author" />
                </label></td>
        </tr>

        <tr>
            <td>Post Keywords</td>
            <td><label>
                    <input type="text" name="keywords" />
                </label></td>
        </tr>

        <tr>
            <td>Post Image</td>
            <td><label>
                    <input type="file" name="image" />
                </label></td>
        </tr>

        <tr>
            <td>Post Content</td>
            <td><label>
                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                </label></td>
        </tr>

        <tr>
            <td><label>
                    <input type="submit" value="Publish Post" name="submit"/>
                </label></td>
        </tr>

    </table>
</form>
</body>
</html>

<?php
$connect = mysqli_connect("localhost","root","Kags02244","cms");
mysqli_select_db($connect,"cms");


if(isset($_POST['submit'])){
     $post_title = $_POST['title'];
     $post_author = $_POST['author'];
     $post_date = date('d-m-y');
     $post_keywords = $_POST['keywords'];
     $post_image = $_FILES['image'] ['name'];
     $image_tmp =$_FILES['image']['tmp_name'];
     $post_content = $_POST['content'];

    if ($post_title == "" or $post_author == "" or $post_keywords == "" or
        $post_content == ""){

        echo "<script>alert('Please Fill in the missing fields')</script>";
        exit;
    }

    else {
        //moving the image in the images folder
        move_uploaded_file($image_tmp, "../images/$post_image");

        $insert_post = "INSERT INTO posts (post_title, post_date, post_author, post_image,
      post_keywords, post_content) VALUES ('$post_title', '$post_date', '$post_author',
      '$post_image', '$post_keywords', '$post_content')";


        //if the insertion is successful
        if ($connect->query($insert_post) === TRUE) {
           echo "<h1 align='centre'>Post successfully published</h1>";
        }
    }

}


?>




