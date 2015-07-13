
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
    echo $post_title = $_POST['title'];
    echo $post_author = $_POST['author'];
    echo $post_keywords = $_POST['keywords'];
    echo $post_image = $_FILES['image'] ['name'];
    echo $post_content = $_POST['content'];
}


?>




