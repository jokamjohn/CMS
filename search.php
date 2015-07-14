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
    <?php include("includes/connection.php");
        if(isset($_GET["search"])){
            echo $search_value = $_GET['value'];

    }

    ?>

</div>

<div><?php include("includes/sidebar.php")?></div>

<div id="footer">Footer</div>
</body>
</html>