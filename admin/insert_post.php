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
    </table>
</form>
</body>
</html>