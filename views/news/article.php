<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $newsItem['title'] ?></title>
	<link rel="stylesheet" href="/template/css/style.css" type="text/css">
</head>
	<body>
		<div class="full-post">
			<h1>
				<a>
					<?php echo $newsItem['title'] ?>
				</a>
			</h1>
			<div class="subtitle">
				<h2>
					<?php echo $newsItem['author'] ?> at <?php echo $newsItem['date'] ?>
				</h2>
			</div>
			<div class="content">
				<div class="image">
					<img src="/template<?php echo $newsItem['image'] ?>" alt="image">
				</div>
				<?php echo $newsItem['content'] ?>
			</div>
			<div class="meta">
				<a href="/news/" class="article-link">
					Back to article list...
				</a>
			</div>
		</div>
	</body>
</html>