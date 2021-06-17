<! DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
 <?php if(!isset($_SESSION['user'])):header("location: index.php"); ?>
 <?php else: ?>
 <?php endif ?>
 <?php header("location:index.php"); ?>
</body>
</html>
