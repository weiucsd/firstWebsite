<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>直播信息汇总（测试版）</title>
<style>
.picture{
	/*float:left;*/
	position:relative;
	overflow:hidden;
	z-index:1;
	width:auto;
	height:auto;
}
</style>
</head>
<body>

<?php
	echo "把数据库的信息显示出来<br><br>";

	include 'db.php';
	$conn = dbConnect();
?> 
<!-- 显示直播的表格 -->
<table width=50% border="0" align="center" cellpadding="5" cellspacing="1" border=0>  
	<tr bgcolor="#eff3ff">  
	  <td> id </td>
	  <td> name </td>
	  <td> created time </td>
	  <!-- <td> last modified time </td> -->
	</tr>
<?php
	$sql = "SELECT * FROM HearthStones";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {
?>
	<tr>  
	  <td><?= $row['id']?></td>
	  <td><?= $row['title']?></td>
	  <!-- <td><a href="image.php?albumID=<?= $row['id']?>&imgID=0" target="_blank"></a></td> -->
	  <td><?= $row['zhubo']?></td>  
	  <td><?= $row['view']?></td>
	</tr>
<?php
	}//while end
?>




</body>
</html>