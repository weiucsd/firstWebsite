<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>直播信息汇总（测试版）</title>
		<link href="style.css" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<h2>炉石传说直播汇总</h2>

		<?php
			include 'db.php';
			$conn = dbConnect();
		?> 
		<!-- 显示直播信息 -->
		<div class="right-content">
			<?php
				$sql = "SELECT * FROM HearthStones WHERE view > 100 ORDER BY view DESC;";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
			?>
		    <div class="content-grid">
		    	<a href=<?= $row['link']?> target="_blank" title=<?= $row['cate']?>>
		    		<img src=<?= $row['img_url']?>>
		    		<div class="text">
						<div class="title">
					        <?= $row['title']?>
					    </div>
					    <div class="cate">
					        <?= $row['web']?>
					    </div>
					</div>
					<div class="text">
						<div class="zhubo">
					        <?= $row['zhubo']?>
					    </div>
					    <div class="view">
					        <?= $row['view']?>
					    </div>
					</div>
					<div class="text"></div>
			    </a>
		    </div>
			<?php
				}//while end
			?>
		</div>

	</body>
</html>