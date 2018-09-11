<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>科技狐</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="jquery-1.8.3.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include('conn.php');
$id=$_GET['id'];
$sql="select * from tb_xcx where id=".$id;
$r=mysql_query($sql);
while ($rs=mysql_fetch_array($r)) {
    echo $rs['content'];
}
?>
</body>
</html>
